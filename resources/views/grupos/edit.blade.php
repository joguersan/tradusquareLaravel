@extends ('layouts.editorGrupo')
@section('titulo')
EDITAR GRUPO
@endsection
@section('method')
  @method('PATCH')
@endsection

@section('action')
  {{route('grupos.update', $grupo)}}
@endsection
@section('campoTitulo')
  {{$grupo->nombre}}
@endsection
@section('campoContenido')
  {{$grupo->descripcion}}
@endsection
@section('campoImagen')
  {{$grupo->logo}}
@endsection
@section('campoFichas')
  @foreach($fichas as $ficha)
  <option value="{{$ficha->id}}" {{ in_array($ficha->id, $selected_categories ) == 1 ? 'selected' : '' }}>{{$ficha->nombre}}</option>
  @endforeach
@endsection
@section('web')
  {{$grupo->web}}
@endsection
@section('correo')
  {{$grupo->correo}}
@endsection
@section('twitter')
  {{$grupo->twitter}}
@endsection
@section('facebook')
  {{$grupo->facebook}}
@endsection
@section('youtube')
  {{$grupo->youtube}}
@endsection
@section('discord')
  {{$grupo->discord}}
@endsection
