<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use View;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $usuarios = User::all();
      return View::make('usuarios.index')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request )
    {
        $user = new User;
        $user->nombre = $request->nombre;
        $user->email = $request->email;
        // TO DO: encoding password
        $user->contraseña = $request->contraseña;
        $user->save();
        return response()->json([
            'msg' => 'El usuario ha sido creado correctamente'
        ]);
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {

      return view('usuarios.show', [
          'usuario' => $usuario
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request )
    {
        $user = User::find($request->id);
        if ( $request->nombre ) $user->nombre = $request->nombre;
        if ( $request->email ) $user->email = $request->email;
        // TO DO: encoding password
        if ( $request->contraseña ) $user->contraseña = $request->contraseña;
        $user->save();
        return response()->json([
            'msg' => 'El usuario ha sido actualizado correctamente'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
