<?php

namespace App\Http\Controllers;

use App\Estado;
use App\Ficha;
use App\Grupo;
use App\Plataforma;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fichas = Ficha::all()->where('estado', '=', 1);
        $plataformas = Plataforma::all();
        return view('fichas.index', [
            'fichas' => $fichas,
            'plataformas' => $plataformas,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plataformas = Plataforma::all();
        $estados = Estado::all();
        $grupos = Grupo::all();
        return view('fichas.create', [
            'plataformas' => $plataformas,
            'grupos' => $grupos,
            'estados' => $estados,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Ficha $ficha)
    {
        $url = setUrl(request('nombre'));

        $ficha->create([
            'nombre' => request('nombre'),
            'url' => $url,
            'ficha' => request('ficha'),
            'sinopsis' => request('sinopsis'),
            'info_adicional' => request('info_adicional'),
            'equipo' => request('equipo'),
            'imagen' => request('imagen'),
            'descarga' => request('links'),
            'estado' => request('estado'),
        ]);
        $plataformas = request('plataformas');
        for ($i = 0; $i < count($plataformas); $i++) {
            $ficha->plataformas()->sync([$plataformas[$i] => ['estado_id' => request('estados')[$i]]]);
        }
        $ficha->grupos()->sync(request('grupos'));
        return redirect()->route('fichas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $ficha ID
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Ficha $ficha)
    {
        return view('fichas.show', [
            'ficha' => $ficha,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ficha  $ficha
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Ficha $ficha)
    {
        $selected_categories = [];
        $selected_states = [];
        $selected_groups = [];
        foreach ($ficha->plataformas as $plataforma) {
            array_push($selected_categories, $plataforma->id);
            array_push($selected_states, $plataforma->pivot->estado_id);
        }
        foreach ($ficha->grupos as $grupo) {
            array_push($selected_groups, $grupo->id);
        }
        $plataformas = Plataforma::all();
        $grupos = Grupo::all();
        $estados = Estado::all();
        return view('fichas.edit', [
            'ficha' => $ficha,
            'plataformas' => $plataformas,
            'grupos' => $grupos,
            'estados' => $estados,
            'selected_categories' => $selected_categories,
            'selected_groups' => $selected_groups,
            'selected_states' => $selected_states,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ficha  $ficha
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Ficha $ficha)
    {
        $url = $this->setUrl(request('nombre'));

        $ficha->update([
            'nombre' => request('nombre'),
            'url' => $url,
            'ficha' => request('ficha'),
            'sinopsis' => request('sinopsis'),
            'equipo' => request('equipo'),
            'imagen' => request('imagen'),
            'descarga' => request('links'),
            'info_adicional' => request('info_adicional'),
        ]);
        $plataformas = request('plataformas');
        $estados = request('estados');
        if ($plataformas) {
            $data_to_sync = [];
            for ($i = 0; $i < count($plataformas); $i++) {
                $data_to_sync[$i]['plataforma_id'] = $plataformas[$i];
                $data_to_sync[$i]['estado_id'] = $estados[$i];
            }
            $ficha->plataformas()->sync($data_to_sync);
        }
        $ficha->grupos()->sync(request('grupos'));
        return redirect()->route('ficha.show', $ficha);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ficha  $ficha
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ficha $ficha)
    {
        $ficha->delete();
        return redirect()->route('fichas.index');
    }

    #########################
    # AUXILIAR FUNCTIONS
    #########################
    private function setUrl($nombre)
    {
        $char_raros = ['"','+','*',"'",'#','?','¿','!','¡','/', '[',']','(',')','[',':',',','.',';','%'];
        $a = ['á','é','í','ó','ú','ñ'];
        $b = ['a','e','i','o','u','n'];
        $url = str_replace(' ', '-', $nombre);
        $url = str_replace($char_raros, '', $url);
        $url = str_replace($a, $b, $url);
        return strtolower($url);
    
    }
}
