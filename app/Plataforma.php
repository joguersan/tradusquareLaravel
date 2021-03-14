<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plataforma extends Model
{
  /**
  * Obtiene las Fichas
  */
  public function getRouteKeyName()
  {
    return 'url';
  }
  public function fichas(){
    return $this->belongsToMany('App\Ficha', 'ficha_plataforma')->withPivot('ficha_id', 'plataforma_id');
  }

  public function estados(){
    return $this->belongsTo('App\Estado');
  }

}
