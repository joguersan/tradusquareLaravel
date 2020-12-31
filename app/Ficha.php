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

    public function grupos(){
      return $this->belongsToMany('App\Grupo', 'ficha_grupo')->withPivot('ficha_id', 'grupo_id');
    }

    /**
    * Obtiene las Noticias
    */
    public function noticias(){
      return $this->belongsToMany('App\Noticia', 'noticia_ficha')->withPivot('ficha_id', 'noticia_id');
    }
    protected $fillable = ['id', 'nombre', 'imagen', 'ficha', 'info_adicional', 'sinopsis', 'equipo', 'tag', 'url', 'descarga', 'porcentaje_traduccion', 'porcentaje_correccion', 'porcentaje_edicion', 'porcentaje_betatesting', 'estado', 'plataforma'];

}
