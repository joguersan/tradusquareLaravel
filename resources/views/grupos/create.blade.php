@extends('layouts.editorGrupo')
@section('titulo')
  Crear nuevo grupo
@endsection
@section('action')
  {{route('grupos.store')}}
@endsection
@section('campoFichas')
    @foreach($fichas as $ficha)
  	<option value="{{$ficha->id}}">{{$ficha->nombre}}</option>
  	@endforeach
@endsection
