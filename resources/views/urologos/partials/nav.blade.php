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
                        <img class="logo-img logo-img-main" src="{{ asset('img/logo.png') }}" alt="FlameOnePage Logo">
                        <img class="logo-img logo-img-active" src="{{ asset('img/logo-dark.png') }}" alt="FlameOnePage Dark Logo">
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




