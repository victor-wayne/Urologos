@include('urologos.partials.nav')

@yield('servicios')

<hr>
<section class="contact section-seperator" id="contact">
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

<script src="{{ asset('js/validate/jquery.validate.js') }}" type="text/javascript"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                            '<div class = "col-md-6 "><img class="img-responsive" src="' + "{{asset('img/970x647/endurologia.jpg')}}" + '" width="435px" alt="Latest Products Image">' +
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
                            '<div class = "col-md-6 "><img class="img-responsive" src="' + "{{ asset('img/970x647/endoscopia.jpg') }}" + '" width="435px" alt="Latest Products Image">' +
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