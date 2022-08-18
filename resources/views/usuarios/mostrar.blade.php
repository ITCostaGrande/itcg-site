@extends('layout.layout')
@section('content')
    <div class="centrado">
        <h2>Listado de todos los usuarios</h2>
        <hr class="divisor">
        <br>
        <a href="/usuarios/agregar">Agregar Usuario </a><br>
        <a href="/usuarios/panel" target="_self">Panel de Control</a>
    </div>

    <div class="col-xs-12 centrado">

        <table width="728" border="1" align="center" cellpadding="0" cellspacing="0">
            <tr bgcolor="#0099CC">
                <td> Usuario</td>
                <td width="50"> Nombre</td>
                <td> Email</td>
                <td> Área</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
            @foreach($users as $user)
                <tr class="brillo">
                    <td>{{$user->username}}</td>
                    <td>{{$user->name.' '. $user->apaterno.' '. $user->amaterno}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->level}}</td>
                    <td>
                        <div align="center"><a
                                href="/usuarios/{{$user->id}}"><img
                                    src="../img_menu/editar.png" width="47" height="48"/></a></div>
                    </td>
                    <td>
                        <div align="center"><a href="/usuarios/eliminar/{{$user->id}}"
                                               onclick="if(confirm('¿Realmente deseas eliminarlo?')==false){return false;}"><img
                                    src="../img_menu/eliminar.gif" width="30" height="30" border="0"/></a></div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endSection
