<?php

namespace App\Controllers;

use App\Models\GitFileModel;
class Head
{
    public $css = array();
    private $js = array();
    private $title = "INSAL'aide";


    public static function parseCSS($cssLinks = FALSE){
        $defaultCssLink = array("static/css/materialize.min.css");
        if(!is_array($cssLinks)) $cssLinks = array($cssLinks);
        $cssLinks = array_merge($cssLinks,$defaultCssLink);
        $cssLinks = array_unique($cssLinks);
        return $cssLinks;
    }

    public function addCss($cssLink = FALSE){
        if($cssLink === FALSE)return;

        if(!is_array($cssLink)){
            $cssLink = array($cssLink);
        }
        foreach ($cssLink as $key => $value) {
            $this->css[] = $value;
        }
        $this->css = array_unique($this->css);
    }
    

    public function addJs($JsLink = FALSE){
        if($JsLink === FALSE)return;

        if(!is_array($JsLink)){
            $JsLink = array($JsLink);
        }
        foreach ($JsLink as $key => $value) {
            $this->js[] = $value;
        }
        $this->js = array_unique($this->js);
    }

    public function setTitle($title = FALSE){
        if($title === FALSE)return;
        $this->title = $title;
    }

    public function view(){
        helper('html');
        $data["cssLink"] = $this->css;
        $data["jsLink"] = $this->js;
        $data["title"] = $this->title;
        $html = view("Head/index",$data);
        return $html;
    }
}