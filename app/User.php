<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'privilegios',
        'contrasenya',
        'imagen',
        'rol'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'contrasenya', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function comentarios(){
      return $this->hasMany('App\Comentario');
    }

    public function news(){
      return $this->hasMany('App\Noticia', 'autor', 'nick')->orderBy('updated_at', 'desc')->limit(10);
    }
    public function grupos(){
      return $this->belongsToMany('App\Grupo', 'user_grupo')->withPivot('user_id', 'grupo_id');
    }


    public static function crearUsuario($data){

        if(User::find($data->email)){


            return "usa otro email";

        }

        if(User::find($data->nombre)){

            return "usa otro nombre";

        }

            $user = new User;

            $user->nombre = $data->nombre;
            $user->email = $data->email;
            $data->password = self::encryptPass($data->password);
            $user->password = $data->password;
            $user->imagen = "S";
            $user->rol = 0;
            $user->save();


    }


    public static function updateUserData($data){

        $user = new User();

//TODO, meter lógica.
        if ( $data->nombre ) $user->nombre = $data->nombre;
        if ( $data->email ) $user->email = $data->email;
        // TO DO: comprobar password vieja. Hash::check($data->password, $user->password)
        if ( $data->password ) $user->password = self::encryptPass($data->password);
        $user->save();

    }

    public static function encryptPass($pass){
        return $pass = Hash::make($pass);
    }



}
