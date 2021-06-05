<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{

    public function registro(Request $request){

    $user = new User;
    $user::crearUsuario($request);

    return response()->json([
        'msg' => 'El usuario ha sido creado correctamente'
    ]);

    }

    public function login(Request $data){


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
