@extends('layout.layout')
@section('content')
    <div class="centrado col-xs-12">
        <table width="292" border="1" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    <h1 align="center">Iniciar Sesión</h1>
                    <h1 align="center"><img src="{{asset('../img/muchas/logotec.png')}}" width="80" height="78"/></h1>
                    <form action="/usuarios/login" name="miform" method="POST">
                        @csrf
                        @if(session('mensaje'))
                            <p class="alert alert-danger" role="alert">{{session('mensaje')}}</p>
                        @endif
                        <div align="center"><br/>
                            Usuario:
                            <br/>
                            <input type="text" name="username" value="{{old('username')}}">
                            <br/>
                            @error('username')
                            <p class="alert alert-danger" role="alert">{{$message}}</p>
                            @enderror
                            Password:
                            <br/>
                            <input type="password" name="password">
                            <br/>
                            @error('password')
                            <p class="alert alert-danger" role="alert">{{$message}}</p>
                            @enderror
                            <br/>
                            <input class="btn-form" type="submit" value="Entrar">
                        </div>
                    </form>
                </td>
            </tr>

        </table>

    </div>
@endSection
