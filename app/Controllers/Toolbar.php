<?php

namespace App\Controllers;

class Toolbar extends BaseController
{
	public function getView()
	{
		return view('Toolbar/toolbar.php');
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
