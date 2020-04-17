<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
  /**
  * Obtiene las Fichas
  */
  public function fichas(){
    return $this->belongsToMany('App\Ficha', 'ficha_grupo')->withPivot('ficha_id', 'grupo_id');
  }

  /**
  * Obtiene las Usuarios
  */
  public function usuarios(){
    return $this->belongsToMany('App\User', 'user_grupo')->withPivot('user_id', 'grupo_id');
  }
}
