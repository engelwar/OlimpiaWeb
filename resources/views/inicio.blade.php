@extends('app')
@section('estilo')
<style>
  .container_banner_productos {
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
  }
</style>
@endsection
@section('content')
@include('navbar')

<!--Carusel-->
<section class="section_banner_inicio">
  <div class="jumbotron d-flex align-items-center">
    <div class="carusel" data-aos="fade-left" data-aos-delay="1000" data-aos-duration="400" data-aos-easing="ease-out-quart">
      <div class="testi-carousel owl-carousel owl-carousel-class">
        @foreach ($bann as $k => $b)
        @if ($b->seccion == 1)
        <div id="banner_celular" class="testi-item text-center">
          <img src="img/Productos/banner/{{$b->img}}" alt="Carusel" style="object-fit: cover; object-position: center" width="100%" ; height="100%">
        </div>
        @endif
        @endforeach
      </div>
    </div>
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="triangle triangle-1">
      <img src="{{ asset('img/obj_triangle.png')}}" alt="">
    </div>
    <div class="triangle triangle-2">
      <img src="{{ asset('img/obj_triangle.png')}}" alt="">
    </div>
    <div class="triangle triangle-3">
      <img src="{{ asset('img/obj_triangle.png')}}" alt="">
    </div>
    <div class="triangle triangle-4">
      <img src="{{ asset('img/obj_triangle.png')}}" alt="">
    </div>
  </div>
</section>

@php
$i=0;
$j=0;
$conteo = 0;
@endphp

<section class="sectiones_Pestaña">
  <section class="featurettes overlay mt-4" style="background-image: url({{ asset('img/mater.jpg')}}); background-position: center;">
    <div class="container">
      <div class="section-content-cate">
        <div class="row">
          <div class="col-md-12">
            <div class="row d-flex align-items-center justify-content-around flex-wrap">
              @foreach ($libr as $k => $l)
              <div class="col-md-4 col-sm-6 px-md-0 px-lg-4" data-aos="flip-left">
                <a href="{{$l->url}}" target="_blank">
                  <div class="imgtxt">
                    <img src="img/Productos/Libros/{{$l->img}}" class="imgcat">
                    <!-- <div class="imgtext-bottom">LIBROS</div> -->
                    <div class="text-center">
                      <button class="btn btn-primary btn-shadow btn-lg text-uppercase">{{$l->nombre}}</button>
                    </div>
                  </div>
                </a>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>

<!-- INICIO DE CAROUSEL PRODUCTOS -->
<section class="container_glide mt-4">
  <div class="featurettes container_banner_productos" @foreach ($bann as $k=> $p)
    @if ($p->seccion == 2 && $p->orden == 1)
    style="background-image: url(img/Productos/banner/{{$p->img}});"
    @endif
    @endforeach
    >
    <!-- <div class="barra_inicio"></div> -->
    <div class="heading-section text-center">
      @foreach ($bann as $k=> $p)
      @if ($p->seccion == 4 && $p->orden == 1)
      <img src="img/Productos/banner/{{$p->img}}" style="width:300px; margin-top: 40px">
      @endif
      @endforeach
    </div>
    <div class="swiper mySwiper">
      <!-- <div class="barra_inicio"></div> -->
      <div class="swiper-wrapper">
        @foreach($prod as $k => $p)
        <div class="swiper-slide">
          @if ($p->producto_oferta == 'Productos')
          <div class="myBtn{{$k+1}} carousel__elemento productos_elementos" style="background-color: {{ $p->color_bloque }}; color: {{ $p->color_text }};" @endif>
            <img src="img/Productos/{{$p->img}}" alt="img">

            <div class="descripcion_prod">
              <h5>{{$p->descripcion}}</h5>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="swiper-pagination"></div>
      <!-- <div class="barra_fin"></div> -->
    </div>
    <!-- <div class="barra_fin"></div> -->
</section>

<!-- FIN DE CAROUSEL PRODUCTOS -->

<!-- INICIO DE CAROUSEL OFERTAS -->

<section class="container_glide mt-4">
  <div class="featurettes container_banner_productos" @foreach ($bann as $k=> $p)
    @if ($p->seccion == 3 && $p->orden == 1)
    style="background-image: url(img/Productos/banner/{{$p->img}});"
    @endif
    @endforeach
    >
    >
    <div class="heading-section text-center">
      @foreach ($bann as $k=> $p)
      @php
      $conteo++;
      @endphp
      @if ($p->seccion == 5 && $p->orden == 1)
      <img src="img/Productos/banner/{{$p->img}}" style="width:300px; margin-top: 40px">
      @elseif($conteo == 1)
      <div class="heading-section text-center">
        <h2>OFERTAS</h2>
      </div>
      @endif
      @endforeach
    </div>
    @if($ofer->count() > 3)
    <div class="swiper mySwiper">
      <!-- <div class="barra_inicio"></div> -->
      <div class="swiper-wrapper">
        @foreach($ofer as $k => $p)
        <div class="swiper-slide">
          <div class="myBtn{{$k+1}} carousel__elemento" @if ($p->producto_oferta == 'Ofertas')
            style="background-color: {{$p->color_bloque}}; color: {{ $p->color_text }};"
            @endif
            >
            <img src="img/Productos/{{$p->img}}" alt="img">
            <div class="descripcion_prod">
              <h5>{{$p->descripcion}}</h5>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="swiper-pagination"></div>
      <!-- <div class="barra_fin"></div> -->
    </div>
    @else
    <div class="swiper swiper_ofertas">
      <div class="d-flex justify-content-around flex-wrap">
        @foreach($ofer as $k => $p)
        <div class="swiper-slide mb-4">
          <div class="carousel__elemento" @if ($p->producto_oferta == 'Ofertas')
            style="background-color: {{$p->color_bloque}}; color: {{ $p->color_text }};"
            @endif
            >
            <img src="img/Productos/{{$p->img}}" alt="">
            <div class="descripcion_prod">
              <a href="{{$p->url}}" target="_blank" @if ($p->producto_oferta == 'Ofertas')
                style="color: {{ $p->color_text }};"
                @endif
                >
                <h5>{{$p->descripcion}}</h5>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    @endif
  </div>
