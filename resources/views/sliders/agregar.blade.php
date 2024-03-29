@extends('layout.layout')
@section('content')
    <div class="col-xs-12 centrado">
        <h2>Agregar un Slider</h2>
        <hr class="divisor">
        <br>
        <button type="button" class="btn btn-primary"><a href="/sliders/mostrar">Mostrar todos</a></button>
        <button type="button" class="btn btn-primary"><a href="/usuarios/panel">Panel de control</a></button>


        <form name="agregar-boletin" method="POST" action="/sliders/agregar" enctype="multipart/form-data"> @csrf
            <div class="form-group">
                <label for="titulo">Título</label> <br>
                <input type="text" name="title" required>
            </div>
            @error('title')
            <p class="alert alert-danger" role="alert">{{$message}}</p>
            @enderror
            <div class="form-group">
                <label for="final">Fecha de expiración: </label> <br>
                <input class="fecha" type="date" name="final_date">
            </div>
            @error('final_date')
            <p class="alert alert-danger" role="alert">{{$message}}</p>
            @enderror
            <div class="form-group">
                <label for="foto">Slider</label> <br>
                <input type="file" name="image" accept="image/jpeg, image/png">
            </div>
            @error('image')
            <p class="alert alert-danger" role="alert">{{$message}}</p>
            @enderror
            <div class="form-group">
                <label for="archivo">Archivo</label> <br>
                <input type="file" name="file" accept="image/jpeg, image/png, .pdf, .docx ">
            </div>
            <div class="form-group">
                <label for="url">URL</label> <br>
                <input type="text" name="url" value=" ">
            </div>
            <div class="form-group">
                <label for="estado">Estado</label> <br>
                <select name="status">
                    <option value="ACTIVO">Activo</option>
                    <option value="INACTIVO">Inactivo</option>
                </select>
            </div>
            <input type="hidden" name="create_user" value="{{auth()->user()->id}}">
            <input class="btn-form" type="submit" value="Agregar Slider">

        </form>

    </div>
@endSection

