@extends('app')

@section('content')
@include('navbar')
<section class="banner_about overlay-claro" id="inicio">
    <div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url({{ asset('img/noso.jpg')}});">
        <div class="container text-center">
            <h1 class="display-2 mb-4">NOSOTROS</h1>
        </div>
    </div>
</section>


<section id="who-we-are">
    <!--CREACION DE CLASE INICIO-->
    <div class="row mt-4">
        <div class="section_mision col-md-4" data-aos="fade-up">
            <div class="container card-valores text-center">
                <img class="rounded-circle p-4" src="https://www.libreriaolimpia.com/img/icons/idea.gif" alt="Generic placeholder image" width="140" height="140">
                <h5 class="mb-4">Misión</h5>
                <p class="text-justify">Brindar soluciones a las necesidades de nuestros clientes a través de la comercialización, fabricación y distribución de productos y servicios de calidad, manteniendo el liderazgo en el mercado.</p>
            </div>
        </div>
        <!-- /.col-md-4 col-sm-6  -->
        <div class="section_valores col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="container card-valores text-center">
                <img class=" rounded-circle p-4" src="https://www.libreriaolimpia.com/img/icons/check-circle.gif" alt="Generic placeholder image" width="140" height="140">
                <h5 class="mb-4 ">Valores</h5>
                <div class="swiper2 mySwiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p>
                                RESPETO: Brindamos un trato amable y cortes reconociendo y valorando las cualidades de nuestros clientes internos y externos.
                            </p>
                        </div>
                        <div class="swiper-slide">
                            <p>
                                COMPROMISO: Ofrecemos un servicio de calidad a través de la comercialización, fabricación y distribución de nuestros productos.
                            </p>
                        </div>
                        <div class="swiper-slide">
                            <p>
                                INTEGRIDAD: Quienes conforman la empresa realizan sus actividades con honradez, responsabilidad puntualidad y lealtad.
                            </p>
                        </div>
                        <div class="swiper-slide">
                            <p>
                                VOCACIÓN DE SERVICIO: Nos caracterizamos por brindar a nuestros clientes sin excepciones, un servicio de calidad.
                            </p>
                        </div>
                        <div class="swiper-slide">
                            <p>
                                TRABAJO EN EQUIPO: La entrega y esfuerzo en forma organizada de cada miembro de nuestro equipo, se refleja en el logro de nuestros objetivos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 col-sm-6  -->
        <div class="section_vision col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="container card-valores text-center">
                <img class="rounded-circle p-4" src="https://www.libreriaolimpia.com/img/icons/settings.gif" alt="Generic placeholder image" width="140" height="140">
                <h5 class="mb-4">Visión</h5>
                <p class="text-justify">Ser la primera opción de nuestros clientes y referentes de mejora continua en nuestras líneas de negocio.</p>
            </div>
        </div>
        <!-- /.col-md-4 col-sm-6  -->
    </div>
    <!-- /.row -->
    <!--CREACION DE CLASE FIN-->
