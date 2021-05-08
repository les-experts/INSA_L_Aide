<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$path = implode("/", func_get_args());

		$fileTable_object = new FileTable();
		$fileTable_css = $fileTable_object->getCss();
		$fileTable_js = $fileTable_object->getJS();
		$fileTable_html = $fileTable_object->view_dir($path, "Home/index");

		$breadcrumb_object = new Breadcrumb();
		$breadcrumb_css = $breadcrumb_object->getCss();
		$breadcrumb_js = $breadcrumb_object->getJS();
		$breadcrumb_html = $breadcrumb_object->getView($path);

		$toolbar_object = new Toolbar($path);
		$toolbar_css = $toolbar_object->getCss();
		$toolbar_js = $toolbar_object->getJS();
		$toolbar_html = $toolbar_object->getView($path);

		$data["cssLink"] = array_merge($fileTable_css, $breadcrumb_css, $toolbar_css);
		$data["jsLink"] = array_merge($fileTable_js, $breadcrumb_js, $toolbar_js);

		$data["fileTable"] = $fileTable_html;
		$data["breadcrumb"] = $breadcrumb_html;
		$data["toolbar"] = $toolbar_html;

		return view("Home/index", $data);
	}

	public function getCss()
	{
		return array();
	}

	public function getJS()
	{
		return array();
	}
}
