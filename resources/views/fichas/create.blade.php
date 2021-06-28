@extends('layouts.editorFicha')
@section('titulo')
Crear nueva ficha
@endsection
@section('action')
{{route('fichas.store')}}
@endsection
@section('campoPlataforma')
<div class="row nuevaPlataforma">
    <div class="col-md-6">
        <div class="input-group">
            <div class="input-group-prepend">
                <label for="plataformas[]" class="btn btn-dark">Plataformas</label>
            </div>
            <select class="juegos" name="plataformas[]" class="form-control">
                @foreach($plataformas as $plataforma)
                <option value="{{$plataforma->id}}">{{$plataforma->nombre}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="input-group">
            <div class="input-group-prepend">
                <label for="estado[]" class="btn btn-dark">Estado</label>
            </div>
            <select class="juegos" name="estados[]" class="form-control">
                @foreach($estados as $estado)
                <option value="{{$estado->id}}">{{$estado->nombre_estado}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
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