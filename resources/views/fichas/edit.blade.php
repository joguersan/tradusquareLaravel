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
  @foreach($ficha->plataformas as $platform)
  <div class="row nuevaPlataforma">
    <div class="col-md-6">
      <div class="input-group">
          <div class="input-group-prepend">
              <label for="plataformas[]" class="btn btn-dark">Plataformas</label>
          </div>
          <select class="juegos" name="plataformas[]" class="form-control">
            @foreach($plataformas as $plataforma)
            <option value="{{$plataforma->id}}" {{$platform->id  == $plataforma->id ? 'selected' : '' }}>{{$plataforma->nombre}}</option>
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
          <option value="{{$estado->id}}" {{ $estado->id  == $platform->pivot->estado_id ? 'selected' : '' }}>{{$estado->nombre_estado}}</option>
          @endforeach
        </select>
      </div>
    </div>
  </div>
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
