<?php

namespace App\Controllers;

class Presentation extends BaseController
{
	public function index()
	{
		$path = implode("/",func_get_args());

        $fileTable_object = new FileTable();
        $fileTable_css = $fileTable_object->getCss();
		$fileTable_html = $fileTable_object->view_dir($path,"Home/index");

		$breadcrumb_object = new Breadcrumb();
		$breadcrumb_css = $breadcrumb_object->getCss();
		$breadcrumb_html = $breadcrumb_object->getView($path);

		$css = array(
			"static/Presentation/presentation.css",
			"static/Materialize/css/icon.css",
			"static/Materialize/css/materialize.min.css");

        $data["cssLink"] = array_merge($fileTable_css, $breadcrumb_css, $css);
        $data["fileTable"] = $fileTable_html;
		$data["breadcrumb"] = $breadcrumb_html;

        return view("Presentation/index",$data);

	}
}
