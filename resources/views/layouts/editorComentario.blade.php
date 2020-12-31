<!DOCTYPE HTML>
<html>

<head>
    @include('partials.estilo')
    @include('partials/javascript')
    @include('partials.estiloEditor')
</head>

<body>
    <div class="container-fluid m-0">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>@yield('titulo')</h2>
                    </div>
                    <div class="card-body">
                        <form class="pb-3" method="post" action="@yield('action')">
                            @csrf
                            @yield('method')
                            <div class="form-row">
                              <textarea name="mensaje" id="mensaje" class="summernote" class"col w-75">
                                @yield('campoComentario')
                              </textarea>
                            </div>
                            <input class="btn btn-danger text-white" type="submit" value="Enviar"></input>
                            <a href="{{route('inicio')}}"><input style="cursor:pointer" class="btn btn-warning text-white" value="Salir" /></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    $('.summernote').summernote({
        height: 300,
        focus: true
    });
    </script>
    <script>
        $('.juegos').select2();
    </script>
</body>

</html>
