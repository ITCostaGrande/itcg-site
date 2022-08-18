@extends('layout.layout')
@section('content')
    <div class="col-xs-12 centrado">
        <h2>Propiedades</h2>
        <hr class="divisor">
        <br>
        <table width=80% border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
            <tr>
                <td>
                    <p class="Estilo22" align="center">Titulo:{{$boletine->title}}
                </td>
            </tr>
            <tr>
                <td>
                    <div align="center"><img src="/storage/{{$boletine->image_1}}"/></a>&nbsp;
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div align="center"><img src="/storage/{{$boletine->image_2}}"/></a>&nbsp;
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="Estilo22" align="center">Descripción Breve: <span
                            class="Estilo1">{{$boletine->small_description}}&nbsp;</span>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="Estilo22" align="center">Descripción Completa: <span
                            class="Estilo1">{{$boletine->description}}</span>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="Estilo22" align="center">Publicado el: <span
                            class="Estilo1">{{$boletine->created_at}}</span>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="Estilo22" align="center">Finaliza el:<span
                            class="Estilo1">{{$boletine->final_date}}</span>&nbsp;
                </td>
            </tr>
        </table>

    </div>
@endSection
