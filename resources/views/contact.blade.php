@extends('app')

@section('content')
@include('navbar')

<section class="contact-jumbo">
    <div class="jumbotron jumbotron-single jumbocontacto d-flex align-items-center" style="background-image: url({{ asset('img/cuadernos.jpg')}});">
        <div class="jumbocontacto container text-start">
            <h1 class="display-2 mb-4" style="color:#000">Contacto</h1>
        </div>
    </div> <!-- Contact Form Section -->
</section>
<section id="contact-form" class="bg-white mt-4">
    <div class="container" >
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap" data-aos="fade-up">
                <h2 class="section-title text-dark">Contacta con Nosotros</h2>
                <!--p class="section-sub-title">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. <br> pharetra augue. Donec id elit non mi.</p-->
            </div>
            <!-- End of Section Title -->
            <div class="row">
                <!-- Contact Form Holder -->
                <div class="col-md-8 offset-md-2 contact-form-holder mt-4" data-aos="fade-up">
                    <form method="post" name="contact-us" action="{{ route('contacto.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Telefono" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Tu Mensaje..."></textarea>
                            </div>
                            <div class="col-md-12 form-group d-flex justify-content-center">
                                {!! NoCaptcha::display() !!}
                            </div>
                            @if ($errors->has('g-recaptcha-response'))
                            <div class="col-md-12 form-group d-flex justify-content-center">
                                <span class="help-block text-danger" role="alert">
                                    <strong>Error Captcha</strong>
                                </span>
                            </div>
                            @endif
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End of Contact Form Holder -->
            </div>
        </div>
    </div>
</section>
<!-- End of Contact Form Section -->

<section class="contact_direcciones">
    <h2>Sucursales</h2>
    <div class="contenedor_contact_direcciones">
        <aside class="menu_sicky">
            <h3 class="titulo text-olimpia">Sucursales</h3>
            <nav class="indice">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Casa Matriz</a>
                <a id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Calacoto</a>
                <a id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Handal</a>
                <a id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Mariscal</a>
                </div>
            </nav>
        </aside>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="mapas_direcciones tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div  class="direcciones_olimpia">
                <div class="detalle_mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1073.523030000925!2d-68.13351576776725!3d-16.49571947681644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f21347e7e700b%3A0x9252df6f27223238!2sLibrer%C3%ADa%20Olimpia!5e0!3m2!1ses-419!2sit!4v1629740738745!5m2!1ses-419!2sit" style="border:0" allowfullscreen="" loading="lazy" width="100%" height="280"></iframe>
                </div>
                <div class="detalles_sucursales">
                    <h5>CASA MATRIZ</h5>
                    <hr>
                    <i class="fas fa-globe"></i> Calle Ballivi&aacute;n #1232
                    Entre Col&oacute;n y Plaza Murillo<br>
                    <i class="fas fa-phone"></i> <a href="tel:+5912204091"> (591 - 2) 220 4091 </a><br>
                    <i class="fas fa-mobile-alt"></i><a href="tel:+59176753237" class="cel_contactos"> (591) 767 532 37 </a><br>
                </div>
            </div>
            </div>
            <div class=" mapas_direcciones tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <div  class="direcciones_olimpia">
                <div class="detalle_mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d338.06219223704943!2d-68.08427249664334!3d-16.53936504321773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f21252fbaf5f3%3A0xfafeef0a19eeca58!2sLibrer%C3%ADa%20Olimpia!5e0!3m2!1ses-419!2sbo!4v1629740855848!5m2!1ses-419!2sbo" allowfullscreen="" loading="lazy" width="100%" height="280" style="border:0"></iframe>
                </div>
                <div class="detalles_sucursales">
                    <h5>SUCURSAL CALACOTO</h5>
                    <hr>
                    <i class="fas fa-globe"></i> Torre Ketal Locales 22 a 24
                    Calle 15 de Calacoto<br>
                    <i class="fas fa-phone"></i> <a href="tel:+5912204091"> (591 - 2) 220 4091 </a><br>
                    <i class="fas fa-mobile-alt"></i><a href="tel:+59176753237" class="cel_contactos"> (591) 767 532 38 </a><br>
                </div>
            </div>
            </div>
            <div class="mapas_direcciones tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" >
            <div  class="direcciones_olimpia">
                <div class="detalle_mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d478.1938140849191!2d-68.13568207723924!3d-16.49828237925325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f20716a2c8a3d%3A0xdae0ba0a647c6121!2sLibreria%20Olimpia!5e0!3m2!1ses-419!2sbo!4v1629741099194!5m2!1ses-419!2sbo" allowfullscreen="" loading="lazy" width="100%" height="280" style="border:0"></iframe>
                </div>
                <div class="detalles_sucursales">
                    <h5>SUCURSAL HANDAL</h5>
                    <hr>
                    <i class="fas fa-globe"></i> Edificio Handal Center Local 14
                    Calle Socabaya Esq. Av. Mariscal Santa Cruz<br>
                    <i class="fas fa-phone"></i> <a href="tel:+5912204091"> (591 - 2) 240 8022 </a><br>
                    <i class="fas fa-mobile-alt"></i><a href="tel:+59176753237" class="cel_contactos"> (591) 767 532 36 </a><br>
                </div>
            </div>
            </div>
            <div class="mapas_direcciones tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
            <div  class="direcciones_olimpia">
                <div class="detalle_mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d402.10838768972457!2d-68.13429870545046!3d-16.499762301471158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2178abaf6db1%3A0xf92ecfeee50ab0dc!2sLibrer%C3%ADa%20olimpia!5e0!3m2!1ses-419!2sbo!4v1629741154668!5m2!1ses-419!2sbo" allowfullscreen="" loading="lazy" width="100%" height="280" style="border:0"></iframe>
                </div>
                <div class="detalles_sucursales">
                    <h5>SUCURSAL MARISCAL</h5>
                    <hr>
                    <i class="fas fa-globe"></i> Av. Mcal. Santa Cruz Entre Col&oacute;n
                    y Loayza Edif. Litoral P.B. Loc. 9<br>
                    <i class="fas fa-phone"></i> <a href="tel:+5912204091"> (591 - 2) 235 8234 </a><br>
                    <i class="fas fa-mobile-alt"></i><a href="tel:+59176753237" class="cel_contactos"> (591) 767 532 39 </a><br>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

@include('footer')

@endsection
