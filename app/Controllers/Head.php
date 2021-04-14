<?php

namespace App\Controllers;

use App\Models\GitFileModel;
class Head
{
    /* faire une fonction récursive ? qu'on puisse envoyer des string,
    tableaux de strings, ou tableaux contenant des tableaux de string etc... */
    public static function parseCSS($cssLinks = FALSE){

        $defaultCssLink = array("static/_Materialize/css/materialize.min.css");
        if(!is_array($cssLinks)) $cssLinks = array($cssLinks);
        $cssLinks = array_merge($cssLinks,$defaultCssLink);
        $cssLinks = array_unique($cssLinks);
        return $cssLinks;
    }

    public static function parseJS($jsLinks = FALSE){
      $defaultJsLink = array("static/_Materialize/js/jquery-3.6.0.js", "static/_Materialize/js/materialize.min.js");
      if(!is_array($jsLinks)) $jsLinks = array($jsLinks);
      $jsLinks = array_merge($defaultJsLink, $jsLinks);
      $jsLinks = array_unique($jsLinks);
      return $jsLinks;
    }
}
