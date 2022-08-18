<?php

namespace App\Http\Controllers;

use App\Models\Boletine;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BoletinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('boletines.agregar');
    }

    /**
     * Controlador para crear un nuevo boletin
     * @param Request $request parámetros enviados desde vista para crear el boletín
     * @return void
     * @author Mario Manzanarez
     */
    public function createBoletine(Request $request)
    {
        //Añadiendo validaciones
        $this->validate($request, [
            'title' => ['required', 'min:10'],
            'small_description' => ['required', 'min:10', 'max:50'],
            'description' => ['required', 'min:50'],
            'final_date' => 'required',
            'image_1' => 'required'
        ]);

        //Moviendo Archivos
        $image_1 = $request['image_1']->store('boletines', 'public');
        if ($request['image_2'])
            $image_2 = $request['image_2']->store('boletines', 'public');
        else $image_2 = null;
        //Almacenando en base de datos
        Boletine::create([
            'image_1' => $image_1,
            'image_2' => $image_2,
            'title' => $request->title,
            'small_description' => $request->small_description,
            'description' => $request->description,
            'final_date' => $request->final_date,
            'create_user' => $request->create_user
        ]);

        return redirect()->route('mostrar.boletin');
    }

    public function show()
    {
        $boletines = Boletine::all();
        return view('boletines.mostrar')->with('boletines', $boletines);
    }

    public function properties(Boletine $boletine)
    {
        return view('boletines.propiedades')->with('boletine', $boletine);
    }

    public function editarView(Boletine $boletine)
    {
        $boletine->final_date = Carbon::parse($boletine->final_date)->format('Y-m-d');
        return view('boletines.modificar')->with('boletine', $boletine);
    }

    public function editar(Request $request)
    {
        //Añadiendo validaciones
        $this->validate($request, [
            'title' => ['required', 'min:10'],
            'small_description' => ['required', 'min:10', 'max:50'],
            'description' => ['required', 'min:50'],
            'final_date' => 'required'
        ]);

        //Obteniendo datos del boletin
        $boletine = Boletine::find($request->id);
        //Moviendo Archivos
        if ($request['image_1']) {
            $image_1 = $request['image_1']->store('boletines', 'public');
            Storage::disk('public')->delete($boletine->image_1);
        } else $image_1 = null;
        if ($request['image_2']) {
            $image_2 = $request['image_2']->store('boletines', 'public');
            if ($boletine->image_2)
                Storage::disk('public')->delete($boletine->image_2);
        } else $image_2 = null;

        $boletine->image_1 = ($image_1) ? $image_1 : $boletine->image_1;
        $boletine->image_2 = ($image_2) ? $image_2 : $boletine->image_2;
        $boletine->title = $request->title;
        $boletine->small_description = $request->small_description;
        $boletine->description = $request->description;
        $boletine->final_date = $request->final_date;
        //Almacenando en base de datos
        $boletine->save();
        return redirect()->route('mostrar.boletin');
    }

    /**
     * Elimina un boletine mediante su id
     * @param Boletine $boletine id del boletine
     * @return \Illuminate\Http\RedirectResponse
     * @author Mario Manzanarez
     */
    public function eliminar(Boletine $boletine)
    {
        $boletine = Boletine::find($boletine->id);
        Storage::disk('public')->delete($boletine->image_1);
        if ($boletine->image_2)
            Storage::disk('public')->delete($boletine->image_2);
        $boletine->delete();
        return redirect()->route('mostrar.boletin');

    }
}
