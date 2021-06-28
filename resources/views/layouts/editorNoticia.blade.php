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
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label for="titulo" class="btn btn-dark">Título</label>
                                    </div>
                                    <input type="name" class="form-control" name="titulo" id="titulo" value="@yield('campoTitulo')" placeholder="Título de ejemplo"></input>
                                </div>
                                {{$errors->first('titulo')}}
                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <label for="contenido" class="btn btn-dark m-0">Contenido</label>
                                    </div>
                                    <textarea rows="10" class="m-0" name="contenido" value="{{old('contenido')}}" id="contenido" placeholder="Contenido de la entrada">@yield('campoContenido')</textarea>
                                </div>
                                {{$errors->first('contenido')}}
                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <label class="btn btn-dark">Subir imagen:</label>
                                    </div>
                                    <input type="text" name="imagen" class="form-control" value="@yield('campoImagen')" aria-label="Default" placeholder="O inserta URL de la imagen"></input>
                                </div>
                                {{$errors->first('imagen')}}
                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <label class="btn btn-dark">Juegos relacionados</label>
                                    </div>
                                    <select class="juegos w-75" name="fichas[]" class="form-control" multiple>
                                        @yield('campoFichas')
                                    </select>
                                </div>
                                <div class="input-group mt-3 w-25">
                                    <div class="input-group-prepend">
                                        <label class="btn btn-dark">Estado</label>
                                    </div>
                                    <select name="estado" id="estado" class="form-control">
                                        @yield('campoEstado')
                                    </select>
                                </div>
                            </div>
                            <input class="btn btn-danger text-white" type="submit" value="Enviar"></input>
                            <a href="/"><input style="cursor:pointer" class="btn btn-warning text-white" value="Salir" /></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.juegos').select2();
        });
    </script>
    <script>
        $('#contenido').summernote({
            height: 500,
            focus: true
        });
    </script>
</body>

</html>