<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
  public function getRouteKeyName()
  {
    return 'url';
  }
    /**
    * Obtiene las Plataformas
    */
    public function plataformas(){
      return $this->belongsToMany('App\Plataforma', 'ficha_plataforma')->withPivot('ficha_id', 'plataforma_id', 'estado');
    }

    /**
    * Obtiene las Noticias
    */
    public function noticias(){
      return $this->belongsToMany('App\Noticia', 'noticia_ficha')->withPivot('ficha_id', 'noticia_id');
    }
    protected $fillable = ['nombre', 'ficha', 'sinopsis', 'equipo', 'descarga', 'imagen', 'url', 'estado'];

}
