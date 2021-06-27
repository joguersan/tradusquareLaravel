<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = ['id', 'nombre', 'imagen', 'ficha', 'info_adicional', 'sinopsis', 'equipo', 'estado', 'url', 'descarga'];
    public function getRouteKeyName()
    {
        return 'url';
    }
    /**
     * Obtiene las Plataformas
     */
    public function plataformas()
    {
        return $this->belongsToMany('App\Plataforma', 'ficha_plataforma')->withPivot('estado_id');
    }

    public function grupos()
    {
        return $this->belongsToMany('App\Grupo', 'ficha_grupo');
    }
    public function banderas()
    {
        return $this->belongsToMany('App\Bandera', 'bandera_ficha')->withPivot('usage');
    }

    /**
     * Obtiene las Noticias
     */
    public function noticias()
    {
        return $this->belongsToMany('App\Noticia', 'noticia_ficha')->orderBy('updated_at', 'desc');
    }
    public function porcentajes()
    {
        return $this->hasMany('App\FichaPorcentaje');
    }
    public function entradas_tablon()
    {
        return $this->hasMany('App\EntradaTablon');
    }
}
