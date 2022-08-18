@extends('layout.layout')
@section('content')
    <div class="col-xs-12 centrado">

        <h2 align="center">Panel de Control </h2>
        <hr class="divisor">
        <br>
        <h3>Bienvenid@ {{auth()->user()->name}}
        </h3>
        <table width="864" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="167">Haz iniciado Sesión Como:</td>
                <td width="283">
                    <!--Verificación de rol de usuario en sesión -->
                    @if (auth()->user()->level == 1)
                        <p><b>{{'Administrador'}}</b></p>
                    @elseif (auth()->user()->level == 2)
                        <b><p>{{'Comunicación'}}</b></p>
                    @endif
                </td>
                <!-- <td width="414">
                    <div align="right">
                        <p><a href="/usuarios/logout">Cerrar Sesión<img src="../img_menu/exit.jpg" width="74" height="70" border="0" /></a></p>
                    </div>
                </td> -->
            </tr>
        </table>


        <p>&nbsp;</p>
        <table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                @if(auth()->user()->level === 1)
                    <td>
                        <p align="center"><a href="/usuarios/mostrar"><img src="../img_menu/usuarios.jpg" alt="Usuarios"
                                                                           width="197" height="162" border="0"/></a></p>
                        <p align="center" class="Estilo2">Usuarios</p>
                    </td>
                @endif
                @if(auth()->user()->level === 1 || auth()->user()->level === 2)
                    <td>
                        <div align="center">
                            <p><a href="/boletines/mostrar"><img src="../img_menu/boletin.jpg" alt="catalogos"
                                                                 width="212"
                                                                 height="166" border="0"/></a></p>
                            <p align="center" class="Estilo2">Boletines</p>
                        </div>
                    </td>
            </tr>
            <tr>
                <td>
                    <div align="center">
                        <p><a href="/sliders/mostrar"><img src="../img_menu/slider.jpg" width="280" height="166"
                                                           border="0"/></a></p>
                        <p><span class="Estilo2">Sliders</span></p>
                    </div>
                </td>
                @endif
                <td>
                    <div align="center"><a href="#"><img src="../img_menu/encuesta.jpg" width="280" height="166"
                                                         border="0"/></a></div>
                </td>
            </tr>
        </table>
        <p>&nbsp;</p>

    </div>
@endSection
