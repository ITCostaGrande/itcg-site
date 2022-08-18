<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Valida las credenciales de un usuario
     * @param Request $request datos de formulario
     * @return void
     * @author Mario Manzanarez
     */
    public function login(Request $request)
    {
        // Validado formulario
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);
        // Validado credenciales
        if (!auth()->attempt($request->only('username', 'password'))) {
            return back()->with('mensaje', 'Credenciales incorrectas!!');
        }
        return redirect()->route('panel');
    }

}
