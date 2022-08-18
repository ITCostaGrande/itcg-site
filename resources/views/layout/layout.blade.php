<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8"/>
    <title>TecNM | Campus ITCostaGrande</title>
    <meta name="author" content="TecNM/ITCG">
    <meta name="description" content="Página del Campus ITCostaGrande">
    <meta name="keywords"
          content="TecNM, Instituto Tecnológico Nacional de México, Tec, Campus ITCostaGrande, Universidad"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="copyright" content="TecNM/ITCostaGrande"/>
    <meta name="robots" content="ALL">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('css/Mystyles.css')}}">

    <link rel="icon" href="{{asset('img/favicon/tecnm.ico')}}"/>

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">

    <!-- Mis estilos -->
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">

    <!-- Iconos con Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/files/main/css/fa-svg-with-js.css')}}">
    <link rel="stylesheet" href="{{asset('iconos/iconos.css')}}">

    <!-- Se agrega para poder usar las fuentes en el css -->
    <link rel="stylesheet" href="{{asset('assets/files/main/css/estilo-compresion.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/files/main/css/jssorStyle.css')}}">

    <link href="{{asset('css/noticarrusel/slick-theme.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/noticarrusel/slick.css')}}" rel="stylesheet"/>

    <!-- Estilo del carrucel -->
    <style>
        .sitios {
            width: 50%;
            margin: 0px auto;
        }

        .principal {
            width: 100%;
            /*height: 60vh;*/
            margin: 0px 0px;
            margin-bottom: 0px;
        }

        .slick-slide {
            margin: 0px 0px;
        }

        .anexo > .slick-prev:before {
            /* Flecha azul - lado izquierdo */
            background: url('{{asset('img/flechas/izquierda_gris.png')}}');
            background-size: contain;
            color: transparent;
        }

        .anexo > .slick-next:before {
            /* Flecha azul - lado derecho */
            background: url('{{asset('img/flechas/derecha_gris.png')}}');
            background-size: contain;
            color: transparent;
        }

        #noticias > .slick-prev:before {
            /* Flecha azul - lado izquierdo */
            background: url('{{asset('img/flechas/izquierda_azul.png')}}');
            background-size: contain;
            color: transparent;
        }

        #noticias > .slick-next:before {
            /* Flecha azul - lado derecho */
            background: url('{{asset('img/flechas/derecha_azul.png')}}');
            background-size: contain;
            color: transparent;
        }

        .slick-slide {
            transition: all ease-in-out .3s;
            opacity: 1;
        }

        .slick-active {
            opacity: 1;
        }

        .slick-current {
            opacity: 1;
        }


        .carousel-item {
            width: 100vw;
            height: 60vh;
            min-height: 10%;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            background: round;
        }

        .card-columns .card {
            display: inline-block;
            width: 100%;
        }

        .card-img-top {
            width: 100%;
            height: 200px !important;
            border-top-left-radius: calc(0.25rem - 1px);
            border-top-right-radius: calc(0.25rem - 1px);
        }

        @media (max-width: 400px) {
            .carousel-item {
                height: 30vh;
            }
        }

        @media (max-width: 500px) {
            .carousel-item {
                height: 25vh;
            }
        }
    </style>

    <!-- Desface -->
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="{{asset('js/modificar.js')}}"></script>
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $("#desface_noticias").fadeIn(1000);
            }, 50);
        });
        $(document).ready(function () {
            setTimeout(function () {
                $("#desface").fadeIn(1000);
            }, 500);
        });
        $(document).ready(function () {
            setTimeout(function () {
                $("#desface_footer").fadeIn(1000);
            }, 500);
        });
        $(document).ready(function () {
            setTimeout(function () {
                $("#desface_footer_gob").fadeIn(1000);
            }, 1000);
        });
    </script>

    <!-- Sub Menú -->
    <link rel="stylesheet" href="{{asset('css/bootnavbar.css')}}">

    <!-- Menú Fijo -->
    <style>
        #main_navbar,
        #main_navbar2 {
            width: 100%;
        }

        .menuazul,
        .menublanco {
            position: fixed;
        }

        .menublanco {
            top: 45px;
            z-index: 1001;
        }

        .menuazul {
            top: 82px;
            z-index: 1000;
        }

        @media (max-width: 700px) {
            .menuazul {
                top: 75px;
            }
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        posicionarMenu2();

        $(window).scroll(function () {
            posicionarMenu2();
        });

        function posicionarMenu2() {
            var altura_del_header = $('#barraGobmx').outerHeight(true);
            var altura_del_menu_blanco = $('#main_navbar2').outerHeight(true);

            if ($(window).scrollTop() >= altura_del_header) {
                $('#main_navbar2').addClass('menublanco');
                $('.wrapper').css('margin-top', (altura_del_menu_blanco) + 'px');
            } else {
                $('#main_navbar2').removeClass('menublanco');
                //$('.wrapper').css('margin-top', '0');
            }
        }

        posicionarMenu();

        $(window).scroll(function () {
            posicionarMenu();
        });

        function posicionarMenu() {
            var altura_del_menu_blanco = $('#main_navbar2').outerHeight(true);
            var altura_del_menu = $('#main_navbar').outerHeight(true);

            if ($(window).scrollTop() >= altura_del_menu_blanco) {
                $('#main_navbar').addClass('menuazul');
                $('.wrapper').css('margin-top', (altura_del_menu) + 'px');
            } else {
                $('#main_navbar').removeClass('menuazul');
                //$('.wrapper').css('margin-top', '0');
            }
        }
    </script>
    <!--  -->

    <!-- Traductor -->
    <script
        src="//costagrandeit.sharepoint.com///translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'es',
                autoDisplay: false,
                gaTrack: true,
                gaId: 'wewe',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>

</head>

<body>

<!-- MENU GOBERNACIÓN -->
<header id='header'>
    <nav class="navbar fixed-top" id="barraGobmx" style="background:#0b231e; position: fixed;">

        <div class="container u-noPaddingContainer">
            <a class="navbar-brand d-none d-lg-block" style="padding-left: 8px;" href="https://www.gob.mx/"
               target='_blank'>
                <img loading='lazy' src="https://framework-gb.cdn.gob.mx/landing/img/logoheader.svg"
                     style="width: 8rem; margin-left: -15%;" height="29" alt="Gobierno de México">
            </a>
            <div class="barraGobmx-enlaces">
                <a href="https://www.gob.mx/gobierno" title="Gobierno" class="nav-link text-white" target='_blank'>
                    Gobierno
                </a>
                <a href="https://www.gob.mx/participa" title="Participación Ciudadana" class="nav-link text-white"
                   target='_blank'>
                    Participa
                </a>
                <a href="https://datos.gob.mx" title="Datos Abiertos" class="nav-link text-white" target='_blank'>
                    Datos
                </a>
                <a class='d-none' href="https://www.gob.mx/busqueda" target='_blank'>
                    <span class="sr-only"> Búsqueda </span>
                    <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas"
                         data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                         data-fa-i2svg="">
                        <path fill="currentColor"
                              d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                    </svg>
                </a>

            </div>
        </div>
    </nav>


</header>
<!-- Encabezado principal -->
<div class="u-noPaddingContainer contenedorGobierno">
    <div class="container-cabecera">

        <div class="row no-gutters">
            <div class="col-md-12" col style="max-width:60%">
                <div class="d-inline-block text-left">
                    <a href="https://www.gob.mx/" target="_blank" id="pleca_1" class='d-none d-xl-inline'>
                        <img loading='lazy' src="{{asset('/img/logos/gobierno_mexico.png')}}" alt="Gobierno de México"
                             class="plecaGob gob">
                    </a>
                    <a href="https://www.gob.mx/sep" target="_blank" id="pleca_2">
                        <img loading='lazy' src="{{asset('/img/logos/educacion.png')}}" alt="Educación"
                             class="plecaGob gob">
                    </a>
                    <a href="/" id="pleca_3">
                        <img loading='lazy' src="{{asset('/img/logos/tecnm.jpg')}}" alt="TecNM" class="plecaTECNM"
                             style="width:20%;height:auto; min-width:80px"/>
                    </a>

                    <!--			<a href="/"  id="pleca_3">
                        <img loading='lazy' src="img/logos/itcg2.png" alt="ITCostaGrande" class="plecaTECNM" style="width:20%;height:auto; min-width:80px" />
                        </a>									-->
                </div>
            </div>
        </div>

        <!-- Opciones de accesibilidad -->
        <div class="contenedorAccesibilidad" style="top: 5%;">
            <div class="idiomas text-right">
                <a href="https://globalpage-prod.webex.com/join?surl=https%3A%2F%2Fsignin.webex.com%2Fcollabs%2F%23%2Fmeetings%2Fjoinbynumber%3FTrackID%3D%26hbxref%3D%26goid%3Dattend-meeting"
                   title="Microsoft Teams" target="_blank">

                    <img loading='lazy' src="{{asset('/img/logos/itcg2.png')}}" alt="ITCostaGrande" class="plecaTECNM"
                         style="width:20%;height:auto; min-width:80px"/>
                </a>
                <img loading='lazy' style="height:8%;width:7%" src="{{asset('/img/encabezado/microsoft_teams.png')}}"
                     alt="MT">
                </a>
                <a href="https://login.microsoftonline.com/?whr=tecnm.mx" title="Correo Institucional" target="_blank">
                    <img loading='lazy' style="height:8%;width:7%" src="{{asset('/img/encabezado/correo-icono.png')}}"
                         alt="Buzón">
                </a>
                <a href="{{asset('calendarios/CalendarioAcademicoTecNM2019-2020.pdf')}}" title="Calendario Académico"
                   target="_blank">
                    <img loading='lazy' style="height:6%;width:7%"
                         src="{{asset('/img/encabezado/calendario-icono.png')}}"
                         alt="Calendario Académico">
                </a>

                <!-- Traductor -->
                <!--			<a href='index?idioma=mandarin#googtrans(es|zh-CN)'>
                        <img style='height:6%;width:6%' src='img/encabezado/china-icono.png' title='Mandarín'
                            alt='Idioma Mandarín'>
                    </a>
                    <a href='index?idioma=ingles#googtrans(es|en)'>
                        <img style='height:6%;width:6%' src='img/encabezado/usa-icono.png' title='Inglés'
                            alt='Idioma Inglés'>
                    </a>
                    <a href='index?idioma=frances#googtrans(es|fr)'>
                        <img style='height:6%;width:6%' src='img/encabezado/francia-icono.png' title='Francés'
                            alt='Idioma Francés'>
                    </a>
                    <a href='index?idioma=español#googtrans(es|es)' class='mr-3'>
                        <img style='height:6%;width:6%' src='img/encabezado/mexico-icono.png' title='Español'
                            alt='Idioma Español'>
                    </a>																										-->
                <!--  -->

                <!--		<img loading='lazy' style="height:6%;width:6%;" title="Accesibilidad" src="img/encabezado/ojo-icono.png" alt="Débil Visual" />

                <a class="btn--accesibilidad contraste">
                    <svg  class="svg-inline--fa fa-adjust fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="adjust" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path  fill="#1B396A" d="M8 256c0 136.966 111.033 248 248 248s248-111.034 248-248S392.966 8 256 8 8 119.033 8 256zm248 184V72c101.705 0 184 82.311 184 184 0 101.705-82.311 184-184 184z" ><title>Contraste</title></path></svg> <!- <i class="fas fa-adjust"></i> -->
                <!--		</a>								-->


                <a class="btn--accesibilidad aumentaLetra " title="Aumentar letra" style="color:#1B396A">A+</a>
                <a class="btn--accesibilidad reduceLetra" title="Disminuir letra" style="color:#1B396A">A-</a>
                <a class="btn--accesibilidad resetLetra" title="Restablecer tamaño" style="color:#1B396A">A </a>
            </div>
        </div>

    </div>
</div>

<!-- Menú Blanco -->
<nav class="navbar navbar-expand-xl navbar-light bg-white" id="main_navbar2">

    <!--	<form action='Buscar' class="navbar-brand ml-1" method='POST'>
        <input class="w-100 h-100 border align-items-center" type="text" name='buscar' placeholder="Buscar" autocomplete='off' />
        <input type="hidden" name="btn_busqueda" />
    </form>															-->

    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> Menú
    </button>

    <div class="collapse navbar-collapse pl-5 pl-lx-0" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link active " href="/usuarios/panel">
                        <b class="text-success">Volver al Panel</b>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active " href="/usuarios/logout">
                        <b class="text-danger">Cerrar Sesión</b>
                    </a>
                </li>
            @endauth
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Transparencia
                </a>
                <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="#">
                            Rendición de Cuentas
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="#">
                            Nivel 2
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="#">
                            Nivel 2
                        </a>
                    </li>
                </ul> -->
            </li>
        </ul>
    </div>

</nav>

<!-- Menú Azul  -->
<nav class="navbar navbar-expand-xl navbar-dark" style='background-color: #1B396A;' id="main_navbar">

    <button class="navbar-toggler border-0 text-white" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> Menú Principal
    </button>

    <div class="collapse navbar-collapse pl-5 pl-lx-0" id="navbarSupportedContent2">
        <ul class="navbar-nav mr-auto">

            <!--			<div class='d-none d-lg-block' id="tecnmblanco" style="visibility:hidden; ">
                <img loading='lazy' alt="TecNM" style="width: 90px; height:auto;" src="img/logos/tecnm_menu.png" />
            </div>															-->

            <li class="nav-item active">
                <a class="nav-link" href="/"> <span class="icon-home"></span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle font-weight-bold" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Conócenos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/conocenos/nosotros">
                            Nosotros
                        </a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/conocenos/mensaje">
                            Mensaje del Director
                        </a>
                    </li>
                    <li class="nav-item dropdown">

                    <li>
                        <a class="dropdown-item" href="/conocenos/mision"> Misión </a>
                    </li>
                    </li>


                    <!-- <li>
                        <a class="dropdown-item" href="/conocenos/vision"> Visión </a>
                    </li> -->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/conocenos/valores">
                            Valores
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/conocenos/calidad">
                            Política de calidad
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="../archivos/organigrama.pdf">
                            Organigrama institucional
                        </a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/conocenos/directorio">
                            Directorio
                        </a>
                    </li> -->
                    <!-- <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/conocenos/avisos">
                            Avisos importantes
                        </a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/conocenos/normateca">
                            Normateca
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle font-weight-bold" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Oferta Educativa
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/oferta/presencial">
                            Educación presencial
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/oferta/distancia">
                            Educacion a distancia
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle font-weight-bold" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Estudiantes
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/estudiantes/reinscripcion"> Reinscripción </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/estudiantes/act_complementarias"> Act. Complementaria </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/estudiantes/servicio_social"> Servicio social </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/estudiantes/residencias"> Residencias </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/estudiantes/titulacion"> Titulación </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item"
                           href="https://www.facebook.com/people/ITcostagrande-Egresados-Egresadas/100009172500207/">
                            Egresados </a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/estudiantes/bolsa"> Bolsa de trabajo </a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/estudiantes/buzon"> Buzon de observ. y sug. </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="../archivos/Normatividad/Manual_de_Lineamientos_TecNM.pdf"
                           target="_blank"> Manual de lineamientos </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="../archivos/Normatividad/reglamento_alumnos.pdf" target="_blank">
                            Reglamento de alumnos </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/estudiantes/biblioteca_digital"> Biblioteca digital </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/estudiantes/act_extraescolares"> Actividades extraescolares </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/estudiantes/cisco"> Cisco Networking Academy ITCG </a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="dropdown-item" href="https://www.itcostagrande.edu.mx/menu_sse/login.php"> Encuestas </a>
                    </li> -->
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle font-weight-bold" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Becas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li class="nav-item dropdown">
                        <a class="dropdown-item"
                           href="https://www.gob.mx/becasbenitojuarez/articulos/beca-jovenes-escribiendo-el-futuro-de-educacion-superior/"
                           target="_blank"> SUBES </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/becas/resultados"> Resultados </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active font-weight-bold" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Aspirantes
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/aspirantes/fichas"> Fichas </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="../archivos/Lista_aspirtantes_ACEPTADOS.pdf" target="_blank">
                            Lista de aceptados </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="../archivos/escolares/requisitosdeinscripcion.pdf"
                           target="_blank"> Inscripciones </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="/aspirantes/formatos"> Formatos </a>
                    </li>
                </ul>
            </li>

            <!-- <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle font-weight-bold" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Vinculación
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="#"> Nivel 2 </a>
                    </li>
                    <li class="nav-item dropdown dropleft">
                        <a class="dropdown-item dropdown-toggle" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nivel 2
                        </a>
                        <ul class="dropdown-menu left" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="#"> Nivel 3 </a></li>
                            <li><a class="dropdown-item" href="#"> Nivel 3 </a></li>
                            <li><a class="dropdown-item" href="#"> Nivel 3 </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="#">
                            Nivel 2
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item dropdown-toggle" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nivel 2
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="#"> Nivel 3 </a></li>
                            <li><a class="dropdown-item" href="#"> Nivel 3 </a></li>
                        </ul>
                    </li>
                </ul>
            </li> -->


        </ul>
    </div>

</nav>
<!-- Redes Sociales Lateral -->
<div class="sticky-container">
    <ul class="sticky">
        <li>
            <img loading='lazy' src="{{asset('/img/redes_sociales/facebook.png')}}" width="32" height="32"
                 alt="facebook"/>
            <p><a href="https://www.facebook.com/TECNMCostaGrande/" target="_blank">Me gusta en<br>Facebook</a></p>
        </li>
        <li>
            <img loading='lazy' src="{{asset('/img/redes_sociales/twitter.png')}}" width="32" height="32"
                 alt="Twitter"/>
            <p><a href="https://twitter.com/it_costagrande" target="_blank">Síguenos en<br>Twitter</a></p>
        </li>
        <li>
            <img loading='lazy' src="{{asset('/img/redes_sociales/youtube.png')}}" width="32" height="32"
                 alt="YouTube"/>
            <p><a href="https://www.youtube.com/channel/UCR1T49p0cMxHKKxUmpKFV7g" target="_blank">Suscríbase en<br>YouTube</a>
            </p>
        </li>
    </ul>
</div>
<!--Aqui se incorpora las paginas html  -->

@yield('content')


<!-- Dirección y teléfono -->
<div id='desface_footer' style='display: none;'>
    <footer class='border bg-tecnm footer'>

        <div class='row m-0 justify-content-center p-3'>

            <div class='h6 col-12 col-lg-3 text-center text-lg-left' style='line-height: 1.5;'>

                <p class='h5 font-weight-bold my-2 mt-lg-5'>
                    Dirección
                </p>
                <p>
                    Manzana 30, Lote 1, Col. El Limón, C.P. 40880, Zihuatanejo, Guerrero.
                </p>

                <p class='h5 font-weight-bold mt-lg-5'>
                    Contacto
                </p>
                <p>
                <div class='row'>
                    <div class='col-12'>
                        <p>Email: dir_costagrande@tecnm.mx</p>
                    </div>
                    <div class='col-12'>
                        <p>Conmutador:
                            <br>(755) 554 4851
                            <br>(755) 554 4852
                            <br>(755) 554 5487
                    </div>
                </div>
                </p>

            </div>

            <div class='h6 col-12 col-lg-3 text-center text-lg-left' style='line-height: 1.5;'>
                <p class='h5 font-weight-bold my-2 mt-lg-5'>
                    Enlaces
                </p>
                <p>
                    <a style="color:#fff"
                       href="http://portaltransparencia.gob.mx/buscador/search/search.do?method=begin">
                        Portal de Obligaciones de Transparencia
                    </a>
                    <br/>
                    <a style="color:#fff" href="http://inicio.ifai.org.mx/SitePages/ifai.aspx">INAI</a>
                    <br/>
                    <a style="color:#fff" href="mailto: web@tecnm.mx">
                        Buzón de Sugerencias
                    </a>
                </p>

                <p class='h5 font-weight-bold my-2'>
                    Número de visitas
                </p>

            </div>


            <div class='h6 col-12 col-lg-6 '>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3801.8456494743323!2d-101.56027428492463!3d17.657467987917297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8d5710dd693%3A0x22995052a644fd71!2sITCG!5e0!3m2!1sen!2smx!4v1608097620289!5m2!1sen!2smx"
                    width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>

            <div class='vh6 col-12 text-center' style='line-height: 1.5;'>
                © Copyright 2022 TecNM/ITCostaGrande - Todos los Derechos Reservados
                <br/>
                <a class='text-white'
                   href='https://www.gob.mx/cms/uploads/attachment/file/328462/Proyecto_Aviso_Privacidad_TecNM_16052018.pdf'
                   target='_blank'> Aviso de Privacidad </a>
                <br/>
                Última actualización: 15/08/2022
            </div>

        </div>

    </footer>
</div>

<!-- Opciones de Accesibilidad -->
<script src='../assets/files/main/js/index.onload.js'></script>

<!-- Twitter -->
<script id='twitter-wjs' src='https://platform.twitter.com/widgets.js'></script>

<!-- Banner -->
<script src='../assets/web/assets/jquery/jquery.min.js'></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>

<!-- Configuración de los carrucel -->
<script>
    $(document).on('ready', function () {

        $('.one-time').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            adaptiveHeight: true,
            adaptiveWidth: true,
            autoplay: true,
            autoplaySpeed: 6000,
            arrows: false,
            fade: true,
            pauseOnHover: true
        });

        $('.center').slick({
            dots: false,
            infinite: true,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 4000,
            centerMode: false,
            centerPadding: '0px',
            slidesToShow: 4,
            responsive: [{
                breakpoint: 768,
                settings: {
                    //arrows: false,
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 2
                }
            }]
        });

        $('.anexo').slick({
            dots: false, // puntos
            infinite: true,
            arrows: true, // flechas
            autoplay: true,
            autoplaySpeed: 3500,
            slidesToShow: 4,
            pauseOnHover: true,
            responsive: [{
                breakpoint: 768,
                settings: {
                    //arrows: false,
                    slidesToShow: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerPadding: '0px',
                    slidesToShow: 2
                }
            }]
        });
    });
