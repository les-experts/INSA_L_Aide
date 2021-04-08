<?php

namespace App\Controllers;

use App\Models\GitFileModel;
class Head
{
    /* faire une fonction récursive ? qu'on puisse envoyer des string,
    tableaux de strings, ou tableaux contenant des tableaux de string etc... */
    public static function parseCSS($cssLinks = FALSE){
        
        $defaultCssLink = array("static/Materialize/css/materialize.min.css");
        if(!is_array($cssLinks)) $cssLinks = array($cssLinks);
        $cssLinks = array_merge($cssLinks,$defaultCssLink);
        $cssLinks = array_unique($cssLinks);


        return $cssLinks;
    }
}
