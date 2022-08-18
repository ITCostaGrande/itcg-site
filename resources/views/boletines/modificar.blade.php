@extends('layout.layout')
@section('content')
    <div class="col-xs-12 centrado">
        <h2>Modificar un Boletín</h2>
        <hr class="divisor">
        <br>
        <button type="button" class="btn btn-primary"><a href="/boletines/mostrar">Mostrar todos</a></button>
        <button type="button" class="btn btn-primary"><a href="/usuarios/panel">Panel de control</a></button>


        <form name="agregar-boletin" method="POST" action="/boletines/editar" enctype="multipart/form-data"> @csrf
            <div class="form-group">
                <label for="titulo">Título</label> <br>
                <input type="text" name="title" required value="{{$boletine->title}}">
            </div>
            @error('title')
            <p class="alert alert-danger" role="alert">{{$message}}</p>
            @enderror
            <div class="form-group">
                <label for="desc-breve">Descripción breve</label> <br>
                <textarea name="small_description" cols="30" rows="5" required>{{$boletine->small_description}}</textarea>
            </div>
            @error('small_description')
            <p class="alert alert-danger" role="alert">{{$message}}</p>
            @enderror
            <div class="form-group">
                <label for="desc-completa">Descripción Completa: </label> <br>
                <textarea name="description" cols="30" rows="10"
                          required>{{$boletine->description}}</textarea>
            </div>
            @error('description')
            <p class="alert alert-danger" role="alert">{{$message}}</p>
            @enderror
            <div class="form-group">
                <label for="final">Fecha de expiración: </label> <br>
                <input class="fecha" type="date" name="final_date" value="{{$boletine->final_date}}">
            </div>
            @error('final_date')
            <p class="alert alert-danger" role="alert">{{$message}}</p>
            @enderror
            <div class="form-group">
                <label for="foto1">Primera Foto</label> <br>
                <input type="file" name="image_1" accept="image/jpeg, image/png">
            </div>
            @error('image_1')
            <p class="alert alert-danger" role="alert">{{$message}}</p>
            @enderror
            <div class="form-group">
                <label for="foto2">Segunda Foto</label> <br>
                <input type="file" name="image_2" accept="image/jpeg, image/png">
            </div>
            <input type="hidden" name="id" value="{{$boletine->id}}">
            <input type="submit" class="btn-form" value="Actualizar Boletín">

        </form>

    </div>
@endSection
