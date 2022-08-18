@extends('layout.layout')
@section('content')
<div id='ficha' class="centrado">
    <center>
    <img id="imgficha" src="../archivos/escolares/basedepromocion.png" display='block'>
    </center>

       <div class='display-5 text-center my-0 py-1' align='center' display='block'>
            <a role='button' href='https://itcostagrande.mindbox.app/login/alumno' style="font-family: cambria; font-size:14pt">
                Proceso de admisión
            </a>
       </div>

       <div class='display-6 text-center my-0 py-2' align='center'>
            <a role='button' href='https://drive.google.com/file/d/1l8z7sw42vDU6b1pUpwJG_EixiPj79OAi/view' style="font-family: cambria; font-size:14pt">
                Manual
            </a>
        </div>

        <div class='display-5 text-center my-0 py-1'  align='center' style="font-family: arial; font-size:13pt">
            <p>
                Oferta educativa
            </p>
            </div>

        <div class='display-5 text-center my-0 py-1' align='center' style="font-family: arial; font-size:13pt">
            <p> <a href="/oferta/presencial">
                Presencial
            </p>
        </div>

        <div class='display-5 text-center my-0 py-1' align='center' style="font-family:arial; font-size:13pt">
            <p> <a href="/oferta/distancia">
                A distancia
            </p>
        </div>
    </div>
</div>
@endSection
