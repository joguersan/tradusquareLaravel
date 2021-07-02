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
            /*hacer algo al registrarse.-

            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
            if (Auth::attempt($credentials)) {
                return redirect('/')->withSuccess(
                    response()->json([
                    'msg' => 'El usuario ha sido creado correctamente'
                ])
            );
        }*/
    }


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
