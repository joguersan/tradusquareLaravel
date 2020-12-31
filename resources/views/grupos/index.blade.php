@extends('layouts.layout')

@section('contenido')
<table class="table text-center table-striped table-bordered table-hover">
	<thead class="text-white gradienteTabla">
		<tr>
			<th scope="col" colspan="3">
				<h3>Miembros de TraduSquare</h3>
			</th>
		</tr>
	</thead>
	@php ($i = 0)
	@endphp
	@foreach ($grupos as $grupo)
	@if ($i == 0)
	<tr>
		@endif
		<td>
			<a href="{{route('grupos.show', $grupo)}}">{{$grupo->nombre}}</a>
		</td>
		@php ($i++)
		@endphp
		@if ($i == 3)
	</tr>
	@php ($i=0)
	@endphp
	@endif

	@endforeach
</table>
@endsection
