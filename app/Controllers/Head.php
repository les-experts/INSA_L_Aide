<?php

namespace App\Controllers;

use App\Models\GitFileModel;
class Head extends BaseController
{
    public function getCss(){
		helper('html');
        $link = array(
			['href'  => base_url("static/css/style.css"),'rel'   => 'stylesheet','type'  => 'text/css'],
			['href'  => 'https://fonts.googleapis.com/icon?family=Material+Icons'],
			['href'  => 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'],
		);

        $css = "";
        foreach ($link as $value) 
        {
            $css.=link_tag($value);

        }
        return $css;
    }
}