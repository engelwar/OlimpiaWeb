<header id="header">
    <nav class="menu">
        <div class="logo">
            <a href=""><img src="{{ asset('img/logo.png')}}" alt=""></a>
            <a id="btn-menu" class="btn-menu"><i class="icono fas fa-bars" aria-hidden="true"></i></a>
        </div>
        <div id="enlaces" class="enlaces">
            <a href="{{route('inicio')}}">Inicio</a>
            <a href="{{route('nosotros')}}">Nosotros</a>
            <a href="{{route('contacto.index')}}">Contacto</a>
            <a href="http://olimpia.dualbiz.net/portal/" target="_blank">Tienda<i class="fas fa-shopping-bag"></i></a>
        </div>
    </nav>
</header>
