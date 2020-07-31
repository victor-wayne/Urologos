<!DOCTYPE html>

<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <title>INTEGRAUROBAJ | UROLOGO | DR ERNESTO ABOYTES</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="pagina web de integra urobaj en celaya GTO y Queretaro" name="urobaj" />
    <meta content="FairTech" name="author" />
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('vendor/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/css/swiper.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/layout.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">
    <link rel="icon" href="{{ asset('img/logo-integraurobaj.png') }}" type="image/png" />

</head>


<body id="body" data-spy="scroll" data-target=".header">

    <header class="header navbar-fixed-top">
        <nav class="navbar" role="navigation">
            <div class="container">
                <div class="menu-container js_nav-item">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="toggle-icon"></span>
                </button>

                    <div class="logo">
                        <a class="logo-wrap" href="#body">
                            <img class="logo-img logo-img-main" src="{{ asset('img/logo-integraurobaj.png') }}" alt="FlameOnePage Logo">
                            <img class="logo-img logo-img-active" src="{{ asset('img/logo-integraurobaj.png') }}" alt="FlameOnePage Dark Logo">
                        </a>
                    </div>
                </div>

                <div class="collapse navbar-collapse nav-collapse">

                    <!--div class="language-switcher">
                  <ul class="nav-lang">
                    <li><a class="active" href="#">EN</a></li>
                    <li><a href="#">DE</a></li>
                    <li><a href="#">FR</a></li>
                  </ul>
                </div--->

                    <div class="menu-container">
                        <ul class="nav navbar-nav navbar-nav-right">
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="{{ route('home') }}">Inicio</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="{{ route('nosotros') }}">Nosotros</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="{{ route('staff') }}">Staff Médico</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="{{ route('servicios') }}">Servicios</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="{{ route('contacto') }}">Contacto</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="container">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>
        </div>

        <div class="carousel-inner" role="listbox">
            <div class="item blue active">
                <img class="img-responsive" src="{{asset('img/1920x1080/urologia.jpeg')}}" style="height: 100%; width: 100%; object-fit: contain;" alt="urobaj">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="">
                            <h1 class="carousel-title margin-b-40">INTEGRAUROBAJ</h1>
                            <p class="color-white margin-r-10" align="justify">En Urobaj cada día nos esforzamos por llevar la mejor calidad a cada uno de los pacientes <br>que nos visitan por lo que estamos en constante actualización.</p>
                            <p class="color-white margin-r-10" align="justify">Cuestionario para revisar la salud de tu Próstata  </p>
                        </div>
                        <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAN__jI22vdUMERYM0Q1OEJMQzFWTExFT1hPTzAwMTY2OC4u" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Cuestionario</a>
                    </div>
                </div>
            </div>
            <div class="item blu">
                <img class="img-responsive" src="{{ asset('img/1920x1080/dr-aboytes.jpeg') }}" style="height: 100%; width: 100%; object-fit: contain;" alt="urologo-dr-ernesto-aboytes">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h2 class="carousel-title"></h2>
                            <p class="color-white"> <br/> </p>
                        </div><br><br><br><br>
                        <a href="https://api.whatsapp.com/send?phone=524612541789&text=Hola INTEGRAUROBAJ me interesan tus servicios " class="btn-theme btn-theme-sm btn-white-brd text-uppercase">WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========== SLIDER ==========-->



        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 md-margin-b-60">
                        <div class="margin-t-50 margin-b-30">
                            <h2>Nosotros</h2>
                            <p align="justify"><strong>Urología del Bajío</strong> tiene presencia en las ciudades  de <strong>Celaya y Querétaro</strong> brindando la misma calidad de servicio en cada una de nuestras unidades de atención, tratamos todas las enfermedades que tienen que ver con <strong>Urología</strong> <br> <br>
                                Ten la confianza que serás tratado por un equipo de profesionales en constante actualización y usando la mejor tecnología para regresar la salud y calidad de vida que buscas.  </p>
                        </div>

                    </div>
                    <div class="col-md-5 col-sm-7 col-md-offset-2">
                        <!-- Accordion -->
                        <div class="accordion">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a class="panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Expertos
                                        </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            En Urobaj cada día nos esforzamos por llevar la mejor calidad a cada uno de los pacientes que nos visitan por lo que estamos en constante actualización.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Staff Médico
                                        </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            Contamos con Staff: Médico para atender tus necesidades Urólogos, Nutriólogos, Médicos Internistas.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Servicios
                                        </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            Contamos con los servicios de Endourología, Oncología Urológica, Urología reconstructiva, Cirugía endoscópica de próstata.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Accodrion -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Latest Products -->
    <div id="products">
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-md-12">
                    <h2>Servicios</h2>
                    <p></p>
                </div>
            </div>
            <!--// end row -->
            <div class="row">
                <div class="col-md-3 col-sm-3  col-xs-12">
                    <div class="col-sm-12 ">
                        <img class="img-responsive" src="{{ asset('img/970x647/endurologia1.jpeg') }}" alt="Endurologia">
                    </div>
                    <div class="col-sm-12 margin-t-10 " style=" min-height: 75px;">
                        <h4><a href="#">Endourología</a></h4>
                    </div>
                    <div class="col-sm-12 " style=" min-height: 185px;">
                        <p align="justify">Es una técnica de mínima invasión con la cual podemos tratar enfermedades del tracto urinario vía endoscópica, desde la uretra hasta el riñón.</p>
                    </div>
                    <div class="col-sm-12">
                        <a class="link" onclick="mostrarModal(1);"> Ver Detalles</a>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3  col-xs-12">
                    <div class="col-sm-12 ">
                        <img class="img-responsive" src="{{ asset('img/970x647/pr.jpeg') }}" alt="Oncologia-urologica">
                    </div>
                    <div class="col-sm-12 margin-t-10 " style=" min-height: 75px;">
                        <h4><a href="#">Oncología Urológica</a></h4>
                    </div>
                    <div class="col-sm-12 " style=" min-height: 185px;">
                        <p align="justify">Nos enfocamos en el diagnóstico y estudio de tumores en el sistema urinario, este abarca próstata, Riñón, Vejiga tanto de hombres como mujeres y cáncer de testículos.
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <a class="link" onclick="mostrarModal(2);"> Ver Detalles</a>
                    </div>

                </div>

                <div class="col-md-3 col-sm-3  col-xs-12">
                    <div class="col-sm-12 ">
                        <img class="img-responsive" src="{{ asset('img/970x647/reconstruccion-uretra.jpg') }}" alt="reconstruccion-de-la-uretra">
                    </div>
                    <div class="col-sm-12 margin-t-10 " style=" min-height: 75px;">
                        <h4><a href="#">Urología reconstructiva</a> </h4>
                    </div>
                    <div class="col-sm-12 " style=" min-height: 185px;">
                        <p align="justify">Nos encargamos de reparar de forma quirúrgica trastornos congénitos o adquiridos de los órganos del sistema genitourinario tanto en hombres y mujeres devolviéndoles la función y calidad de vida usando la más alta tecnología.</p>
                    </div>
                    <div class="col-sm-12">
                        <a class="link" onclick="mostrarModal(3);"> Ver Detalles</a>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3  col-xs-12">
                    <div class="col-sm-12 ">
                        <img class="img-responsive" src="{{ asset('img/970x647/endoscopia1.jpeg') }}" alt="endoscopia">
                    </div>
                    <div class="col-sm-12 margin-t-10" style=" min-height: 50px;">
                        <h4><a href="#">Cirugía endoscópica de próstata</a> </h4>
                    </div>
                    <div class="col-sm-12" style=" min-height: 185px;">
                        <p align="justify">Usando la mejor tecnología para brindarte una pronta recuperación
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <a class="link" onclick="mostrarModal(4);"> Ver Detalles</a>
                    </div>

                </div>

            </div>

            <!--// end row -->
        </div>
    </div>

    <!--========== PAGE LAYOUT ==========-->
    <!-- About -->
    <div id="about">
        <div class="content-lg container">
            <!-- Masonry Grid -->
            <div class="masonry-grid row">
                <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 sm-margin-b-30">
                    <div class="margin-b-60">
                        <h2 align="center">Cáncer de Próstata</h2>
                    </div>

                    <iframe class="col-md-pull-12" width="100%" height="315" src="https://www.youtube.com/embed/y6prS56uOw8" frameborder="0" allow="autoplay; encrypted-media"></iframe>
                </div>

                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                    <div class="margin-b-60">
                        <h2 align="center">Cálculos Renales</h2>
                    </div>
                    <iframe class="col-md-pull-12" width="100%" height="315" src="https://www.youtube.com/embed/twV0CSmhH9Y" frameborder="0" allow="autoplay; encrypted-media"></iframe>
                </div>

                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                    <div class="margin-t-60 margin-b-60">
                        <h2 align="center">Siguenos en YouTube</h2>
                    </div>
                    <iframe class="col-md-pull-12" width="100%" height="315" src="https://www.youtube.com/embed/y6prS56uOw8" frameborder="0" allow="autoplay; encrypted-media"></iframe>
                </div>
            </div>
            <!-- End Masonry Grid -->
        </div>
    </div>





    <!-- Contact -->
    <div id="contact">
        <!-- Contact List -->
        <div class="section-seperator">
            <div class="content-lg container">
                <div class="row">
                    <!-- Contact List -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <h3><a href="#">Celaya, GTO</a> <span class="text-uppercase margin-l-20">Consultorio</span></h3>
                        <p><strong>Direccion:</strong><br>Hospital San José <br><strong>Consultorio:</strong> 713<br><strong>Colonia:</strong> Villas de la Hacienda <br><strong>Codigo Postal:</strong> 38020 </p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> ‎+52 1 461 157 7585</li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i>contacto@urobaj.com</li>
                        </ul>
                    </div>
                    <!-- End Contact List -->

                    <!-- Contact List -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <h3><a href="#">Querétaro </a> <span class="text-uppercase margin-l-20">Consultorio</span></h3>
                        <p><strong>Direccion:</strong><br> Hospital Torre Médica 3, Privada Ignacio Zaragoza 16-B <br><strong>Consultorio:</strong> 508<br><strong>Colonia:</strong> Centro <br><strong>Codigo Postal:</strong> 76000 </p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> ‎+52 1 461 157 7585</li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i>contacto@urobaj.com</li>
                        </ul>
                    </div>
                    <!-- End Contact List -->





                </div>
            </div>
        </div>
    </div>







    <!--========== FOOTER ==========-->
    <footer class="footer">
        <!-- Links -->
        <div class="section-seperator">
            <div class="content-md container">
                <div class="row">
                    <div class="col-sm-2 sm-margin-b-30">
                        <!-- List -->
                        <ul class="list-unstyled footer-list">
                            <li class="footer-list-item"><a href="https://www.facebook.com/urobaj/"><i class="fa fa-facebook-square" style="font-size:24px;color:  #3b5998"></i> Facebook</a></li>
                            <li class="footer-list-item"><a href="#"><i class="fa fa-instagram" style="font-size:24px"></i> Instagram</a></li>
                            <li class="footer-list-item"><a href="https://www.youtube.com/channel/UCJJAAJrMDmwMwXiElqbOiZg?disable_polymer=true"><i class="fa fa-youtube-square" style="font-size:24px;color:   #c4302b"></i> YouTube</a></li>

                        </ul>
                        <!-- End List -->

                    </div>
                    <div class="col-sm-2 sm-margin-b-30">

                    </div>
                    <div class="col-sm-3">



                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
            <!-- End Links -->


            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="{{ asset('img/logo-integraurobaj.png') }}" alt="integra-urobaj">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0">
                            <a class="fweight-700" href="#"></a> Diseñado por: <a class="fweight-700" href="https://salamandramarketing.com.mx">Salamandra Marketing</a></p>
                    </div>
                    <!--// end row -->
                </div>
                <!-- End Copyright -->
            </div>
            <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>
    </footer>
    </div>



    <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- CORE PLUGINS -->
    <script src="{{ asset('vendor/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/jquery-migrate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGINS -->
    <script src="{{ asset('vendor/jquery.easing.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/jquery.back-to-top.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/jquery.smooth-scroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/jquery.wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/swiper/js/swiper.jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/masonry/jquery.masonry.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/masonry/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('js/layout.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/components/wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/components/swiper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/components/masonry.min.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


    <script>
        function mostrarModal(numero) {
            switch (numero) {
                case 1:

                    Swal.fire({
                        title: '<strong><h2>Endourología</h2></strong>',
                        width: '90%',
                        heightAuto: true,
                        html: '<div class="row">' +
                            '<div class = "col-md-6 "><img class="img-responsive" src="' + "{{asset('img/970x647/endurologia1.jpeg')}}" + '" width="435px" alt="Latest Products Image">' +
                            ' </div> <div class = "col-md-5" >' +
                            '<p align = "justify" > Es una técnica de mínima invasión con la cual podemos tratar enfermedades del tracto urinario vía endoscópica, desde la uretra hasta el riñón. </p>' +
                            '<ul align="justify"> <li><strong> Nefrolitotricia percutáneas:</strong> En este procedimiento realizamos una pequeña incisión en la espalda para poder extraer cálculos renales,' +
                            'es de mínima invasión. </li>' +
                            ' <li> <strong>Litotricia láser:</strong> Procedimiento endoscópico para tratamiento de cálculos mínimamente invasivo </li> </ul> </div ></div > ',
                        showCloseButton: true,
                        showCancelButton: false,
                        focusConfirm: false,
                        confirmButtonText: 'Cerrar',
                    });
                    break;

                case 2:
                    Swal.fire({
                        title: '<strong><h2>Oncología Urológica</h2></strong>',
                        width: '90%',
                        heightAuto: true,
                        html: '<div class="row">' +
                            '<div class = "col-md-6 "><img class="img-responsive" src="' + "{{ asset('img/970x647/pr.jpeg') }}" + '" width="435px" alt="Latest Products Image">' +
                            ' </div> <div class = "col-md-5" >' +
                            '<p align = "justify" >Nos enfocamos en el diagnóstico y estudio de tumores en el sistema urinario, este abarca próstata, Riñón, Vejiga tanto de hombres como mujeres y cáncer de testículos.</p>' +
                            '<ul align="justify"> ' +
                            '<li><strong>Cáncer de próstata:</strong>Es uno de los más comunes y de las principales causas de' +
                            ' muerte entre los hombres, la detección oportuna es primordial.</li>' +
                            ' <li> <strong>Cáncer de vejiga:</strong> Los síntomas de este cáncer incluyen sangrado al orinar, urgencia' +
                            ' frecuente para orinar, dolor al orinar, dolor en parte baja de la espalda.</li>' +
                            ' <li> <strong>Cáncer de Riñón:</strong>Es probable que en el inicio de esta enfermedad no se presenten' +
                            ' síntomas, pero aparecerán mediante la enfermedad evolucione, debes estar atento' +
                            ' si se presenta Sangre en la orina, bulto en el abdomen, pérdida de peso sin razón,' +
                            ' dolor en costado que no desaparece, pérdida de apetito.</li>' +
                            ' <li> <strong>Cáncer testicular:</strong>Es más común en hombres entre los 15 y 40 años, los síntomas' +
                            ' incluyen inflamación, crecimiento sin dolor y alteraciones en la estructura del testículo.</li>' +
                            ' </ul> </div ></div > ',
                        showCloseButton: true,
                        showCancelButton: false,
                        focusConfirm: false,
                        confirmButtonText: 'Cerrar',
                    });
                    break;
                case 3:

                    Swal.fire({
                        title: '<strong><h2>Urología reconstructiva</h2></strong>',
                        width: '90%',
                        heightAuto: true,
                        html: '<div class="row">' +
                            '<div class = "col-md-6 "><img class="img-responsive" src="' + "{{ asset('img/970x647/reconstruccion-uretra.jpg') }}" + '" width="435px" alt="Latest Products Image">' +
                            ' </div> <div class = "col-md-5" >' +
                            '<p align = "justify" > Nos encargamos de reparar de forma quirúrgica trastornos' +
                            ' congénitos o adquiridos de los órganos del sistema genitourinario tanto en hombres y' +
                            ' mujeres devolviéndoles la función y calidad de vida usando la más alta tecnología. </p>' +
                            '<ul align="justify">' +
                            ' <li><strong>Reconstrucción Uretral: </strong>Realizada por urólogos certificados con amplia experiencia' +
                            ' utilizando los instrumentos de la más alta tecnología para una recuperación pronta y' +
                            ' evitando complicaciones.</li>' +
                            '</ul> </div ></div > ',
                        showCloseButton: true,
                        showCancelButton: false,
                        focusConfirm: false,
                        confirmButtonText: 'Cerrar',
                    });
                    break;
                case 4:
                    Swal.fire({
                        title: '<strong><h2>Cirugía endoscópica de próstata</h2></strong>',
                        width: '90%',
                        heightAuto: true,
                        html: '<div class="row">' +
                            '<div class = "col-md-6 "><img class="img-responsive" src="' + "{{ asset('img/970x647/endoscopia1.jpeg') }}" + '" width="435px" alt="Latest Products Image">' +
                            ' </div> <div class = "col-md-5" >' +
                            '<p align = "justify" > Usando la mejor tecnología para brindarte una pronta recuperación. </p>' +
                            '<ul align="justify">' +
                            ' <li><strong>Enucleación Prostática con Láser Holmio: </strong>Esta cirugía ayuda a reducir los síntomas' +
                            ' urinarios por la hiperplasia prostática benigna mediante un láser que corta el exceso' +
                            ' de tejidos para luego ser extraídos. < /li>' +
                            ' <li><strong>Resección bipolar prostática: </strong>Técnica quirúrgica mediante energía eléctrica usando' +
                            ' solución salina con la misma osmolaridad de la sangre disminuyendo las' +
                            ' complicaciones del agua destilada.</li>' +
                            '</ul> </div ></div > ',
                        showCloseButton: true,
                        showCancelButton: false,
                        focusConfirm: false,
                        confirmButtonText: 'Cerrar',
                    });
                    break;

                default:
                    break;
            }

        }
    </script>

</body>
<!-- END BODY -->

</html>
