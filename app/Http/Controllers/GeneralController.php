<?php

namespace App\Http\Controllers;

use App\Models\Boletine;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class GeneralController extends Controller
{
    public function principal()
    {
        Artisan::call('storage:link');
        $boletines = Boletine::all()->reject(function ($boletine) {
            return $boletine->final_date <= now();

        });
        $sliders = Slider::all()->reject(function ($s) {
            return (($s->final_date <= now()) || ($s->status === 'INACTIVO'));
        });

        $data = [
            'boletines' => $boletines,
            'sliders' => $sliders
        ];
        return view('nosotros.principal')->with('data', $data);

    }

    public function showBoletine(Boletine $boletine)
    {
        return view('boletines.ver')->with('boletine', $boletine);
    }
}
