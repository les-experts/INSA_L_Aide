<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
				$path = implode("/",func_get_args());

        $fileTable_object = new FileTable();
        $fileTable_css = $fileTable_object->getCss();
				$fileTable_html = $fileTable_object->view_dir($path,"Home/index");

        $data["cssLink"] = $fileTable_css;
        $data["fileTable"] = $fileTable_html;

        return view("Home/index",$data);

	}

}
