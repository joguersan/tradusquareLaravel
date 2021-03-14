@extends('layouts.editorFicha')
@section('titulo')
  Crear nueva ficha
@endsection

@section('method')
  @method('PATCH')
@endsection

@section('action')
  {{route('ficha.update', $ficha)}}
@endsection

@section('campoTitulo')
  {{$ficha->nombre}}
@endsection

@section('campoFicha')
  {{$ficha->ficha}}
@endsection

@section('campoSinopsis')
  {{$ficha->sinopsis}}
@endsection

@section('campoInfo')
  {{$ficha->info_adicional}}
@endsection

@section('campoEquipo')
  {{$ficha->info_adicional}}
@endsection

@section('campoImagen')
  {{$ficha->imagen}}
@endsection

@section('campoPlataforma')
  @foreach($plataformas as $plataforma)
  <option value="{{$plataforma->id}}" {{ in_array($plataforma->id, $selected_categories ) == 1 ? 'selected' : '' }}>{{$plataforma->nombre}}</option>
  @endforeach

@endsection
@section('campoGrupos')
  @foreach($grupos as $grupo)
  <option value="{{$grupo->id}}" {{ in_array($grupo->id, $selected_groups ) == 1 ? 'selected' : '' }}>{{$grupo->nombre}}</option>
  @endforeach

@endsection

@section('campoLinks')
  {{$ficha->descarga}}
@endsection
@section('campoEstado')
  <option {{{$ficha->estado == 1 ? 'selected': ''}}} value="1">Publicada</option>
  <option {{{$ficha->estado == 0 ? 'selected': ''}}} value="0">Borrador</option>
@endsection
