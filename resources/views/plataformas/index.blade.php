@extends('layouts.layout')
@section ('metaAdicional')
<title>Plataformas</title>
@endsection
@section('contenido')
<div>
    <table class="table table-bordered">
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
        @foreach ($plataformas as $plataforma)
        <tr>
            <td><img loading="lazy" src="{{ $plataforma->imagen }}" /></td>
            <td>{{ $plataforma->nombre }}</td>
            <td>
                <a class="btn" href="{{ route('plataformas.show',$plataforma->id) }}"><i class="bi bi-eye-fill text-primary"></i></a>
                <a class="btn" href="{{ route('plataformas.edit',$plataforma->id) }}"><i class="bi bi-pencil-fill text-success"></i></a>
                <form action="{{ route('plataformas.destroy',$plataforma->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn"><i class="bi bi-backspace-fill text-danger"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection