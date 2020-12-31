@extends ('layouts.editorComentario')
@section('titulo')
EDITAR COMENTARIO
@endsection
@section('method')
  @method('PATCH')
@endsection

@section('action')
  {{route('comentario.update', $comentario)}}
@endsection
@section('campoComentario')
  {{$comentario->mensaje}}
@endsection
