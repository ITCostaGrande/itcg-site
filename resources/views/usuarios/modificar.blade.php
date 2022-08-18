@extends('layout.layout')
@section('content')
    <div class=" col-xs-12 centrado">
        <h2>Modificar Usuario</h2>
        <hr class="divisor">
        <br>
        <button type="button" class="btn btn-primary"><a href="/usuarios/mostrar">Mostrar todos</a></button>
        <button type="button" class="btn btn-primary"><a href="/usuarios/panel">Panel de control</a></button>
        <form method="POST" name="form1" id="modificar_usuario" action="/usuarios/editar">@csrf
            <table align="center">
                <tr valign="baseline">
                    <td nowrap align="right">Usuario:</td>
                    <td><input type="text" name="username" value="{{$user->username}}" size="32"></td>
                    @error('username')
                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </tr>
                <tr valign="baseline">
                    <td nowrap align="right">Nombre:</td>
                    <td><input type="text" name="name" value="{{$user->name}}" size="32">
                    </td>
                    @error('name')
                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </tr>
                <tr valign="baseline">
                    <td nowrap align="right">Apellido paterno:</td>
                    <td><input type="text" name="apaterno" value="{{$user->apaterno}}" size="32">
                    </td>
                    @error('apaterno')
                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </tr>
                <tr valign="baseline">
                    <td nowrap align="right">Apellido materno:</td>
                    <td><input type="text" name="amaterno" value="{{$user->amaterno}}" size="32">
                    </td>
                    @error('amaterno')
                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </tr>
                <tr valign="baseline">
                    <td nowrap align="right">Password:</td>
                    <td><input type="text" name="password" value="" size="32">
                    </td>
                    @error('password')
                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </tr>
                <tr valign="baseline">
                    <td nowrap align="right"><label for="password_confirmation"> Repite Contraseña:</label></td>
                    <td><input type="password" name="password_confirmation"/>
                    </td>
                </tr>
                <tr valign="baseline">
                    <td nowrap align="right">Email:</td>
                    <td><input type="text" name="email" value="{{$user->email}}" size="32"></td>
                    @error('email')
                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                    @enderror
                </tr>
                <tr valign="baseline">
                    <td nowrap align="right">Nivel:</td>
                    <td>
                        <select name="level">
                            <option value="1">Administrador</option>
                            <option value="2">Comunicación</option>
                        </select>

                    </td>
                </tr>
                <tr valign="baseline">
                    <td nowrap align="right">&nbsp;</td>
                    <td><input type="submit" value="Actualizar registro"></td>
                </tr>
            </table>
            <input type="hidden" name="id" value="{{$user->id}}">
        </form>
    </div>
@endSection
