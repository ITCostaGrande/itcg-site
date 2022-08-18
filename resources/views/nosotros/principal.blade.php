@extends('layout.layout')
@section('content')

    <section class='one-time principal border'>
        @foreach($data['sliders'] as $s)
            <div class='carousel-item active'
                 style='background-image: url({{'/storage/'.$s->image}})'>
                <a href='{{ ($s->file != "") ? "/storage/". $s->file: $s->url}}'
                   target='_blank'>
                    <div style='width:100%; height:100%'></div>
                </a>
            </div>
        @endforeach
        <!-- <div class='carousel-item' style='background-image: url("../img/slider/encuesta a egresados slider gral.jpg");'>
		<a href='../img/slider/encuesta a egresados slider gral.jpg' target='_blank'>
			<div style='width:100%; height:100%'></div>
		</a>
	</div>

	<div class='carousel-item' style='background-image: url("../img/slider/pag web1.jpg");'>
		<a href='../img/slider/pag web1.jpg' target='_blank'>
			<div style='width:100%; height:100%'></div>
		</a>
	</div>


	<div class='carousel-item' style='background-image: url("../img/slider/slider A MAGNA CEREMONIA online 8 dic.png");'>
		<a href='../img/slider/slider A MAGNA CEREMONIA online 8 dic.png' target='_blank'>
			<div style='width:100%; height:100%'></div>
		</a>
	</div> -->


    </section>






    <!-- Contenidos (Síguenos, Sitios de Interés) -->
    <div id='desface' style='display: none;'>
        <div class='container m-0 m-auto mb-3'>

            <!-- Comunicación -->
            <div class='row w-100 justify-content-center bg-light pb-3 m-0'>
                <section class='container bg-light px-5 mx-0 pb-3 m-auto' id='desface_noticias' style='display: none;'>

                    <div class='row'>

                        <div class='col-12 display-2 text-center my-0 py-3'>
                            <a role='button' href='?vista=Noticias'>
                                Comunicación
                            </a>
                        </div>

                    </div>
                    <div class='center slider my-0' id='noticias'>

                        @foreach($data['boletines'] as $b)
                            <div class='row justify-concent-center' style='position: relative;'>

                                <div class='col-12'>
                                    <img class='img-fluid mx-auto w-100' style='height: 150px;'
                                         src='/storage/{{$b->image_1}}' alt='{{$b->title}}'/>
                                </div>

                                <div class='h6 col-12 py-2 mb-1'>
                                    {{$b->title}}
                                </div>
                                <div class='h6 col-12 py-2 mb-4'>
                                    {{\Carbon\Carbon::parse($b->final_date)->format('d-m-Y')}}
                                </div>
                                <div class='col-12' style='position: absolute; bottom: 0px;'>
                                    <a href='/principal/{{$b->id}}'>
                                        LEER MÁS
                                    </a>
                                </div>

                            </div>
                        @endforeach

                    </div>

                </section>
            </div>

            <br/>

            <!-- Síguenos -->
            <div class='row w-100 justify-content-center bg-light py-3 m-0'>

                <p class='col-12 display-2 text-center'>
                    Síguenos
                </p>

                <div class='media-container-row text-center'>

                    <!-- Twitter -->

                    <a class='twitter-timeline' data-lang='es' data-width='350' data-height='525' data-dnt='true'
                       data-theme='light' href='https://twitter.com/it_costagrande'></a>

                    <!-- Youtube-->
                    <iframe width='350' height='525' src='https://www.youtube.com/embed/1fysHX-IgHo' frameborder='0'
                            allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture'
                            allowfullscreen></iframe>

                    <!-- Facebook -->
                    <iframe
                        src='https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTECNMCostaGrande%2F&tabs=timeline&width=350&height=525&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId'
                        width='350' height='525' style='border:none;overflow:hidden' scrolling='no' frameborder='0'
                        allowTransparency='true' allow='encrypted-media'></iframe>

                    <!--https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSomosTecNM%2F&tabs=timeline&width=350&height=525&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId -->


                </div>
            </div>

            <!-- Anexos -->
            <div class='row w-100 justify-content-center bg-light py-3 m-0'>
                <section class='anexos bg-light pb-2 anexo sitios'>

                    <div>
                        <a target='_blank' href='pdf/anexos/pronunciamiento.pdf'>
                            <img loading='lazy' src='img/anexos/pronunciamiento.png'/>
                        </a>
                    </div>

                    <div>
                        <a target='_blank' href='pdf/anexos/Protocolo_HSyAS.pdf'>
                            <img loading='lazy' src='img/anexos/protocolo_prevencion.png'/>
                        </a>
                    </div>

                    <div>
                        <a target='_blank' href='pdf/anexos/SFP-CE-2019_Codigo_de_Etica.pdf'>
                            <img loading='lazy' src='img/anexos/codigo_etica.png'/>
                        </a>
                    </div>

                    <div>
                        <a target='_blank' href='pdf/anexos/M00-CC-01_Codigo_de_Conducta.pdf'>
                            <img loading='lazy' src='img/anexos/codigo_conducta.png'/>
                        </a>
                    </div>

                    <div>
                        <a target='_blank' href='pdf/anexos/estrategias_austeridad.pdf'>
                            <img loading='lazy' src='img/anexos/estrategias_austeridad.png'/>
                        </a>
                    </div>

                    <div>
                        <a target='_blank' href='pdf/anexos/Convocatoria_Seguro.pdf'>
                            <img loading='lazy' src='img/anexos/convocatoria_seguro.png'/>
                        </a>
                    </div>

                    <div>
                        <a target='_blank' href='pdf/anexos/Informe_Anual_Actividades_ CEPCI_TecNM.pdf'>
                            <img loading='lazy' src='img/anexos/comite_etica.png'/>
                        </a>
                    </div>

                    <div>
                        <a target='_blank' href='pdf/anexos/decreto_tecnm.pdf'>
                            <img loading='lazy' src='img/anexos/decreto_creacion.png'/>
                        </a>
                    </div>

                </section>
            </div>

            <br/>

            <!-- Sitios de Interés -->
            <div class='row w-100 justify-content-center bg-light pt-3 m-0'>

                <p class='display-2'>
                    Sitios de Interés
                </p>

            </div>
            <div class='row w-100 justify-content-center bg-light pt-3 m-0'>

                <div class='col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3'>
                    <a href='https://www.conacyt.gob.mx/' target='_blank'>
                        <img loading='lazy' src='img/interes/CONACYT.png' alt='CONACYT' title='CONACYT'
                             class='img-fluid'/>
                    </a>
                </div>

                <div class='col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3'>
                    <a href='https://www.conricyt.mx/' target='_blank'>
                        <img loading='lazy' src='img/interes/CONRICYT.png' alt='CONRICYT' title='CONRICYT'
                             class='img-fluid'/>
                    </a>
                </div>

                <div class='col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3'>
                    <a href='http://www.ifai.org.mx/' target='_blank'>
                        <img loading='lazy' src='img/interes/INAI.png' alt='INAI' title='INAI' class='img-fluid'/>
                    </a>
                </div>

                <div class='col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3'>
                    <a href='http://consultapublicamx.inai.org.mx:8080/vut-web/?idSujetoObigadoParametro=10009&amp;idEntidadParametro=33&amp;idSectorParametro=21'
                       target='_blank'>
                        <img loading='lazy' src='img/interes/PNT.png' alt='PNT' title='PNT' class='img-fluid'/>
                    </a>
                </div>

                <div class='col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3'>
                    <a href='Dir_Posgrado'>
                        <img loading='lazy' src='img/interes/contraloria.png' alt='Dir_Posgrado' title='Dir_Posgrado'
                             class='img-fluid'/>
                    </a>
                </div>

                <div class='col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3'>
                    <a href='https://elibro.net/es/lc/itcostagrande/login_usuario/?next=/es/lc/itcostagrande/inicio/ target='
                       _blank'>
                    <img loading='lazy' src='img/interes/eLibro.png' alt='eLibro' title='eLibro' class='img-fluid'/>
                    </a>
                </div>
                <div class='col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3'>
                    <a href='https://itcostagrande.mindbox.app/login/alumno target=' _blank'>
                    <img loading='lazy' src='img/interes/mindbox.svg' alt='mindbox' title='mindbox' class='img-fluid'/>
                    </a>
                </div>

            </div>

            <br/>

        </div>
    </div>
@endsection
