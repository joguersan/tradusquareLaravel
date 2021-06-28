@extends('layouts.layout')
@section('contenido')
<table class="w-100 header" style="height:300px">
	<div class="w-100 border border-black border-4" style="height:300px; position:absolute; left:0; top:0; filter:blur(2px); background-size:cover; background-image:url({{$usuario->imagen}})"></div>
	<tbody>
		<tr>
			<td>
				<div class="row">
					<div class="col-2"></div>
					<div class="col-8 text-center">
						<h1 style="background-color:rgba(255,255,255,0.3); text-shadow:2px 2px black" class="text-white border rounded border-white p-3 border-4">{{$usuario->nombre}}</h1>
					</div>
					<div class="col-2"></div>
				</div>
			</td>
		</tr>
	</tbody>
</table>

<div class="alert alert-primary p-0 mt-3" role="alert">
	<div class="col font-weight-bold d-flex p-2 bg-primary rounded-top text-white">
		<i class="large material-icons mr-2">info</i>Grupos
	</div>
	<div class="col p-3" style="line-height:2">
	</div>
</div>
<div class="alert alert-warning p-0 mt-3" role="alert">
	<div class="col font-weight-bold d-flex p-2 bg-warning rounded-top text-white">
		<i class="large material-icons mr-2">library_books</i>Historia
	</div>
	<div class="col p-3" style="line-height:2">

	</div>
</div>
<div class="alert p-0 mt-3" role="alert" style="background-color:lavender; color:purple">
	<div class="col font-weight-bold d-flex p-2 rounded-top text-white" style="background-color:purple">
		<i class="large material-icons mr-2">contacts</i>Roles
	</div>
	<div class="col p-3">

	</div>
</div>
<div class="alert alert-success p-0 mt-3" role="alert">
	<div class="col font-weight-bold d-flex p-2 bg-success rounded-top text-white">
		<i class="large material-icons mr-2">save_alt</i>Proyectos
	</div>
	<div class="col p-3" style="line-height:2">
	</div>
</div>

@endsection