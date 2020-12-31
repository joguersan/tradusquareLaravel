<?php

namespace App\Http\Controllers;

use App\Grupo;
use Illuminate\Http\Request;
use App\Ficha;
use View;
class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $grupos = Grupo::all();
	    return View::make('grupos.index')->with('grupos', $grupos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $fichas = Ficha::all();
      return view('grupos.create', [
        'fichas' => $fichas
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Grupo $grupo)
    {
      $char_raros=array("\"","+","*","'","#","?","¿","!","¡","/", "[","]","(",")","[",":",",",".",";","%");
      $a=['á','é','í','ó','ú','ñ'];
      $b=['a','e','i','o','u','n'];
      $url=str_replace(" ", "-", request('nombre'));
      $url=str_replace($a, $b, $url);
      $grupo->create([
        'nombre'=> request('nombre'),
        'url'=> $url,
        'descripcion' => request('descripcion'),
        'logo' => request('logo'),
        'web' => request('web'),
        'correo' => request('correo'),
        'twitter' => request('twitter'),
        'facebook' => request('facebook'),
        'youtube' => request('youtube'),
        'discord' => request('discord')
      ]);
      $grupo -> fichas() -> sync(request('fichas'));
      return redirect()->route('grupos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $grupo ID
     * @return \Illuminate\Http\Response
     */
    public function show(Grupo $grupo)
    {
      return view('grupos.show', [
        'grupo' => $grupo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function edit(Grupo $grupo)
    {
      $selected_categories = [];
      foreach($grupo->fichas as $ficha){
          array_push($selected_categories, $ficha->id);
      }
      $fichas = Ficha::all();
      return view('grupos.edit', [
        'grupo' => $grupo,
        'fichas' => $fichas,
        'selected_categories' => $selected_categories
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grupo $grupo)
    {
      $char_raros=array("\"","+","*","'","#","?","¿","!","¡","/", "[","]","(",")","[",":",",",".",";","%");
      $a=['á','é','í','ó','ú','ñ'];
      $b=['a','e','i','o','u','n'];
      $url=str_replace(" ", "-", request('nombre'));
      $url=str_replace($char_raros, "", $url);
      $url=str_replace($a, $b, $url);
      $url=strtolower($url);
      $grupo->update([
        'nombre'=> request('nombre'),
        'url'=> $url,
        'descripcion' => request('descripcion'),
        'logo' => request('logo'),
        'correo' => request('correo'),
        'web' => request('web'),
        'facebook' => request('facebook'),
        'twitter' => request('twitter'),
        'youtube' => request('youtube'),
        'discord' => request('discord')
      ]);
      $grupo -> fichas() -> sync(request('fichas'));
      return redirect()->route('grupos.show', $grupo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grupo $grupo)
    {
        //
    }
}
