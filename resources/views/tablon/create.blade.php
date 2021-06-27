@extends('layouts.editorTablon')

@section('titulo')
Crear nueva entrada del tablón
@endsection

@section('action')
{{route('tablon-de-misiones.store')}}
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