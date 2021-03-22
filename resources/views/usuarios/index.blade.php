@extends('layouts.layout')

@section('contenido')
<table class="table text-center table-striped table-bordered table-hover">
	@foreach ($usuarios as $usuario)
	<tr>
		<td>
			<a href="{{route('usuarios.show', ['id' => $usuario->id])}}">{{$usuario->nombre}}</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection