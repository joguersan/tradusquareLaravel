<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntradaTablon extends Model
{
  public function porcentajes(){
    return $this->belongsTo('App\Ficha');
  }
}
