<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
				$path = implode("/",func_get_args());


				$header_object = new Header();
				$header_css = $header_object->getCss();
				$header_html = $header_object->getView();

        $fileTable_object = new FileTable();
        $fileTable_css = $fileTable_object->getCss();
				$fileTable_html = $fileTable_object->view_dir($path,"Home/index");

        $data["cssLink"] = array_merge($header_css, $fileTable_css);
        $data["fileTable"] = $fileTable_html;
				$data["header"] = $header_html;

        return view("Home/index",$data);

	}

}
