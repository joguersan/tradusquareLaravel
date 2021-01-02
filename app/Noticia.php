<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
  public function getRouteKeyName()
  {
    return 'url';
  }
    /**
    * Obtiene las Fichas
    */
    public function fichas(){
      return $this->belongsToMany('App\Ficha', 'noticia_ficha')->withPivot('ficha_id', 'noticia_id');
    }

    /*
    * Obtiene los comentarios de la noticia
    */
    public function comentarios(){
      return $this->hasMany('App\Comentario');
    }

    public function autor(){
      return $this->BelongsTo('App\Noticia', 'autor');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo', 'contenido', 'estado', 'ficha_id', 'imagen', 'url'];
}
