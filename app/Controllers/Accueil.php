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

        $head_object = new Head();
        $head_object->addCss($filetable_css);
        $head_html = $head_object->view();
        
        $data["filetable"] = $filetable_html;
        $data["head"] = $head_html;

        echo view("Accueil/index",$data);

	}
}
