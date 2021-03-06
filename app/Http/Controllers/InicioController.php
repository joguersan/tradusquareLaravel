<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\EntradaTablon;
use App\Ficha;
use App\Noticia;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::where('estado', '=', 1)->orderBy('updated_at', 'desc')->take(6)->get();
        $comentarios = Comentario::orderBy('updated_at', 'desc')->take(5)->get();
        $fichas = Ficha::orderBy('updated_at', 'desc')->take(5)->get();
        $tablon = EntradaTablon::orderBy('updated_at', 'desc')->take(3)->get();
        return view('inicio.index', ['noticias' => $noticias, 'comentarios' => $comentarios, 'fichas' => $fichas, 'tablon' => $tablon]);
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
    public function store()
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int $comentario ID
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return $comentario;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comentario  $comentario
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comentario  $comentario
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comentario  $comentario
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
    }

    public function back()
    {
    }
}
