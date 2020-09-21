<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    /*
    * Obtiene la noticia a la que pertenece el comentario
    */
    public function noticias(){
      return $this->belongsTo('App\Noticia');
    }
    public function users(){
      return $this->belongsTo('App\User');
    }

    protected $fillable = [
        'contenido', 'url'
    ];
}
