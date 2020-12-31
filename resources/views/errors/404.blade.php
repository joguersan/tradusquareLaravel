@extends('errors::illustrated-layout')

@section('code', '404')
@section('title', __('Página no encontrada'))

@section('image')
<style>
    #apartado-derecho{
        text-align:center;
        margin:auto;
    }
</style>
<div id="apartado-derecho" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    <img src="https://s3-us-west-2.amazonaws.com/en-samurai-gamers-images/wp-content/uploads/2017/03/23010758/jack-frost-persona-5-1.jpg"/>
</div>
@endsection

@section('message', __('Jii, joo. No encuentro la página que buscas, jo.'))