</script>

<script src="../js/noticarrusel/slick.js"></script>

<!-- Footer Gobernación -->
<div id='desface_footer_gob' style='display: none;'>
    <footer class="main-footer m-0 p-1">

        <div class="row justify-concent-center list-info w-100 m-0 p-2" id='gobierno_mexico'>

            <div class="col-11 col-sm-3 text-center">
                <img src="https://framework-gb.cdn.gob.mx/landing/img/logoheader.svg" alt="logo gobierno de méxico"
                     class="img-fluid p-3 w-100">
            </div>

            <div class="col-11 col-sm-3">
                <h5>Enlaces</h5>
                <ul>
                    <li>
                        <a href="https://participa.gob.mx" target="_blank" rel="noopener"
                           title="Enlace abre en ventana nueva">
                            Participa
                        </a>
                    </li>
                    <li>
                        <a href="https://www.gob.mx/publicaciones" target="_blank" rel="noopener"
                           title="Enlace abre en ventana nueva">
                            Publicaciones Oficiales
                        </a>
                    </li>
                    <li>
                        <a href="http://www.ordenjuridico.gob.mx" target="_blank" rel="noopener"
                           title="Enlace abre en ventana nueva">
                            Marco Jurídico
                        </a>
                    </li>
                    <li>
                        <a href="https://consultapublicamx.inai.org.mx/vut-web/" target="_blank" rel="noopener"
                           title="Enlace abre en ventana nueva">
                            Plataforma Nacional de Transparencia
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-11 col-sm-3">
                <h5> ¿Qué es gob.mx? </h5>
                <p>
                    Es el portal único de trámites, información y participación ciudadana.
                    <a href="https://www.gob.mx/que-es-gobmx" target="_blank">Leer más</a>
                </p>

                <ul>
                    <li>
                        <a href="https://datos.gob.mx" target="_blank">
                            Portal de datos abiertos
                        </a>
                    </li>
                    <li>
                        <a href="https://www.gob.mx/accesibilidad" target="_blank">
                            Declaración de accesibilidad
                        </a>
                    </li>
                    <li>
                        <a href="https://www.gob.mx/privacidadintegral" target="_blank">
                            Aviso de privacidad integral
                        </a>
                    </li>
                    <li>
                        <a href="https://www.gob.mx/privacidadsimplificado" target="_blank">
                            Aviso de privacidad simplificado
                        </a>
                    </li>
                    <li>
                        <a href="https://www.gob.mx/terminos" target="_blank">
                            Términos y Condiciones
                        </a>
                    </li>
                    <li>
                        <a href="https://www.gob.mx/terminos#medidas-seguridad-informacion" target="_blank">
                            Política de seguridad
                        </a>
                    </li>
                    <li>
                        <a href="https://www.gob.mx/sitemap" target="_blank">
                            Mapa de sitio
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-11 col-sm-3">
                <h5>
                    <a href="https://www.gob.mx/tramites/ficha/presentacion-de-quejas-y-denuncias-en-la-sfp/SFP54"
                       target="_blank">
                        Denuncia contra servidores públicos
                    </a>
                </h5>
            </div>

        </div>

    </footer>
</div>
</div>
<!-- Menú Azul - Permite el desglose -->
<script src="../js/bootnavbar.js"></script>
<script>
    $(function () {
        $('#main_navbar').bootnavbar({
            //option
            //animation: false
        });
    })
</script>
<script src="../js/funciones.js"></script>
</body>

</html>
