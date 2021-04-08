<?php

namespace App\Controllers;

class Accueil extends BaseController
{
	public function index()
	{  
		$path = implode("/",func_get_args());

        $filetable_object = new FileTable();
        $filetable_html = $filetable_object->view_dir($path);
        $filetable_css = $filetable_object->getCss();

        $data["cssLink"] = Head::parseCSS($filetable_css);
        $data["filetable"] = $filetable_html;

        echo view("Accueil/index",$data);

	}
}
