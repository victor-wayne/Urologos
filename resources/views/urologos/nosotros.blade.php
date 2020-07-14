@include('urologos.partials.nav') @yield('nosotros')

<div id="about">
    <div class="content-lg container">
        <div class="row">
            <div class="col-lg-6">
                <img src="https://lorempixel.com/600/300" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <h2>Nosotros</h2>
                <p align="justify">
                    Urología del Bajío tiene presencia en las ciudades de Celaya y Querétaro brindando la misma calidad de servicio en cada una de nuestras unidades de atención, tratamos todas las enfermedades que tienen que ver con Urología.
                </p>

                <p align="justify">Ten la confianza que serás tratado por un equipo de profesionales en constante actualización y usando la mejor tecnología para regresar la salud y calidad de vida que buscas.
                </p>
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

                        <li class="footer-list-item"><a href="https://www.facebook.com/urobaj/">Facebook</a></li>
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
</footer>
<!--========== END FOOTER ==========-->

<!-- Back To Top -->
<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

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

</body>
<!-- END BODY -->

</html>