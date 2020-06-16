<nav class="navbar sticky-top navbar-expand-lg bg-light navbar-primary border pb-0 m-0">
    <a class="navbar-brand imagenCabecera" href="{{route('inicio')}}">
      <img src="/images/logo.webp" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link {{ setActive('proyectos') }}" href="{{route('proyectos')}}"><i class="fas fa-gamepad" aria-hidden="true"></i> Traducciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" {{ setActive('grupos') }} href="{{route('grupos.index')}}"><i class="fas fa-users" aria-hidden="true"></i> Grupos miembros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ setActive('informacion') }}" href="{{route('informacion')}}"><i class="fas fa-info-circle" aria-hidden="true"></i> ¿Qué es TraduSquare?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ setActive('amala') }}" href="{{route('amala')}}"><i class="fas fa-dungeon" aria-hidden="true"></i> Proyecto Amala</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://tradusquare.es/tablon-de-misiones.php"><i class="fas fa-chalkboard" aria-hidden="true"></i> Tablón de misiones</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                @guest
                <a class="nav-link" href=""><i class="fas fa-user-circle"></i> Acceder</a>
                @endguest
                @auth
                <a class="nav-link" href=""><i class="fas fa-user-circle"></i>{{Auth::user()->nombre}}</a>
                @endauth
            </li>
        </ul>
    </div>
</nav>