</section>
<!-- Features Section-->
<div class="historia">
    <div class="titulo-historia text-center text-olimpia" id="histortit">
        <h1>NUESTRA HISTORIA</h1>
    </div>
    <article>
        <div class="container-history d-flex flex-wrap position-sticky">
            <figure>
                <img src="{{asset('img/vintage_1.jpg')}}" alt />
            </figure>
            <section class="history">
                <div class="text">
                    <p>
                        A lo largo de su trayectoria en la producción, importación y comercialización de material escolar y de oficina, Librería y Papelería Olimpia ha estado a la vanguardia en el mercado paceño hace más de seis décadas. En julio de 1959, esta empresa surgió a raíz del emprendimiento del señor Alfred Weinberg y la señora Flora Jáuregui, cuya visión de una Bolivia en vías de desarrollo fue fundamental para construir y consolidar una de las empresas más importantes y tradicionales de La Paz, con alcance de distribución a los 9 departamentos de Bolivia. Hoy cumple 62 años de función y entrega, permaneciendo el legado, con el trabajo arduo de un equipo íntegro con vocación de servicio, respeto y compromiso con la sociedad que los acoge, que son la base de sus fundadores Alfred y Flora.
                    </p>
                    <p>
                        Este gran emprendimiento abre sus puertas el 29 de julio de 1959, iniciando actividades en la producción y venta de artículos y material de escritorio y oficina en un pequeño local del 1024 en la Calle Ingavi. Pasados los 5 primeros años se trasladan a un local más amplio en el 105; en el mismo logran ampliar su alcance en el mercado con una mayor variedad de productos. A mediados de la década de los sesenta se realizaron las primeras importaciones provenientes de países limítrofes, y a partir de los años 70 continúan las importaciones de productos de marcas de primera calidad como STAEDTLER y PELIKAN.
                    </p>
                </div>
            </section>
        </div>
        <div class="container-history d-flex flex-wrap position-sticky flex-row-reverse">
            <figure>
                <img src="{{asset('img/vintage_2.jpg')}}" alt />
            </figure>
            <section class="history">
                <div class="text">
                    <p>
                        En septiembre de 1985, Olimpia abre su primera sucursal en la calle Ballivián y en 1987 la segunda en la calle Isaac Tamayo, dedicada principalmente al abastecimiento y distribución del comercio mayorista y minorista en la ciudad de La Paz. Posteriormente, en octubre de 1990, sé apertura una nueva sucursal en el Edificio Handal, imponiendo tendencia de tiendas tipo supermercado en el rubro, donde los productos están expuestos y distribuidos en góndolas organizadas para que el cliente pueda elegirlos y pagar antes de salir. Cursando abril del año 2000, sé apertura el punto de venta ubicado en el Edificio Torre Ketal, en la calle 15 de Calacoto y, por último, hacia el año 2016 se inaugura la sucursal de la Av. Mariscal Santa Cruz, completando así los canales de venta tradicional en estos 4 puntos de la ciudad de La Paz.
                    </p>
                    <p>
                        A partir del año 2015, Olimpia empieza a incursionar en redes sociales tales como <b>Facebook, Instagram, YouTube y LinkedIn</b>, entre otras. Desde el 2020 se empieza a trabajar para actualizar las modalidades de servicio a los requerimientos del mundo globalizado y la nueva normalidad tras la pandemia. Es así que, en adición a los 4 puntos de venta, el canal institucional y de distribución mayorista y minorista, surgen grandes sorpresas como la apertura de nuestro <b>sitio web</b> totalmente operacional, el <b>e-Commerce</b> y la <b>app móvil</b>, actualizados con más de 1000 productos disponibles para su compra con cobertura en toda la ciudad de La Paz.
                    </p>

                </div>
            </section>
        </div>
        <div class="container-history d-flex flex-wrap position-sticky">
            <figure>
                <img src="{{asset('img/vintage_3.jpg')}}" alt />
            </figure>
            <section class="history">
                <div class="text">
                    <p>
                        El 29 de julio de 2021, en su aniversario número 62, marca una nueva era en Librería Olimpia, ingresando al <b>mercado digital</b>, para seguir satisfaciendo las necesidades de personas, empresas e instituciones públicas en La Paz y a nivel nacional con material escolar, de oficina y de arte, distinguiéndose por su excelencia y calidad.
                    </p>
                    <p>
                        En junio de 2021 se inaugura el espacio de arte llamado <b>Crearte</b>, inspirado en todas las niñas, niños, jóvenes y padres de familia que desean crear a través de la pintura, el dibujo y otras expresiones artísticas, además de exhibir sus trabajos en nuestras galerías en las sucursales de la Torre Ketal y el edificio Handal. Todo esto asociado a una gran variedad de productos de arte de marcas como <b>Pelikan, Pentel Arts, Stabilo, Canson</b> y otras.
                    </p>
                    <h4 class="mb-2">Producción Nacional</h4>
                    <p>
                        Librería y Papelería Olimpia SRL cuenta con dos <b>marcas</b> de producción nacional. Cuadernos <b>ABC</b>, con una línea completa de cuadernos de espiral y empastados en tamaños ½ oficio, carta y oficio. Blocks de papel para notas, hojas trapper, de carpeta, etc.; en distintos gramajes; y <b>Leydez</b>, con una variedad de archivadores de palanca tamaño oficio, archivadores de ½ palanca, archivadores de palanca en tamaño letra, etc. Todos estos productos fabricados por manos bolivianas bajo el lema “Consume lo nuestro, apoya a los nuestros”.
                    </p>
                </div>
            </section>
        </div>
        <div class="container-history d-flex flex-wrap position-sticky flex-row-reverse">
            <figure>
                <img src="{{asset('img/vintage_4.jpg')}}" alt />
            </figure>
            <section class="history">
                <div class="text">
                    <h4 class="mb-2">Marcas nacionales e internacionales</h4>
                    <p>
                        Representamos marcas de primera calidad en producción de material escolar y de oficina de gran relevancia a nivel mundial como <b>Pelikan</b>, con una gran variedad de <b>bolígrafos, lápices, lápices de color, borradores, marcadores, resaltadores, acuarelas, crayones, pegamento en barra</b>, etc. <b>Pentel</b>, la única compañía de material de escritura que obtuvo el Premio Deming al más alto nivel de calidad. Entre su surtido de productos se encuentran <b>lápices, lápices de color normales, y acuarelados, acuarelas, crayones correctores, resaltadores, bolígrafos, micropuntas, porta minas, minas resistentes</b> y demás. También representamos marcas como <b>Pegafan, Usign, Rapid, Dymo, Herlitz, Alliance, Parker, Tempo</b>, entre otras.
                        ¿Qué esperas para visitarnos? Acude a nuestros puntos de venta en la ciudad de La Paz hoy mismo o ingresa <b>aquí</b> para ver nuestros productos. ¡Te estamos esperando!.
                    </p>

                </div>
            </section>
        </div>
        <div class="foothis">
            <div class="row h-100 align-items-center w-100 ml-0">
                <div class="col text-center">
                    <h2>LIBRERÍA Y PAPELERÍA OLIMPIA S.R.L.</h2>
                    <h2>Siempre pensando en ti.</h2>
                </div>
            </div>
        </div>
        <div class="space">
        </div>
    </article>
</div>
<div class="flecha text-right"><a href="#inicio"><i class="fas fa-sort-up fa-4x"></i></a></div>
<!-- End of Features Section-->
@include('footer')

@endsection
