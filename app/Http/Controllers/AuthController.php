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

        $validated = $request->validate([

            'nombre' => 'required|min:3|unique:users,nombre',
            'email' => 'required|string|email|unique:users,email',
            'password'  => 'required|string|min:8'

        ]);


    $user = new User;
    $user::crearUsuario($request);

        if(!$user){

            return redirect('/registro'); //msg error al crear el usuario


        }

        return redirect('/'); //usuario creado correctamente, revisa el correo.



    //mandar email de confirmación
    /*
            if(Auth::attempt(['email' => $request->email, 'password' => $request-> password])){
                return redirect('/')->withSuccess(
                    response()->json([
                    'msg' => 'Login correcto'
                ]));
            } */



    }

    public function login(Request $request){

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

    public function logout(Request $request){

        Auth::logout();

        return redirect('/');
    }

}
