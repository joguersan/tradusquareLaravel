@extends ('layouts.editorNoticia')
@section('titulo')
EDITAR ENTRADA
@endsection
@section('method')
  @method('PATCH')
@endsection

@section('action')
  {{route('noticia.update', $noticia)}}
@endsection
@section('campoTitulo')
  {{$noticia->titulo}}
@endsection
@section('campoContenido')
  {{$noticia->contenido}}
@endsection
@section('campoImagen')
  {{$noticia->imagen}}
@endsection
@section('campoFichas')
  @foreach($fichas as $ficha)
  <option value="{{$ficha->id}}" {{ in_array($ficha->id, $selected_categories ) == 1 ? 'selected' : '' }}>{{$ficha->nombre}}</option>
  @endforeach
@endsection
@section('campoEstado')
  <option {{{$noticia->estado == 'Borrador' ? 'selected': '' }}}>Borrador</option>
  <option {{{$noticia->estado == 'Publicada' ? 'selected': '' }}}>Publicada</option>
@endsection
