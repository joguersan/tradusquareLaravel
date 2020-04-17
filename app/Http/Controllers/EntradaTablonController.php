<?php

namespace App\Http\Controllers;

use App\EntradaTablon;
use Illuminate\Http\Request;

class EntradaTablonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $entradas = EntradaTablon::all();

      return $entradas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $entrada_Tablon ID
     * @return \Illuminate\Http\Response
     */
    public function show($entrada_Tablon)
    {
      $entrada = EntradaTablon::find($entrada_Tablon);

      return $entrada;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EntradaTablon  $entrada_Tablon
     * @return \Illuminate\Http\Response
     */
    public function edit(EntradaTablon $entrada_Tablon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EntradaTablon  $entrada_Tablon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntradaTablon $entrada_Tablon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EntradaTablon  $entrada_Tablon
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntradaTablon $entrada_Tablon)
    {
        //
    }
}
