<?php

namespace App\Http\Controllers;

use App\Plataforma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlataformaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $plataformas = Plataforma::all();
      return view('plataformas.index', ['plataformas' => $plataformas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int $plataforma ID
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Plataforma $plataforma)
    {
        $plata = DB::table('ficha_plataforma')
            ->join('fichas', 'ficha_plataforma.ficha_id', '=', 'fichas.id')
            ->join('plataformas', 'ficha_plataforma.plataforma_id', '=', 'plataformas.id')
            ->select('ficha_plataforma.id as relacionID', 'fichas.imagen as imgFicha', 'fichas.nombre as nombreFicha', 'fichas.url as urlFicha', 'ficha_plataforma.ficha_id as fichaID', 'plataformas.imagen as platImagen')
            ->where('ficha_plataforma.plataforma_id', '=', $plataforma->id)
            ->get();
        $plataformas = Plataforma::all();
        return view('plataformas.show', [
            'plataforma' => $plataforma,
            'plataformas' => $plataformas,
            'plata' => $plata,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plataforma  $plataforma
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Plataforma $plataforma)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plataforma  $plataforma
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plataforma $plataforma)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plataforma  $plataforma
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plataforma $plataforma)
    {
      $plataforma->delete();
      return redirect()->route('plataformas.index');
    }
}
