<?php

namespace App\Controllers;

class Header extends BaseController
{
	public function getView()
	{
		return view('Header/header.php');
	}

	public function getCss(){
		return array(
			"static/Header/css/header.css",
			"static/Materialize/css/materialize.min.css"
		);
	}

	public function getJS(){
		return array(
			"static/Header/js/header.js"
		);
	}

}
