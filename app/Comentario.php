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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'contenido', 'url'
    ];
}
