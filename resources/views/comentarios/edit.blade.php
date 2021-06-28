@extends ('layouts.editorComentario')
@section('titulo')
EDITAR COMENTARIO
@endsection
@section('method')
@method('PATCH')
@endsection

@section('action')
{{route('comentarios.update', $comentario)}}
@endsection
@section('campoComentario')
{{$comentario->contenido}}
@endsection