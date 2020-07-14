<!DOCTYPE html>

<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <title>INTEGRAUROBAJ</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="FlameOnePage freebie theme for web startups by FairTech SEO." name="description" />
    <meta content="FairTech" name="author" />
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('vendor/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/css/swiper.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/layout.min.css') }}" rel="stylesheet" type="text/css" />
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
            <div class="item active">
                <img class="img-responsive" src="{{asset('img/1920x1080/urologia.jpeg')}}" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h1 class="carousel-title">INTEGRAUROBAJ</h1>
                            <p class="color-white">Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>
                        </div>
                        <a href="https://api.whatsapp.com/send?phone=524612541789&text=Hola INTEGRAUROBAJ me interesan tus servicios " class="btn-theme btn-theme-sm btn-white-brd text-uppercase">WhatsApp</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="{{ asset('img/1920x1080/dr-aboytes.jpeg') }}" alt="Slider Image">
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

    <!--========== PAGE LAYOUT ==========-->
    <!-- About -->
    <div id="about">
        <div class="content-lg container">
            <!-- Masonry Grid -->
            <div class="masonry-grid row">
                <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 sm-margin-b-30">
                    <div class="margin-b-60">
                        <h2>Harmonious Planning</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna ut consequat siad esqudiat dolor</p>
                    </div>
                    <img class="full-width img-responsive wow fadeInUp" src="{{ asset('img/500x500/01.jpg') }}" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".2s">
                </div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                    <div class="margin-b-60">
                        <h2>Easy Integration</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna ut consequat siad esqudiat dolor</p>
                    </div>
                    <img class="full-width img-responsive wow fadeInUp" src="{{ asset('img/500x500/02.jpg') }}" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".3s">
                </div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                    <div class="margin-t-60 margin-b-60">
                        <h2>Superior Support</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna ut consequat siad esqudiat dolor</p>
                    </div>
                    <img class="full-width img-responsive wow fadeInUp" src="{{ asset('img/500x500/03.jpg') }}" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".4s">
                </div>
            </div>
            <!-- End Masonry Grid -->
        </div>

        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 md-margin-b-60">
                        <div class="margin-t-50 margin-b-30">
                            <h2>Why Us?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <a href="#" class="btn-theme btn-theme-sm btn-white-bg text-uppercase">More...</a>
                    </div>
                    <div class="col-md-5 col-sm-7 col-md-offset-2">
                        <!-- Accordion -->
                        <div class="accordion">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a class="panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Expert Research
                                        </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Hi-Tech Engineering
                                        </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Outstanding Results
                                        </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
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
                <div class="col-sm-6">
                    <h2>Servicios</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                </div>
            </div>
            <!--// end row -->
            <div class="row" style="display: flex;">
                <div class="col-sm-3 ">
                    <div class="col-sm-12 ">
                        <img class="img-responsive" src="{{ asset('img/970x647/endurologia.jpg') }}" alt="Latest Products Image">
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


                <div class="col-sm-3 ">
                    <div class="col-sm-12 ">
                        <img class="img-responsive" src="{{ asset('img/970x647/pr.jpeg') }}" alt="Latest Products Image">
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

                <div class="col-sm-3">
                    <div class="col-sm-12 ">
                        <img class="img-responsive" src="{{ asset('img/970x647/reconstruccion-uretra.jpg') }}" alt="Latest Products Image">
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


                <div class="col-sm-3">
                    <div class="col-sm-12 ">
                        <img class="img-responsive" src="{{ asset('img/970x647/endoscopia.jpg') }}" alt="Latest Products Image">
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



   

                        <!-- Contact -->
                        <div id="contact">
                            <!-- Contact List -->
                            <div class="section-seperator">
                                <div class="content-lg container">
                                    <div class="row">
                                        <!-- Contact List -->
                                        <div class="col-sm-4 sm-margin-b-50">
                                            <h3><a href="http://ft-seo.ch/">Zurich</a> <span class="text-uppercase margin-l-20">Human Resources</span></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                                            <ul class="list-unstyled contact-list">
                                                <li><i class="margin-r-10 color-base icon-call-out"></i> +41 60 66 555 44 33</li>
                                                <li><i class="margin-r-10 color-base icon-envelope"></i> hr@flameonepage.com</li>
                                            </ul>
                                        </div>
                                        <!-- End Contact List -->

                                        <!-- Contact List -->
                                        <div class="col-sm-4 sm-margin-b-50">
                                            <h3><a href="http://ft-seo.ch/">Malta</a> <span class="text-uppercase margin-l-20">Development</span></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                                            <ul class="list-unstyled contact-list">
                                                <li><i class="margin-r-10 color-base icon-call-out"></i> +356 7965 1257</li>
                                                <li><i class="margin-r-10 color-base icon-envelope"></i> developmemt@flameonepage.com</li>
                                            </ul>
                                        </div>
                                        <!-- End Contact List -->

                                        <!-- Contact List -->
                                        <div class="col-sm-4 sm-margin-b-50">
                                            <h3><a href="http://ft-seo.ch/">Manchester</a> <span class="text-uppercase margin-l-20">CEO</span></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                                            <ul class="list-unstyled contact-list">
                                                <li><i class="margin-r-10 color-base icon-call-out"></i> +44 654 583 5518</li>
                                                <li><i class="margin-r-10 color-base icon-envelope"></i> ceo@flameonepage.com</li>
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
                                                        <li class="footer-list-item"><a href="#">Twitter</a></li>
                                                        <li class="footer-list-item"><a href="#">Facebook</a></li>
                                                        <li class="footer-list-item"><a href="#">Instagram</a></li>
                                                        <li class="footer-list-item"><a href="#">YouTube</a></li>
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
                                                    title: '<strong>Endourología</strong>',
                                                    width: '90%',
                                                    heightAuto: true,
                                                    html: '<div class="row">' +
                                                        '<div class = "col-md-6 "> imagen perrona </div> <div class = "col-md-6 margin-l-20" >' +
                                                        '<p align = "justify" > Es una técnica de mínima invasión con la cual podemos tratar enfermedades del tracto urinario vía endoscópica, desde la uretra hasta el riñón. </p>' +
                                                        '<ul align="justify"> <li><strong> Nefrolitotricia percutáneas:</strong> En este procedimiento realizamos una pequeña incisión en la espalda para poder extraer cálculos renales,' +
                                                        'es de mínima invasión. </li>' +
                                                        ' <li> <strong>Litotricia láser:</strong> Procedimiento endoscópico para tratamiento de cálculos mínimamente invasivo </li> </ul> </div ></div > ',
                                                    showCloseButton: true,
                                                    showCancelButton: true,
                                                    focusConfirm: false,
                                                    confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
                                                    confirmButtonAriaLabel: 'Thumbs up, great!',
                                                    cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
                                                    cancelButtonAriaLabel: 'Thumbs down'
                                                });
                                                break;

                                            case 2:
                                                alert('2');
                                                break;
                                            case 3:
                                                alert('3');
                                                break;
                                            case 4:
                                                alert('4');
                                                break;

                                            default:
                                                break;
                                        }

                                    }
                                </script>
</body>
<!-- END BODY -->

</html>