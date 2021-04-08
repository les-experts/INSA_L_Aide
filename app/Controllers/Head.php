<?php

namespace App\Controllers;

use App\Models\GitFileModel;
class Head
{
    public static function parseCSS($cssLinks = FALSE){
        $defaultCssLink = array("static/css/materialize.min.css");
        if(!is_array($cssLinks)) $cssLinks = array($cssLinks);
        $cssLinks = array_merge($cssLinks,$defaultCssLink);
        $cssLinks = array_unique($cssLinks);
        return $cssLinks;
    }
}