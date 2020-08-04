<!DOCTYPE html>

<html lang="en" class="no-js">

<head>
    <meta charset="utf-8"/>
    <title>INTEGRAUROBAJ</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="FlameOnePage freebie theme for web startups by FairTech SEO." name="description"/>
    <meta content="FairTech" name="author"/>
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('vendor/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/css/swiper.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/layout.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/contacto.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/general.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('fontawesome/css/all.css')}}" rel="stylesheet"> <!--load all styles -->
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" href="favicon.ico"/>
</head>


<body id="body" data-spy="scroll" data-target=".header" class="page-on-scroll">

<header class="header navbar-fixed-top to-nav-collapse">
    <nav class="navbar" role="navigation">
        <div class="container">
            <div class="menu-container js_nav-item">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="toggle-icon"></span>
                </button>

                <div class="logo">
                    <a class="logo-wrap" href="#body">
                        <img class="logo-img logo-img-main" src="{{ asset('img/logo-integraurobaj.png') }}" alt="urobaj-logo">
                        <img class="logo-img logo-img-active" src="{{ asset('img/logo-integraurobaj.png') }}" alt="urobaj-logo">
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
                        <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="https://forms.gle/x8TnAugU3VD3Wpx66">Test Prostático</a></li>
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
        <div class="item  blue active">
            <img class="img-responsive " src="{{asset('img/1920x1080/urologia.jpeg')}}" style="height: 100%; width: 100%; object-fit: contain;" alt="Slider Image">
            <div class="container">
                <div class="carousel-centered">
                    <div class="margin-b-40">
                        <h1 class="carousel-title margin-b-40">INTEGRAUROBAJ</h1>
                        <p class="color-white margin-r-10" align="justify">En Urobaj cada día nos esforzamos por llevar la mejor calidad a cada uno de los pacientes <br>que nos visitan por lo que estamos en constante actualización.</p>
                        <h1 class="color-white margin-r-10" align="justify">Cuestionario para revisar la salud de tu Próstata  </h1>
                    </div>

                    <a href="https://forms.gle/x8TnAugU3VD3Wpx66" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Cuestionario</a>
                </div>
            </div>
        </div>
        <div class="item blu">
            <img class="img-responsive" src="{{ asset('img/1920x1080/dr-aboytes.jpeg') }}" style="height: 100%; width: 100%; object-fit: contain;" alt="Slider Image">
            <div class="container">
                <div class="carousel-centered">
                    <div class="margin-b-40">
                        <h2 class="carousel-title"></h2>
                        <p class="color-white mi-caro"> <br/> </p>
                    </div><br><br><br><br>
                    <a href="https://api.whatsapp.com/send?phone=524612541789&text=Hola INTEGRAUROBAJ me interesan tus servicios " class="btn-theme btn-theme-sm btn-white-brd text-uppercase">WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--========== SLIDER ==========-->
