<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    /*
    * Obtiene la noticia a la que pertenece el comentario
    */
    public function noticias(){
      return $this->belongsTo('App\Noticia', 'noticia_id');
    }
    public function users(){
      return $this->belongsTo('App\User', 'user_id');
    }

    protected $fillable = [
        'id', 'user_id','contenido', 'respuesta', 'noticia_id'
    ];
}
