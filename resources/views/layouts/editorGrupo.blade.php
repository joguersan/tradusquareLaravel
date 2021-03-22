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
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label for="titulo" class="btn btn-dark">Nombre</label>
                                        </div>
                                        <input type="name" class="form-control mr-3" name="nombre" id="nombre" value="@yield('campoTitulo')" placeholder="Nombre de ejemplo"></input>
                                    </div>
                                    {{$errors->first('nombre')}}
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="btn btn-dark">Subir logo:</label>
                                        </div>
                                        <input type="text" name="logo" class="form-control" value="@yield('campoImagen')" aria-label="Default" placeholder="O inserta URL del logo"></input>
                                    </div>
                                    {{$errors->first('imagen')}}
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <div class="w-100 bg-dark text-white">
                                                <label for="contenido" class="btn btn-dark m-0">Descripción</label>
                                            </div>
                                            <textarea class="summernote m-0" name="descripcion" value="{{old('descripcion')}}" id="descripcion" placeholder="Breve descripción del grupo">@yield('campoContenido')</textarea>
                                            {{$errors->first('descripcion')}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col mb-2">
                                                <div class="input-group-prepend">
                                                    <label for="contenido" class="btn btn-dark m-0">Twitter</label>
                                                    <input type="text" name="twitter" value="@yield('twitter')" id="twitter" placeholder="tradusquare"></input>
                                                    {{$errors->first('contenido')}}
                                                </div>
                                            </div>
                                            <div class="col mb-2">
                                                <div class="input-group-prepend">
                                                    <label for="contenido" class="btn btn-dark m-0">Facebook</label>
                                                    <input type="text" name="facebook" value="@yield('facebook')" id="facebook" placeholder="tradusquare"></input>
                                                </div>
                                            </div>
                                            <div class="col mb-2">
                                                <div class="input-group-prepend">
                                                    <label for="contenido" class="btn btn-dark m-0">Correo</label>
                                                    <input type="text" name="correo" value="@yield('correo')" id="correo" placeholder="tradusquare@gmail.com"></input>
                                                </div>
                                            </div>
                                            <div class="col mb-2">
                                                <div class="input-group-prepend">
                                                    <label for="contenido" class="btn btn-dark m-0">Página web</label>
                                                    <input type="text" name="web" value="@yield('web')" id="twitter" placeholder="https://tradusquare.es"></input>
                                                </div>
                                            </div>
                                            <div class="col mb-2">
                                                <div class="input-group-prepend">
                                                    <label for="contenido" class="btn btn-dark m-0">Youtube</label>
                                                    <input type="text" name="youtube" value="@yield('youtube')" id="youtube" placeholder="tradusquare"></input>
                                                </div>
                                            </div>
                                            <div class="col mb-2">
                                                <div class="input-group-prepend">
                                                    <label for="contenido" class="btn btn-dark m-0">Discord</label>
                                                    <input type="text" name="discord" value="@yield('discord')" id="discord" placeholder="@usuario#xxxx"></input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <label class="btn btn-dark">Juegos relacionados</label>
                                    </div>
                                    <select class="juegos w-75" name="fichas[]" class="form-control" multiple>
                                        @yield('campoFichas')
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
        $('.juegos').select2();
    </script>
</body>

</html>