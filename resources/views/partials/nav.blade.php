<nav class="navbar navbar-expand-lg bg-light navbar-primary border pb-0 m-0">
    <a class="navbar-brand imagenCabecera" href="{{route('inicio')}}">
      <img src="/images/logoMini.webp" alt="Logo de TraduSquare"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto border-bottom">
            <li class="nav-item">
                <a class="nav-link {{ setActive('proyectos') }}" href="{{route('proyectos')}}"><i class="bi-controller" aria-hidden="true"></i> Traducciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" {{ setActive('grupos') }} href="{{route('grupos.index')}}"><i class="bi-people-fill" aria-hidden="true"></i> Grupos miembros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ setActive('informacion') }}" href="{{route('informacion')}}"><i class="bi-info-circle-fill" aria-hidden="true"></i> ¿Qué es TraduSquare?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ setActive('amala') }}" href="{{route('amala')}}"><i class="bi-moon-stars-fill" aria-hidden="true"></i> Proyecto Amala</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ setActive('amala') }}" href="{{route('tablon-de-misiones.index')}}"><i class="bi bi-stickies-fill"></i> Tablón de misiones</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                @guest
                <a class="nav-link" href="/"><i class="bi-person-bounding-box"></i> Acceder</a>
                @endguest
                @auth
                <a class="nav-link" href="/"><i class="fas fa-user-circle"></i>{{Auth::user()->nombre}}</a>
                @endauth
            </li>
        </ul>
    </div>
</nav>
