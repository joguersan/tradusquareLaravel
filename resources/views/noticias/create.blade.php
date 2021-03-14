@extends('layouts.editorNoticia')
@section('titulo')
  Crear nueva entrada
@endsection
@section('action')
  {{route('noticia.store')}}
@endsection
@section('campoFichas')
    @foreach($fichas as $ficha)
  	<option value="{{$ficha->id}}">{{$ficha->nombre}}</option>
  	@endforeach

@endsection

@section('campoEstado')
  <option value="0">Borrador</option>
  <option value="1">Publicada</option>
@endsection
