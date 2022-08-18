@extends('layout.layout')
@section('content')
<div class="centrado col-xs-12">
    <h2>Normateca</h2>
    <hr class="divisor">
    <br>
    <div class="reticula">
        <ul>
            <li><a href="{{asset('archivos/MAN.ORG.I.T.10parte1.pdf')}}"> MANUAL DE ORGANIZACIÓN GENERAL DEL TECNOLÓGICO </a></li>

            <br>

            <li><a href="{{asset('archivos/ingresos_propios.pdf')}}"> MANUAL DEL SISTEMA DE INGRESOS PROPIOS DE LOS PLANTELES EDUCATIVOS DEPENDIENTES DE LA SUBSECRETARIA DE EDUCACIÓN E INVESTIGACIÓN TECNOLÓGICAS. </a></li>
        </ul>
    </div>

    <br>
</div>
@endSection