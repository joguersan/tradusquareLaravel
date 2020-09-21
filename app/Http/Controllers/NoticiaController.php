<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Noticia;
use App\Comentario;
use App\Ficha;
use App\User;
use Illuminate\Http\Request;
use View;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $noticias = DB::table('noticias')->where('estado', '=', 'Publicada')->orderBy('created_at', 'desc')->paginate(6);
      return view('noticias.index', ['noticias' => $noticias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		    $fichas = Ficha::all();
        /*if ( !isset ( \Auth::user()->id ) || !$this->hasPermission( \Auth::user()->id ) ) {
            return response()->json([
                    'msg' => 'No tiene permisos para editar esta noticia'
                ], 403
            );
        }*/
        return view('noticias.create', [
          'fichas' => $fichas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
          'titulo' => 'required|min:10',
          'contenido' => 'required|min:10',
          'imagen' => 'required',
        ]);
        $noticia = new Noticia;
        $char_raros=array("\"","+","*","'","#","?","¿","!","¡","/", "[","]","(",")","[",":",",",".",";","%");
        $a=['á','é','í','ó','ú','ñ'];
        $b=['a','e','i','o','u','n'];
        $url=str_replace(" ", "-", request('titulo'));
        $url=str_replace($a, $b, $url);
        $noticia->create([
          'titulo'=> request('titulo'),
          'url'=> $url,
          'contenido' => request('contenido'),
          'imagen' => request('imagen'),
          'estado' => request('estado')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $noticia ID
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
      $comentarios = $noticia->comentarios;
      return view('noticias.show', [
        'noticia' => $noticia,
        'comentarios' => $comentarios
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia)
    {
        /*if ( !$this->hasPermission( $request->id ) ) {
            return response()->json([
                    'msg' => 'No tiene permisos para editar esta noticia'
                ], 403
            );
        }*/
        $selected_categories = [];
        foreach($noticia->fichas as $ficha){
            array_push($selected_categories, $ficha->id);
        }
        $fichas = Ficha::all();
        return view('noticias.edit', [
          'noticia' => $noticia,
          'fichas' => $fichas,
          'selected_categories' => $selected_categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Noticia $noticia)
    {
      request()->validate([
        'titulo' => 'required|min:10',
        'contenido' => 'required|min:10',
        'imagen' => 'required',
      ]);
        $char_raros=array("\"","+","*", "'", "#", "?", "¿", "!", "¡", "\\", "/", "[","]","(",")","[",":",",",".",";","%");
        $a=['á','é','í','ó','ú','ñ'];
		    $b=['a','e','i','o','u','n'];
        $url=str_replace(" ", "-", request('titulo'));
        $url=str_replace($char_raros, "", $url);
        $url=str_replace($a, $b, $url);
        $noticia->update([
          'titulo'=> request('titulo'),
          'url'=> $url,
          'contenido' => request('contenido'),
          'imagen' => request('imagen'),
          'estado' => request('estado')
        ]);
        $noticia -> fichas() -> sync(request('fichas'));
        return redirect()->route('noticia.show', $noticia);
        /*if ( !isset ( \Auth::user()->$id ) || !$this->hasPermission( $request->id ) ) {
            return response()->json([
                    'msg' => 'No tiene permisos para editar esta noticia'
                ], 403
            );
        }
        try {
            $noticia = ( isset( $request->id ) ) ? Noticia::find( $request->id ) :  $noticia = new Noticia;
            if ( $request->titulo ) $noticia->titulo = $request->titulo;
            // TO DO: check url validity
            if ( $request->imagen ) $noticia->imagen = $request->imagen;
            if ( $request->contenido ) $noticia->contenido = $request->contenido;
            if ( $request->estado ) $noticia->estado = $request->estado;

            $noticia->save();
            return response()->json([
                    'msg' => 'Acción realizada correctamente'
                ], 200
            );
        } catch ( \Exception $e )  {
            return response()->json([
                    'msg' => 'Se ha producido un error'
                ], 400
            );
        }*/

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy( Noticia $noticia )
    {
        /*if ( !$this->hasPermission( $request->id ) ) {
            return response()->json([
                    'msg' => 'No tiene permisos para eliminar esta noticia'
                ], 403
            );
        }*/
        $noticia -> delete();
        return redirect()->route('noticias.index');
    }

    protected function hasPermission( int $id = null ) {
        $user = \Auth::user();
        // TO DO: check if user is in the translator team group of the game thats on the article
        return in_array( $user->rol, [ User::ROL_EDITOR, User::ROL_ADMIN ] );
    }
}
