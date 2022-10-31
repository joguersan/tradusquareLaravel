<?php

namespace App\Http\Controllers;

class HelperController extends Controller
{
    function setUrl($nombre)
    {
        $charRaros = ['"','+','*',"'",'#','?','¿','!','¡','/', '[',']','(',')','[',':',',','.',';','%'];
        $tildes = ['á','é','í','ó','ú','ñ'];
        $sinTildes = ['a','e','i','o','u','n'];
        $url = str_replace(' ', '-', $nombre);
        $url = str_replace($charRaros, '', $url);
        $url = str_replace($tildes, $sinTildes, $url);
        return strtolower($url);
    }
}