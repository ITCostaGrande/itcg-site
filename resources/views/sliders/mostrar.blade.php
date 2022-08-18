@extends('layout.layout')
@section('content')
    <div class="col-xs-12 centrado">
        <h2>Listado de todos los Sliders</h2>
        <hr class="divisor">
        <br>
        <a href="/sliders/agregar">Agregar Slider</a>
        <br>
        <a href="/usuarios/panel">Regresar al Panel de Control</a>

        <table width="934" border="1" align="center" cellpadding="0" cellspacing="0">
            <tr bgcolor="#0099CC">
                <td width="30" rowspan="2">
                    <div align="center"><strong>No.</strong></div>
                </td>
                <td width="30" rowspan="2"><strong>Estado</strong></td>
                <td width="125" rowspan="2">
                    <div align="center"><strong>Imagen</strong></div>
                </td>
                <td width="254" rowspan="2" bgcolor="#0099CC">
                    <div align="center"><strong>Titulo</strong></div>
                </td>
                <td colspan="2">
                    <div align="center"><strong>PUBLICACI&Oacute;N</strong></div>
                </td>
                <td width="64" rowspan="2">
                    <div align="center"><strong>Editar</strong></div>
                </td>

                <td width="111" rowspan="2">
                    <div align="center"><strong>Eliminar</strong></div>
                </td>
            </tr>
            <tr bgcolor="#0099CC">
                <td width="110"> Fecha Ingreso</td>
                <td width="106">Fecha Final</td>
            </tr>

            @foreach($sliders  as $row)

                <tr class="brillo">
                    <td width="30">{{$row->id}}</td>

                    <td width="30">
                        @if ($row->status === "ACTIVO")
                            <img src="{{asset('/img_menu/activo.jpg')}}"/>
                        @else
                            <img src="{{asset('/img_menu/inactivo.jpg')}}"/>
                        @endif

                    </td>
                    <td><img src="/storage/{{$row->image}}"  width="100" height="100"></td>
                    <td>
                        <div align="center">
                            {{$row->title}}
                        </div>
                    </td>
                    <td>
                        <div align="center">
                            {{$row->created_at}}
                        </div>
                    </td>
                    <td>
                        <div align="center">
                            {{$row->final_date}}
                        </div>
                    </td>

                    <td>
                        <div align="center"><a href="/sliders/{{$row->id}}"><img
                                    src="{{asset('img_menu/editar.png')}}" width="47" height="48"/></a></div>
                    </td>

                    <td width="125">
                        <div align="center"><a href="/sliders/eliminar/{{$row->id}}"
                                               onclick="if(confirm('¿Realmente deseas eliminarlo?')==false){return false;}"><img
                                    src="{{asset('/img_menu/eliminar.gif')}}" width="30" height="30" border="0"/></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endSection
