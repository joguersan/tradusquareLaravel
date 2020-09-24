@extends('layouts.layout')
@section('metaAdicional')
<title>TraduSquare - Tablón de misiones</title>
<meta name="description" content="¿Quieres participar en una traducción fan de un videojuego al español y no sabes por dónde empezar? ¡Apúntate en nuestro tablón de misiones, buscamos colaboradores!"
<script src="{{asset('js/lazyload.js')}}"></script>
@endsection

@section('contenido')
  <div class="text-center">
      <img src="images/estilo/tablonTitle.jpg" class="titular w-50 mb-2" alt="Últimas noticias">
  </div>
  <div class="row m-3 p-0">
    @forelse($entradas as $entrada)
      @if ($entrada->visible == 1)
        <div class="col-md-3 elementoTablon" data-toggle="modal" data-target="#tablon{{$entrada->id}}">
          <img src="{{$entrada->imagen}}" alt="Anuncio para {{$entrada->titulo}}"/>
          <div class="modal fade sebusca" id="tablon{{$entrada->id}}" tabindex="-1" role="dialog" aria-labelledby="Anuncio {{$entrada -> titulo}}" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
					  <div class="modal-content pergamino">
						<div class="modal-header">
						  <h5 class="modal-title text-center" id="exampleModalLongTitle">{{$entrada -> titulo}}</h5>
						  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
						<div class="modal-body"><h3 class="text-center">¡Se busca!</h3>{!!$entrada -> contenido!!}</div>
						<div class="modal-footer">
              <form method="post" action="{{route('tablon-de-misiones.destroy', $entrada)}}" class="p-0 m-0">
      					@csrf
      					@method('DELETE')
							<input type="submit" class="btn btn-danger" value="Eliminar">
						  </form>
						  <button type="button" class="btn btn-secondary" data-dismiss="modal">No, gracias...</button>
						  <a href="mailto:{{$entrada-> contacto }}"><button type="button" class="btn btn-warning text-white">¡Quiero participar!</button></a>
						</div>
					  </div>
					</div>
				  </div>
        </div>
      @endif
      @empty
      <div class="col text-center">No necesitamos ayuda en ningún proyecto. ¡Prueba dentro de un tiempo!</div>
    @endforelse
  </div>
  <div class="row text-center">
          <div class="col-md-3 elementoTablon">
  				<img src="https://tradusquare.es/tablon/nueva.png">
  			  </div>
            </div>
@endsection
