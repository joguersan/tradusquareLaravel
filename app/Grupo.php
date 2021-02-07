<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
  public function getRouteKeyName()
  {
    return 'url';
  }
  public function fichas(){
    return $this->belongsToMany('App\Ficha', 'ficha_grupo')->withPivot('ficha_id', 'grupo_id');
  }

  /**
  * Obtiene las Usuarios
  */
  public function usuarios(){
    return $this->belongsToMany('App\User');
  }

  public function noticias(){
      return $this->hasManyThrough('App\Noticia','App\User');
  }

  protected $fillable = ['id', 'nombre', 'logo', 'descripcion', 'web', 'correo', 'twitter', 'facebook', 'youtube', 'discord', 'url'];
}
