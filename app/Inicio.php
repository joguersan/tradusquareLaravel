<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'id', 'users_id','mensaje', 'respuesta', 'noticia_id',
    ];
    /*
    * Obtiene la noticia a la que pertenece el comentario
    */
    public function noticias()
    {
        return $this->belongsTo('App\Noticia');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
