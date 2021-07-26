<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function registro(Request $request){

    $user = new User;
    $user::crearUsuario($request);
        if($user){
            if(Auth::attempt(['email' => $request->email, 'password' => $request-> password])){
                return redirect('/')->withSuccess(
                    response()->json([
                    'msg' => 'Login correcto'
                ]));
            }
    }

    return redirect('/registro')->
        response()->json([
        'msg' => 'Error al crear usuario, usa un email o nombre de usario diferente'
        ]);


    }

    public function login(Request $request){

        $request = $request;

        if (!Auth::attempt(['email' => $request->email, 'password' => $request-> password])) {
            return redirect('iniciar-sesion');
        }

        return redirect('/')->withSuccess(
            response()->json([
            'msg' => 'Login correcto'
            ]));
    }

    public function updateUser(Request $data){

        $user = User::find($data->id);
        //TODO --> meter lógica y probar desde vista (que falta por hacer)
        if($user){
                $user::updateUser($data);
                return response()->json([
                    'msg' => 'El usuario ha sido actualizado correctamente'
                ]);
        }

        return response()->json([
            'msg' => 'Error la actualizar el usuario'
        ]);

    }

}
