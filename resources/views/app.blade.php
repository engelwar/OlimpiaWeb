<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LIBRERÍA Y PAPELERÍA OLIMPIA S.R.L.</title>
    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}">

    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/lightcase/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/aos-master/dist/aos.css') }}" />
    <!-- SUGERENCIA CAROUSEL 2 -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css')}}" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css')}}">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <!--RECAPTCHA-->

    {!! NoCaptcha::renderJs() !!}
</head>

<body data-spy="scroll" data-target="#navbar" class="static-layout">
    @yield('content')
    <!-- GLIDE -->
    <!-- SUGERENCIA CAROUSEL 2 -->
    <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 200,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper2", {
            direction: "vertical",
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            }
        });
    </script>
    <!-- External JS -->
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery/jquery.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{asset('vendor/select2/select2.min.js')}} "></script>
    <script src="{{asset('vendor/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vendor/stellar/jquery.stellar.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src="{{asset('vendor/isotope/isotope.min.js')}}"></script>
    <script src="{{asset('vendor/lightcase/lightcase.js')}}"></script>
    <script src="{{asset('vendor/waypoints/waypoint.min.js')}}"></script>
    <script src="{{asset('vendor/aos-master/dist/aos.js')}}"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Main JS -->
    <script src="{{asset('js/appli.js')}} "></script>
    <script src="{{asset('js/headroom.min.js')}} "></script>
    <script>
        $(document).ready(function() {
            //var span = document.getElementsByClassName("close")[0];
            /*span.onclick = function() {
                modal.fadeOut();
                console.log(event.target);
            }*/
            var dirmenu = function() {
                $("#direction-2").removeClass('hide');
            }
            $("#dir1").click(function() {
                $("#direction-2").removeClass('hide');
            });
            $("#dir2").click(function() {
                $("#direction-2").fadeIn();
            });
            $("#dir3").click(function() {
                alert("Handler for .click() called.");
            });
            $("#dir4").click(function() {
                alert("Handler for .click() called.");
            });
            ScrollReveal().reveal('.headline');

            var prevScrollpos = window.pageYOffset;
            window.onscroll = function() {
                var currentScrollPos = window.pageYOffset;
                if (prevScrollpos > currentScrollPos) {
                    document.getElementById("histortit").style.top = "65px";
                } else {
                    document.getElementById("histortit").style.top = "0px";
                }
                prevScrollpos = currentScrollPos;
            }
            $("#term-modal").click(function() {
                $("#terminos").fadeIn();
                window.onclick = function(event) {
                    if (event.target == modal[0]) {
                        $("#terminos").fadeOut();
                    }
                }
            });
        });
    </script>
    @yield('js')
</body>

</html>
