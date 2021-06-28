<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\Noticia;
use DateTime;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Comentario::all();
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
    public function store(Noticia $noticia)
    {
        $comentario = new Comentario();
        $comentario->create([
            'user_id' => '1',
            'contenido' => request('mensaje'),
            'noticia_id' => $noticia->id,
        ]);
        return redirect()->route('noticia.show', $noticia);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $comentario ID
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario)
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
    public function edit(Comentario $comentario)
    {
        return view('comentarios.edit', [
            'comentario' => $comentario,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comentario  $comentario
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Comentario $comentario)
    {
        $comentario->update([
            'contenido' => request('mensaje'),
        ]);
        return redirect()->route('noticia.show', $comentario->noticias);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comentario  $comentario
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentario $comentario)
    {
        $comentario->delete();
        return redirect()->route('noticia.show', $comentario->noticias);
    }

    public function back()
    {
        return redirect()->back()->with('error', 'Something went wrong.');
    }

    public function delete(Comentario $comentario)
    {
        $comentario->update([
            'deleted_at' => new DateTime(),
        ]);
        return redirect()->route('noticia.show', $comentario->noticias);
    }
}
