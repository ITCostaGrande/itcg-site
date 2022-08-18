<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Muestra el formulario para editar un usuario
     * @param User $user id del usuario a editar
     */
    public function editarView(User $user)
    {
        return view('usuarios.modificar')->with('user', $user);
    }

    public function editar(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'apaterno' => ['required'],
            'amaterno' => ['required'],
            'username' => ['required'],
            'password' => ['required', 'confirmed', 'min:6'],
            'level' => ['required'],
            'email' => ['required', 'email']
        ]);
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->apaterno = $request->apaterno;
        $user->amaterno = $request->amaterno;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->level = $request->level;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('usersShow');
    }

    /**
     * Retorna la vista con el listado de todos los usuarios
     */
    public function mostrar()
    {
        $users = User::all();
        foreach ($users as $user) {
            if ($user->level === 1)
                $user->level = 'Administrador';
            if ($user->level === 2)
                $user->level = 'Comunicación';
        }
        return view('usuarios.mostrar')->with('users', $users);
    }

    public function agregarVista()
    {
        return view('usuarios.agregar');

    }

    /**
     * Crea un nuevo usuario
     * @param Request $request
     * @return void
     * @author Mario Manzanarez
     */
    public function agregar(Request $request)
    {
        //Validación del formulario
        $this->validate($request, [
            'name' => ['required'],
            'apaterno' => ['required'],
            'amaterno' => ['required'],
            'username' => ['required', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:6'],
            'level' => ['required'],
            'email' => ['required', 'email']
        ]);
        \App\Models\User::create([
            'name' => $request->name,
            'apaterno' => $request->apaterno,
            'amaterno' => $request->amaterno,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => $request->level,
            'email' => $request->email
        ]);
        return redirect()->route('usersShow');
    }

    /**
     * Elimina un usuario de la base de datos
     * @param User $user dato del usuario a eliminar
     * @return RedirectResponse si es el usuario que esta en sesión, se redirecciona a login si no a mostrar todos los usuarios
     * @author Mario Manzanarez
     */
    public function eliminar(User $user)
    {
        $route = ($user->id === auth()->user()->id) ? 'login' : 'usersShow';

        $delete = User::find($user->id);
        $delete->delete();
        return redirect()->route($route);
    }
}
