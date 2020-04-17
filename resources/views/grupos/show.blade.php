@extends('layouts.layout')
@section('contenido')

	<div class="col" style="height:300px; background-image:url('{{$grupo->imagen}}');
	 background-size:cover">
		<h1>{{$grupo->nombre}}</h1>
	</div>

<div class="p-0 border border-primary">
	<div class="col font-weight-bold d-flex p-2 bg-primary text-white justify-content-center">
		<i class="large material-icons mr-2">info</i>Integrantes
	</div>
	<div class="col p-3" style="line-height:2">
		<ul>
			@foreach ($grupo->usuarios as $usuario)
				<li><a href="{{route('usuarios.show', ['id' => $usuario->id])}}">{{$usuario->nombre}}</a></li>
			@endforeach
		</ul>
	</div>
</div>
<div class="border border-warning p-0 mt-3">
	<div class="col font-weight-bold d-flex p-2 bg-warning text-white justify-content-center">
		<i class="large material-icons mr-2">library_books</i>Historia
	</div>
	<div class="col p-3" style="line-height:2">

	</div>
</div>
<div class="border p-0 mt-3" style="border-color:purple">
		<div class="col font-weight-bold d-flex p-2 text-white  justify-content-center" style="background-color:purple">
			<i class="large material-icons mr-2">contacts</i>Roles
		</div>
	<div class="col p-3">
		{!!$grupo->equipo!!}
	</div>
</div>
<div class="border border-success p-0 mt-3">
	<div class="col font-weight-bold d-flex p-2 bg-success text-white justify-content-center">
		<i class="large material-icons mr-2">save_alt</i>Proyectos
	</div>
		<div class="list-group">
			@foreach ($grupo->fichas as $ficha)
				@if ($ficha->estado == "Completado")
				<a href="{{route('ficha.show', ['id' => $ficha->id])}}"><div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">{{$ficha->nombre}}<span class="badge badge-success p-1">Completado</span></div></a>
				@elseif ($ficha->estado == "En proceso")
					<a href="{{route('ficha.show', ['id' => $ficha->id])}}"><div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">{{$ficha->nombre}}<span class="badge badge-primary p-1">En proceso</span></div></a>
				@elseif ($ficha->estado == "Pausado")
					<a href="{{route('ficha.show', ['id' => $ficha->id])}}"><div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">{{$ficha->nombre}}<span class="badge badge-warning p-1">Pausado</span></div></a>
				@endif
			@endforeach
		</div>
</div>

@endsection
