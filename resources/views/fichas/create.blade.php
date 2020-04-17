@extends('layouts.editorFicha')
@section('titulo')
  Crear nueva ficha
@endsection
@section('action')
  {{route('fichas.store')}}
@endsection
