@extends('layouts.editorTablon')

@section('titulo')
Editando anuncio para ̣{{$entrada->titulo}}
@endsection

@section('method')
@method('PATCH')
@endsection
@section('action')
{{route('tablon-de-misiones.update', $entrada->id )}}
@endsection

@section('campoTitulo')
{{$entrada->titulo}}
@endsection

@section('campoContenido')
{{$entrada->contenido}}
@endsection

@section('campoImagen')
{{$entrada->imagen}}
@endsection

@section('campoContacto')
{{$entrada->contacto}}
@endsection

@section('campoFichas')

@foreach($fichas as $ficha)
<option value="{{$ficha['id']}}" {{setSelected($ficha['id'], $entrada->fichas['id'], "selected")}}>{{$ficha->nombre}}
</option>
@endforeach
@endsection

@section('campoEstado')
<option value="0" {{setSelected($entrada->visible, 0, "selected")}}>Borrador</option>
<option value="1" {{setSelected($entrada->visible, 1, "selected")}}>Publicada</option>
@endsection