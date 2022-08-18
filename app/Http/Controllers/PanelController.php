<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function showPanel()
    {
        return view('usuarios.panel');
    }
}
