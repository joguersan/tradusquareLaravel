<?php

namespace App\Http\Controllers;

use App\EntradaTablon;
use App\Ficha;
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

        return view('tablon.index', ['entradas' => $entradas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fichas = Ficha::all();
        return view('tablon.create', [
            'fichas' => $fichas,
        ]);
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
        request()->validate([
            'titulo' => 'required|min:10',
            'contenido' => 'required|min:10',
            'imagen' => 'required',
        ]);
        $tablon = new EntradaTablon();
        $tablon->create([
            'titulo' => request('titulo'),
            'contenido' => request('contenido'),
            'contacto' => request('contacto'),
            'imagen' => request('imagen'),
            'visible' => request('estado'),
            'ficha_id' => request('fichas'),
        ]);
        //$tablon -> fichas() -> sync(request('fichas'));
        return redirect()->route('tablon-de-misiones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $entradaTablon ID
     *
     * @return \Illuminate\Http\Response
     */
    public function show($entradaTablon)
    {
        return EntradaTablon::findOrFail($entradaTablon);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EntradaTablon  $entradaTablon
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entrada = EntradaTablon::findOrFail($id);
        $fichas = Ficha::all();
        return view('tablon.edit', [
            'entrada' => $entrada,
            'fichas' => $fichas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EntradaTablon  $entradaTablon
     *
     * @return \Illuminate\Http\Response
     */
    public function update($entradaTablon)
    {
        $entrada = EntradaTablon::findOrFail($entradaTablon);
        $entrada->update([
            'titulo' => request('titulo'),
            'imagen' => request('imagen'),
            'contenido' => request('contenido'),
            'contacto' => request('contacto'),
            'visible' => request('estado'),
            'ficha_id' => request('fichas'),
        ]);
        return redirect()->route('tablon-de-misiones.index');
    }

    public function delete($entradaTablon)
    {
        $entrada = EntradaTablon::find($entradaTablon);
        $entrada->update([
            'visible' => '0',
        ]);
        return redirect()->route('tablon-de-misiones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EntradaTablon  $entradaTablon
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntradaTablon $entradaTablon)
    {
        $entradaTablon->delete();
        return redirect()->route('tablon-de-misiones.index');
    }
}
