@include('urologos.partials.nav')

@yield('contacto')

<hr>
<section class="contact section-seperator" id="contact">
            <div class="container">
                <div class="heading text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <h2>
                    Mantente en Contacto</h2>
                    <p>Mandanos correo y resuelve todas tus dudas.</p>
                </div>
                <div class="main wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="row">
                        <div class="col-lg-7 left">
                            <h3>Contactanos</h3>

                            <form id="fContacto">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" placeholder="Nombre Completo">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" placeholder="Correo Electronico">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Telefono">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="10" id="comment" placeholder="Mensaje"></textarea>
                                </div>
                                <button class="btn btn-block" type="submit">Envar ahora!</button>
                            </form>
                        </div>
                        <!-- Left -->
                        <div class="col-lg-5">
                            <div class="right">
                                <h4 style="color:white;">Nuestra Información</h4>
                                <div class="info d-flex align-items-center">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>c - 165, Your Street Jaipur, <br>IN 91 554</span>
                                </div>
                                <div class="map height-300">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2724.0694570748947!2d7.455080415208266!3d46.94067397914616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478e39d0cf20e8d1%3A0x9daac4cd3043d067!2sThunstrasse+50%2C+3005+Bern%2C+Switzerland!5e0!3m2!1sen!2sin!4v1496749852928" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
                              
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>



<!--========== FOOTER ==========-->
<footer class="footer">
    <!-- Links -->
    <div class="section-seperator">
        <div class="content-md container">
            <div class="row">
                <div class="col-sm-2 sm-margin-b-30">
                    <!-- List -->
                    <ul class="list-unstyled footer-list">
                        <li class="footer-list-item"><a href="#body">Home</a></li>
                        <li class="footer-list-item"><a href="#about">Team</a></li>
                        <li class="footer-list-item"><a href="#work">Credentials</a></li>
                        <li class="footer-list-item"><a href="#contact">Contact</a></li>
                    </ul>
                    <!-- End List -->
                </div>
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
                <div class="col-sm-3">
                    <!-- List -->
                    <ul class="list-unstyled footer-list">
                        <li class="footer-list-item"><a href="#">Subscribe to Our Newsletter</a></li>
                        <li class="footer-list-item"><a href="#">Privacy Policy</a></li>
                        <li class="footer-list-item"><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                    <!-- End List -->
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Links -->

    <!-- Copyright -->
    <div class="content container">
        <div class="row">
            <div class="col-xs-6">
                <img class="footer-logo" src="{{ asset('img/logo-dark.png') }}" alt="flameonepage Logo">
            </div>
            <div class="col-xs-6 text-right">
                <p class="margin-b-0"><a class="fweight-700" href="#">FlameOnePage</a> Theme Powered by: <a class="fweight-700" href="http://ft-seo.ch/">FairTech Studio</a></p>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Copyright -->
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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>

    

    $("#fContacto").submit(function(e){
            let form = new FormData();
            form.append("id", "2");
            form.append('_token','{{csrf_token()}}');
            
            e.preventDefault();

            var settings = {
            "url": "{{ route('contacto_send') }}",
            "method": "POST",
            "timeout": 0,
            "processData": false,
            "contentType": false,
            "data": form
            };
            $.ajax(settings).done(function (response) {
                swal("Genial!", "Correo Enviado!", "success");
                console.log(response);
            });

    });






</script>
</body>
<!-- END BODY -->
</html>