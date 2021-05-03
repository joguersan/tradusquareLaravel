<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntradaTablon extends Model
{
  public $incrementing = true;
  public $timestamps = true;
  public function fichas(){
    return $this->belongsTo('App\Ficha', 'ficha_id');
  }
  protected $fillable = ['id', 'titulo', 'imagen', 'contenido', 'contacto', 'visible', 'ficha_id'];
}
