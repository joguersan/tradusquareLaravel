@extends('layouts.editorFicha')
@section('titulo')
  Crear nueva ficha
@endsection
@section('action')
  {{route('fichas.store')}}
@endsection
@section('campoPlataforma')
    @foreach($plataformas as $plataforma)
  	<option value="{{$plataforma->id}}">{{$plataforma->nombre}}</option>
  	@endforeach
@endsection

@section('campoGrupos')
    @foreach($grupos as $grupo)
  	<option value="{{$grupo->id}}">{{$grupo->nombre}}</option>
  	@endforeach
@endsection

@section('campoEstado')
  <option value="Completado">Completado</option>
  <option value="En proceso">En proceso</option>
  <option value="Pausado">Pausado</option>
  <option value="Cancelado">Cancelado</option>
@endsection
