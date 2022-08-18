<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $sliders = Slider::all();
        return view('sliders.mostrar')->with('sliders', $sliders);
    }

    public function create()
    {
        return view('sliders.agregar');
    }

    public function createSlider(Request $request)
    {
        // validaciones al formulario
        $this->validate($request, [
            'title' => ['required', 'min:1'],
            'final_date' => ['required'],
            'status' => ['required'],
            'image' => ['required']
        ]);
        // Moviendo archivos a carpeta del server
        if ($request['file']) {
            $file = $request['file']->store('sliders', 'public');
        } else $file = null;
        $image = $request['image']->store('sliders/images', 'public');
        Slider::create([
            'title' => $request->title,
            'final_date' => $request->final_date,
            'file' => $file,
            'url' => $request->url,
            'image' => $image,
            'create_user' => $request->create_user,
            'status' => $request->status
        ]);
        return redirect()->route('mostrar.slider');
    }

    /** Elimina un slider mediante su id
     * @param Slider $slider id del slider
     * @return \Illuminate\Http\RedirectResponse
     * @author Mario Manzanarez
     */
    public function eliminar(Slider $slider)
    {
        $slider = Slider::find($slider->id);
        Storage::disk('public')->delete($slider->image);
        if ($slider->file)
            Storage::disk('public')->delete($slider->file);
        $slider->delete();
        return redirect()->route('mostrar.slider');
    }

    public function editarView(Slider $slider)
    {
        $slider->final_date = Carbon::parse($slider->final_date)->format('Y-m-d');
        return view('sliders.modificar')->with('slider', $slider);
    }

    public function editar(Request $request)
    {
        // validaciones al formulario
        $this->validate($request, [
            'title' => ['required', 'min:1'],
            'final_date' => ['required'],
            'status' => ['required']
        ]);
        //Obteniendo datos del slider
        $slider = Slider::find($request->id);
        //Moviendo Archivos
        if ($request['image']) {
            $image = $request['image']->store('sliders/images', 'public');
            Storage::disk('public')->delete($slider->image);
        } else $image = null;
        if ($request['file']) {
            $file = $request['file']->store('sliders', 'public');
            if ($slider->file)
                Storage::disk('public')->delete($slider->file);
        } else $file = null;

        $slider->title = $request->title;
        $slider->image = ($image) ? $image : $slider->image;
        $slider->file = ($file) ? $file : $slider->file;
        $slider->final_date = $request->final_date;
        $slider->url = $request->url;
        $slider->status = $request->status;

        $slider->save();

        return redirect()->route('mostrar.slider');
    }
}
