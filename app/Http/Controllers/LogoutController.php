<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * @return void
     * @author Mario Manzanarez
     * Cierra la sesión de un usuario
     */
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
