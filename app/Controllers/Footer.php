<?php

namespace App\Controllers;

class Footer extends BaseController
{
	public function getView()
	{
		return view('Footer/footer.php');
	}

	public function getCss(){
		$link = array(
		"static/Footer/css/footer.css",
		"static/Materialize/css/materialize.min.css");
		return $link;
	}

}
