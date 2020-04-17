<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Ficha;
use App\Plataforma;
use Illuminate\Http\Request;
use View;
class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $fichas = Ficha::all();
	    $plataformas =  Plataforma::all();
      return view('fichas.index',[
        'fichas' => $fichas,
        'plataformas' => $plataformas
      ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('fichas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Ficha $ficha)
    {
      $char_raros=array("\"","+","*","'","#","?","¿","!","¡","/", "[","]","(",")","[",":",",",".",";","%");
      $a=['á','é','í','ó','ú','ñ'];
      $b=['a','e','i','o','u','n'];
      $url=str_replace(" ", "-", request('nombre'));
      $url=str_replace($a, $b, $url);
      $ficha->create([
        'nombre'=> request('nombre'),
        'url'=> $url,
        'ficha' => request('ficha'),
        'sinopsis' => request('sinopsis'),
        'equipo' => request('equipo'),
        'imagen' => request('imagen'),
        'descarga' => request('links'),
        'estado' => request('estado')
      ]);
      return redirect()->route('fichas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $ficha ID
     * @return \Illuminate\Http\Response
     */
    public function show(Ficha $ficha)
    {

      return view('fichas.show', [
        'ficha' => $ficha
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function edit(Ficha $ficha)
    {
      $selected_categories = [];
      foreach($ficha->plataformas as $plataforma){
          array_push($selected_categories, $plataforma->id);
      }
      $plataformas = Plataforma::all();
      return view('fichas.edit', [
        'ficha' => $ficha,
        'plataformas' => $plataformas,
        'selected_categories' => $selected_categories
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function update(Ficha $ficha)
    {
      $char_raros=array("\"","+","*","'","#","?","¿","!","¡","/", "[","]","(",")","[",":",",",".",";","%");
      $a=['á','é','í','ó','ú','ñ'];
      $b=['a','e','i','o','u','n'];
      $url=str_replace(" ", "-", request('nombre'));
      $url=str_replace($char_raros, "", $url);
      $url=str_replace($a, $b, $url);
      $url=strtolower($url);
      $ficha->update([
        'nombre'=> request('nombre'),
        'url'=> $url,
        'ficha' => request('ficha'),
        'sinopsis' => request('sinopsis'),
        'equipo' => request('equipo'),
        'imagen' => request('imagen'),
        'descarga' => request('links'),
        'estado' => request('estado')
      ]);
      $ficha -> plataformas() -> sync(request('plataformas'));
      return redirect()->route('ficha.show', $ficha);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ficha $ficha)
    {
      $ficha -> delete();
      return redirect()->route('fichas.index');
    }

	public function listaPlataforma($id_plat)
    {
	  $id=$id_plat;
      $plata = DB::table('ficha_plataforma')
	  ->join('fichas', 'ficha_plataforma.ficha_id', '=', 'fichas.id')
	  ->join('plataformas', 'ficha_plataforma.plataforma_id', '=', 'plataformas.id')
	  ->select('ficha_plataforma.id as relacionID', 'fichas.imagen as imgFicha', 'fichas.nombre as nombreFicha', 'ficha_plataforma.ficha_id as fichaID', 'plataformas.imagen as platImagen')
	  ->where('ficha_plataforma.plataforma_id', '=', $id_plat)
	  ->get();
	  $fichas = Ficha::all();
	  $plataformas =  Plataforma::all();
	  return View::make('fichas.listaPlat')->with('plataformas', $plataformas)->with('plata', $plata)->with('fichas', $fichas)->with('id', $id);
    }
}
