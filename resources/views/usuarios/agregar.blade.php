@extends('layout.layout')
@section('content')
    <div class="col-xs-12 centrado">
        <h2>Formulario para crear un nuevo usuario</h2>
        <hr class="divisor">
        <br>
        <button type="button" class="btn btn-primary"><a href="/usuarios/mostrar">Mostrar todos</a></button>
        <button type="button" class="btn btn-primary"><a href="/usuarios/panel">Panel de control</a></button>
        <p align="center" class="Estilo1">Agregar Usuario </p>

        <form name="user_form" action="/usuarios/agregar" method="POST">
            @csrf
            Nombre de Usuario(nick):<br/>
            <input type="text" name="username" size="30" maxlength="100"/>
            @error('username')
            <p class="alert alert-danger" role="alert">{{$message}}</p>
            @enderror
            <br/> Contraseña:
            <br/>
            <input type="password" name="password"/>
            @error('password')
            <p class="alert alert-danger" role="alert">{{$message}}</p>
            @enderror
            <br/>
            <label for="password_confirmation"> Repite Contraseña:</label>
            <br/>
            <input type="password" name="password_confirmation"/>
            <br/>Nombre:
            <br/>
            <input type="text" name="name" size="30" maxlength="100"/>
            @error('name')
            <p class="alert alert-danger" role="alert">{{$message}}</p>
            @enderror
            <br/>
            Apellido Paterno:
            <br/>
            <input type="text" name="apaterno" size="30" maxlength="100"/>
            @error('apaterno')
            <p class="alert alert-danger" role="alert">{{$message}}</p>
            @enderror
            <br/>Apellido Materno:
            <br/>
            <input type="text" name="amaterno" size="30" maxlength="100"/>
            @error('amaterno')
            <p class="alert alert-danger" role="alert">{{$message}}</p>
            @enderror
            <br/>Correo electrónico:
            <br/>
            <input type="text" name="email" size="30" maxlength="100"/>
            @error('email')
            <p class="alert alert-danger" role="alert">{{$message}}</p>
            @enderror
            <br/>Nivel del Usuario:
            <br/>
            <select name="level">
                <option value="1">Administrador</option>
                <option value="2">Comunicación</option>
            </select>
            <br/>
            <br/>
            <input type="submit" name="crear" value="Crear Usuario"/>
        </form>

    </div>
@endSection
