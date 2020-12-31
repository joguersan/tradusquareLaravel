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

@section('campoEquipo')
  {{$ficha->equipo}}
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
  <option {{{$ficha->estado == 'Completado' ? 'selected': '' }}}>Completado</option>
  <option {{{$ficha->estado == 'En proceso' ? 'selected': '' }}}>En proceso</option>
  <option {{{$ficha->estado == 'Pausado' ? 'selected': '' }}}>Pausado</option>
@endsection
