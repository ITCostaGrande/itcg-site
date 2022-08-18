@extends('layout.layout')
@section('content')
    <div class="col-xs-12 centrado">
        <h2>{{$boletine->title}}</h2>
        <hr class="divisor">
        <br>
        <img src="/storage/{{$boletine->image_1}}" width="30%">
        <br>
        <div class="reinscripcion">
            <h3> {{$boletine->small_description}} </h3>
        </div>
        @if($boletine->image_2)
            <img src="/storage/{{$boletine->image_2}}" width="30%">
        @endif
            <div class="reinscripcion">
                <p>{{$boletine->description}}</p>
            </div>
    </div>
@endsection
