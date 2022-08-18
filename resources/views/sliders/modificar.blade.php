@extends('layout.layout')
@section('content')
    <div class="col-xs-12 centrado">
        <h2>Modificar un Slider</h2>
        <hr class="divisor">
        <br>
        <button type="button" class="btn btn-primary"><a href="/sliders/mostrar">Mostrar todos</a></button>
        <button type="button" class="btn btn-primary"><a href="/usuarios/panel">Panel de control</a></button>


        <form name="agregar-boletin" method="POST" action="/sliders/editar" enctype="multipart/form-data">@csrf
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="title" required value="{{$slider->title}}">
            </div>
            @error('title')
            <p class="alert alert-danger" role="alert">{{$message}}</p>
            @enderror
            <div class="form-group">
                <label for="final">Fecha de expiración </label>
                <input class="fecha" type="date" name="final_date" value="{{$slider->final_date}}">
            </div>
            @error('final_date')
            <p class="alert alert-danger" role="alert">{{$message}}</p>
            @enderror
            <div class="form-group">
                <label id="primerphoto" for="foto">Slider</label>
                <input id="primerfoto" type="file" name="image" accept="image/jpeg, image/png">
            </div>
            @error('image')
            <p class="alert alert-danger" role="alert">{{$message}}</p>
            @enderror
            <div class="form-group">
                <label for="archivo">Archivo</label>
                <input id="archivo1" type="file" name="file" accept="image/jpeg, image/png, .pdf, .docx ">
            </div>
            <div class="form-group">
                <label for="url">URL</label>
                <input type="text" name="url" value="{{$slider->url}} ">
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <select name="status">
                    <option value="ACTIVO" {{($slider->status === 'ACTIVO') ? 'selected' : ''}}>Activo
                    </option>
                    <option value="INACTIVO" {{ ($slider->status === 'INACTIVO') ? 'selected' : ''}}>Inactivo
                    </option>
                </select>
            </div>
            <input type="hidden" name="id" value="{{$slider->id}}">
            <input class="btn-form" type="submit" value="Actualizar Boletín">

        </form>
    </div>
@endSection



