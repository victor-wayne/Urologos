@include('urologos.partials.nav')

@yield('staff')

<hr>
<section class="contact section-seperator team" id="contact">

<div class="section-title">
          <h2>Staff Medico</h2>
          <p class="equipo">En Urobaj cada día nos esforzamos por llevar la mejor calidad a cada uno de los pacientes
que nos visitan por lo que estamos en constante actualización, contamos con un equipo de
profesionales de la salud en las que se incluyen Urólogos, Nutriólogos, Médicos Internistas.</p>
        </div>
<div class="row">

          <div class="col-lg-5 margin-l-30 xs-margin-b-10">
            <div class="member d-flex align-items-start aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{asset('img/fdoctor.jpeg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr. Ernesto Aboytes</h4>
                <span>Especialista en Urología</span>
                <p class="equipo">Su amplia experiencia ha llevado a dar
una mejor calidad de vida a cientos de personas a lo largo de su carrera, es un profesional
con gran sentido humano por lo cual a cada uno de sus pacientes brinda una atención
integral dentro de su consulta médica especializada.</p>
<a class="link" onclick="mostrarCV();">Ver Curriculum</a>
                <div class="social">
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.facebook.com/urobaj/"><i class="fab fa-facebook"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"> <i class="fab fa-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-5  margin-l-30 xs-margin-b-10  hidden-xs">
            <div class="member d-flex align-items-start aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{asset('img/fdoctor.jpeg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr. Ernesto Aboytes</h4>
                <span>Especialista en Urología</span>
                <p class="equipo">Su amplia experiencia ha llevado a dar
una mejor calidad de vida a cientos de personas a lo largo de su carrera, es un profesional
con gran sentido humano por lo cual a cada uno de sus pacientes brinda una atención
integral dentro de su consulta médica especializada.</p>
<a class="link" onclick="mostrarCV();">Ver Curriculum</a>
                <div class="social">
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.facebook.com/urobaj/"><i class="fab fa-facebook"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"> <i class="fab fa-linkedin"></i> </a>
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

                        <li class="footer-list-item"><a href="https://www.facebook.com/urobaj/"><i class="fa fa-facebook-square" style="font-size:24px;color:  #3b5998"></i> Facebook</a></li>
                        <li class="footer-list-item"><a href="#"><i class="fa fa-instagram" style="font-size:24px"></i> Instagram</a></li>
                        <li class="footer-list-item"><a href="#"><i class="fa fa-youtube-square" style="font-size:24px;color:   #c4302b"></i> YouTube</a></li>
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

<script src="{{ asset('js/validate/jquery.validate.js') }}" type="text/javascript"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
function mostrarCV() {




                                Swal.fire({
                                  title: '<strong>Curriculum</strong>',
                        width: '90%',
                        heightAuto: true,
                        html: '<div class="embed-responsive embed-responsive-16by9">'+
                              '<object class="embed-responsive-item" data="{{ asset("docs/curriculum.pdf") }}" type="application/pdf" internalinstanceid="9" title="">'+
                              '<p>Su navedador no soporta el PLUGIN de PDF para descargar el archivo da click'+
                              '<a target="_blank" href="{{ asset("docs/curriculum.pdf") }}"> Aquí</a>.</p>'+
                              '</object>'+
                              '</div>',
                        showCloseButton: true,
                        showCancelButton: false,
                        focusConfirm: false,
                        confirmButtonText: 'Cerrar',
                    });

}
</script>

</body>
<!-- END BODY -->
</html>
