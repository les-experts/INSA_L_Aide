<?php

namespace App\Controllers;

class Accueil extends BaseController
{
	public function index()
	{  
		$path = implode("/",func_get_args());

        $filetable_object = new FileTable();
        $filetable_html = $filetable_object->view_dir($path,"Accueil/index");

        echo $this->displayFileTable($filetable_html);

	}

    public function displayFileTable($filetable_html){
        $filetable_object = new FileTable();
        $filetable_css = $filetable_object->getCss();

        $data["cssLink"] = $filetable_css;
        $data["filetable"] = $filetable_html;

        return view("Accueil/index",$data);
    }
}
