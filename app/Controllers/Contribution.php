<?php

namespace App\Controllers;

class Contribution extends BaseController
{
	public function getView()
	{
		$path = implode("/",func_get_args());

        $fileTable_object = new FileTable();
        $fileTable_css = $fileTable_object->getCss();
		$fileTable_html = $fileTable_object->view_dir($path,"Home/home");

		$breadcrumb_object = new Breadcrumb();
		$breadcrumb_css = $breadcrumb_object->getCss();
		$breadcrumb_html = $breadcrumb_object->getView($path);

		$css = array(
			"static/Contribution/css/contribution.css",
			"static/_Materialize/css/icon.css",
			"static/_Materialize/css/materialize.min.css");

        $data["cssLink"] = array_merge($fileTable_css, $breadcrumb_css, $css);
        $data["fileTable"] = $fileTable_html;
		$data["breadcrumb"] = $breadcrumb_html;

        return view("Contribution/contribution",$data);

	}

	public function getCss(){
		return array();
	}

	public function getJS(){
		return array();
	}
}
