<?php

namespace App\Controllers;

class Toolbar extends BaseController
{
	private String $pathToManage;
	
	function __construct(String $pathToManage = "/") {
		$this->pathToManage = $pathToManage;
	}

	public function getView()
	{
		$data["pathToManage"] = $this->pathToManage;
		return view('Toolbar/toolbar.php', $data);
	}

	public function getCss(){
		return array(
			"static/Toolbar/css/toolbar.css",
			"static/_Materialize/css/materialize.min.css"
		);
	}

	public function getJS(){
		return array(
			"static/Toolbar/js/toolbar.js",
			"static/_Materialize/js/jquery-3.6.0.js",
      "static/_Materialize/js/materialize.min.js"
		);
	}

}
