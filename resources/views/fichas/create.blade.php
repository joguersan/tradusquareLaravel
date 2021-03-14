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
  <option selected value="0">Borrador</option>
  <option value="1">Publicada</option>
@endsection
