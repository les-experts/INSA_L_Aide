<?php

namespace App\Controllers;

class Footer extends BaseController
{
	public function getView()
	{
		return view('Footer/footer.php');
	}

	public function getCss(){
		return array(
			"static/Footer/css/footer.css",
			"static/_Materialize/css/materialize.min.css"
		);
	}

	public function getJS(){
		return array();
	}

}
