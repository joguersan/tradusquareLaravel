<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--<script src="{{asset('js/lazyload.js')}}"></script>-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.20.0/langs/es.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.20.0/trumbowyg.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.20.0/ui/trumbowyg.min.css" rel="stylesheet" />

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
                                    <textarea rows="10" class="m-0" name="ficha" value="{{old('ficha')}}" id="contenido" placeholder="Contenido de la entrada">@yield('campoFicha')</textarea>
                                </div>
                                {{$errors->first('ficha')}}

                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <label for="contenido" class="btn btn-dark m-0">Información adicional</label>
                                    </div>
                                    <textarea rows="10" class="m-0" name="info" value="{{old('info')}}" id="contenido" placeholder="Información adicional">@yield('campoInfo')</textarea>
                                </div>
                                {{$errors->first('info')}}

                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <label for="contenido" class="btn btn-dark m-0">Equipo</label>
                                    </div>
                                    <textarea rows="10" class="m-0" name="equipo" value="{{old('equipo')}}" id="equipo" placeholder="Equipo">@yield('campoEquipo')</textarea>
                                </div>
                                {{$errors->first('equipo')}}

                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <label for="contenido" class="btn btn-dark m-0">Sinopsis</label>
                                    </div>
                                    <textarea rows="10" class="m-0" name="sinopsis" value="{{old('sinopsis')}}" id="sinopsis" placeholder="Sinopsis">@yield('campoSinopsis')</textarea>
                                </div>
                                {{$errors->first('equipo')}}

                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <label for="contenido" class="btn btn-dark m-0">Enlaces del parche</label>
                                    </div>
                                    <textarea rows="10" class="m-0" name="links" value="{{old('links')}}" id="links" placeholder="Links">@yield('campoLinks')</textarea>
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
        $(document).ready(function() {
            $('.juegos').select2();
        });
    </script>
    <script>
        $('textarea').trumbowyg();
    </script>
</body>

</html>
