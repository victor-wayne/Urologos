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

                            <form id="fContacto" name="fContacto">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="text" id="iNombre" name="iNombre" class="form-control required" placeholder="Nombre Completo">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" id="iEmail" name="iEmail" class="form-control required" placeholder="Correo Electronico">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" id="iTelefono" name="iTelefono" class="form-control " placeholder="Telefono">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control required"  rows="10" id="iComentario" name="iComentario" placeholder="Mensaje"></textarea>
                                </div>
                                <button class="btn btn-block"  type="submit">Envar ahora!</button>
                            </form>
                        </div>
                        <!-- Left -->
                        <div class="col-lg-5">
                            <div class="right">
                                <h4 style="color:white;">Nuestra Información</h4>
                                <div class="info d-flex align-items-center">
                                    
                        <p><strong>Direccion:</strong><br>Eje Nor-Poniente Manuel J. Clouthier 200 <br><strong>Colonia:</strong> Villas de la Hacienda <br><strong>Codigo Postal:</strong> 38020 </p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> ‎+52 1 461 157 7585</li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i>contacto@urobaj.com</li>
                            <li><i class="margin-r-10 color-base fas fa-map-marked-alt"></i>Celaya, Gto.</li>
                        </ul>
                    


                                </div>
                                <div class="map height-300">
        
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d766.7210002843482!2d-100.84923868796812!3d20.52522380963124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cbb03338e2401%3A0x700a5651d437b832!2sEje%20Nor-Poniente%20Manuel%20J.%20Clouthier%20200%2C%20Zona%20Industrial%2C%20Celaya%2C%20Gto.!5e0!3m2!1ses-419!2smx!4v1595098902231!5m2!1ses-419!2smx" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
                              
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>



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

    <!-- End Links -->

    <!-- Copyright -->
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

<script src="{{ asset('js/validate/jquery.validate.js') }}" type="text/javascript"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>

    

    $("#fContacto").submit(function(e){
        e.preventDefault();

            let bandera = validarFormulario();
            if(bandera){
                let nombre = document.getElementById("iNombre");
                let email = document.getElementById("iEmail");
                let tel = document.getElementById("iTelefono");
                let mess = document.getElementById("iComentario");

            let form = new FormData();
            form.append('nombre',nombre.value);
            form.append('email',email.value);
            form.append('telefono',tel.value);
            form.append('mensaje',mess.value);
            form.append('_token','{{csrf_token()}}');
                

            var settings = {
            "url": "{{ route('contacto_send') }}",
            "method": "POST",
            "timeout": 0,
            "processData": false,
            "contentType": false,
            "data": form
            };
            $.ajax(settings).done(function (response) {
                if(response.status==200){
                    swal("Genial!", ""+response.mensaje, "success");
                }
                else{
                    swal("Error!", ""+response.mensaje, "error");
                }
                
                

            });
            }
            else {
                swal("Error", "Completa los campos faltantes", "error");
            }

    });

    function validarFormulario(){
        jQuery.validator.messages.required = 'Esta campo es obligatorio.';

         return  $("#fContacto").valid();
       }

   


</script>
</body>
<!-- END BODY -->
</html>