</section>
@foreach($prod as $k => $p)
<div id="myModal{{$k+1}}" class="modal">
  <div class="con-modal">
    <div class="row g-0 justify-content-center w-70">
      <div class="img_product">
        <div id="zoomin{{$k+1}}" class="zoomin" style="background-image: url(img/Productos/{{$p->img}});">
        </div>
      </div>
      <div class="datos_product">
        <div class="product-info container">
          <div class="row d-flex h-100 align-items-center">
            <div class="product_title col" style="height: 230px">
              <h3 style="color: #355296">{{$p->codigo}}</h3>
              <p>{{$p->descripcion}}</p>
              @if ($p->precio_anterior != null || $p->precio_anterior != 0)
              <h5 style="color: #d11313;text-decoration-line: line-through; margin-bottom: 0;">Antes {{$p->precio_anterior}} Bs.</h5>
              @endif
              @if ($p->precio_anterior != null || $p->precio_anterior != 0)
              <h3 style="color: #2850ac">Ahora {{$p->precio_actual}} Bs.</h3>
              @else
              <h3 style="color: #2850ac">Precio {{$p->precio_actual}} Bs.</h3>
              @endif
              <div class="product-price-btn">
                <a href="{{$p->url}}" target="_blank" @if ($p->producto_oferta == 'Ofertas')
                  style="color: {{ $p->color_text }};"
                  @endif
                  >
                  <button class="btn btn-primary btn-shadow btn-lg">Comprar</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
<!-- FIN DE CAROUSEL OFERTAS -->

<!-- Client Section -->
<section id="client" class="overlay-claro" style="background-image: url({{ asset('img/material.jpg')}}); background-size: cover;">
  <div class="container">
    <div class="section-content">
      <div class="row ">
        <div class="col-md-12">
          <!-- Section Title -->
          <div class="title-wrap mb-5">
            <h2>Marcas que trabajan con nosotros</h2>
          </div>
          <!-- End of Section Title -->
        </div>
        <!-- Client Holder -->
        <div class="col-md-12 client-holder">
          <div class="client-slider  owl-carousel owl-carousel-class">
            @foreach ($marc as $k => $m)
            <div class="client-item">
              <img class="img-responsive" src="img/Productos/Marcas/{{$m->img}}">
            </div>
            @endforeach
          </div>
        </div><!-- End of Client Holder -->
      </div>
    </div>
  </div>
</section>
<!-- End of Client Section -->

@section('js')
<script>
  $(document).ready(function() {
    var modalfunc = function(btn, modal) {
      btn.click(function() {
        modal.fadeIn();
        window.onclick = function(event) {
          if (event.target == modal[0]) {
            modal.fadeOut();
          }
        }
      });
    }

    var cont = "{!!json_encode($prod->count())!!}";

    for (var i = 1; i <= cont; i++) {
      modalfunc($(".myBtn" + i), $("#myModal" + i));
    }

    var addZoom = function(target) {
      // (A) FETCH CONTAINER + IMAGE
      var container = document.getElementById(target),
        imgsrc = container.currentStyle || window.getComputedStyle(container, false),
        imgsrc = imgsrc.backgroundImage.slice(4, -1).replace(/"/g, ""),
        img = new Image();

      // (B) LOAD IMAGE + ATTACH ZOOM
      img.src = imgsrc;
      img.onload = function() {
        var imgWidth = img.naturalWidth,
          imgHeight = img.naturalHeight,
          ratio = imgHeight / imgWidth,
          percentage = ratio * 100 + '%';

        // (C) ZOOM ON MOUSE MOVE
        container.onmousemove = function(e) {
          var boxWidth = container.clientWidth,
            rect = e.target.getBoundingClientRect(),
            xPos = e.clientX - rect.left,
            yPos = e.clientY - rect.top,
            xPercent = xPos / (boxWidth / 100) + "%",
            yPercent = yPos / ((boxWidth * ratio) / 100) + "%";

          Object.assign(container.style, {
            backgroundPosition: xPercent + ' ' + yPercent,
            backgroundSize: imgWidth + 'px'
          });
        };

        // (D) RESET ON MOUSE LEAVE
        container.onmouseleave = function(e) {
          Object.assign(container.style, {
            backgroundPosition: 'center',
            backgroundSize: 'cover'
          });
        };
      }
    };

    window.addEventListener("load", function() {

      var cont = "{!!json_encode($prod->count())!!}";

      for (var i = 1; i <= cont; i++) {
        addZoom("zoomin" + i);
      }

    });
  });
</script>
<script>
  $(document).ready(function() {
    $('#exampleModal').modal('show')
  });
  $('.botonX').click(function() {
    $('#exampleModal').modal('hide')
  });
  $('.botonX').click(function() {
    $('#exampleModal2').modal('hide')
  });
</script>
@endsection






@include('footerIni')



@endsection