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
                                        <label for="nombre" class="btn btn-dark">Título</label>
                                    </div>
                                    <input type="name" class="form-control" name="nombre" id="nombre" value="@yield('campoTitulo')" placeholder="Título de ejemplo"></input>
                                </div>
                                {{$errors->first('nombre')}}

                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <label for="contenido" class="btn btn-dark m-0">Ficha</label>
                                    </div>
                                    <textarea class="summernote m-0" name="ficha" value="{{old('ficha')}}" id="contenido" placeholder="Datos del proyecto">@yield('campoFicha')</textarea>
                                </div>
                                {{$errors->first('ficha')}}

                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <label for="contenido" class="btn btn-dark m-0">Información adicional</label>
                                    </div>
                                    <textarea rows="10" class="summernote m-0" name="info" value="{{old('info')}}" id="contenido" placeholder="Información adicional">@yield('campoInfo')</textarea>
                                </div>
                                {{$errors->first('info')}}

                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <label for="contenido" class="btn btn-dark m-0">Equipo</label>
                                    </div>
                                    <textarea rows="10" class="summernote m-0" name="equipo" value="{{old('equipo')}}" id="equipo" placeholder="Equipo">@yield('campoEquipo')</textarea>
                                </div>
                                {{$errors->first('equipo')}}

                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <label for="contenido" class="btn btn-dark m-0">Sinopsis</label>
                                    </div>
                                    <textarea class="m-0 summernote" name="sinopsis" value="{{old('sinopsis')}}" id="sinopsis" placeholder="Sinopsis">@yield('campoSinopsis')</textarea>
                                </div>
                                {{$errors->first('equipo')}}

                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <label for="contenido" class="btn btn-dark m-0">Enlaces del parche</label>
                                    </div>
                                    <textarea class="summernote m-0" name="links" value="{{old('links')}}" id="links" placeholder="Links">@yield('campoLinks')</textarea>
                                </div>
                                {{$errors->first('equipo')}}

                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <label class="btn btn-dark">Subir imagen:</label>
                                    </div>
                                    <input type="text" name="imagen" class="form-control" id="links" value="@yield('campoImagen')" placeholder="O inserta URL de la imagen"></input>
                                </div>
                                {{$errors->first('imagen')}}
                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <label class="btn btn-dark">Plataformas</label>
                                    </div>
                                    <select class="juegos w-75" name="plataformas[]" class="form-control" multiple>
                                        @yield('campoPlataforma')
                                    </select>
                                </div>
                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <label class="btn btn-dark">Grupos</label>
                                    </div>
                                    <select class="juegos w-75" name="grupos[]" class="form-control" multiple>
                                        @yield('campoGrupos')
                                    </select>
                                </div>
                                <div class="input-group mt-3 w-25">
                                    <div class="input-group-prepend">
                                        <label class="btn btn-dark">Estado</label>
                                    </div>
                                    <select name="estado" class="form-control">
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
        $('.summernote').summernote({
            height: 300,
            focus: true
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.juegos').select2();
        });
    </script>
</body>

</html>
