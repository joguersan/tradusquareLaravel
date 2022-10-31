<?php

namespace App\Http\Controllers;

class HelperController extends Controller
{
    function setUrl($nombre)
    {
        $char_raros = ['"','+','*',"'",'#','?','¿','!','¡','/', '[',']','(',')','[',':',',','.',';','%'];
        $a = ['á','é','í','ó','ú','ñ'];
        $b = ['a','e','i','o','u','n'];
        $url = str_replace(' ', '-', $nombre);
        $url = str_replace($char_raros, '', $url);
        $url = str_replace($a, $b, $url);
        return strtolower($url);
    }
}