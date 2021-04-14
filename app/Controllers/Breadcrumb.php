<?php

namespace App\Controllers;

/*
 * Barre de navigation entre les fichiers
 */
class Breadcrumb extends BaseController
{
	public function getView($pathToRepresent)
	{
    $data["pathToRepresent"] = $pathToRepresent;
		return view('FileTable/Breadcrumb.php', $data);
	}

	public function getCss(){
		return array(
		"static/Breadcrumb/css/breadcrumb.css",
		"static/_Materialize/css/materialize.min.css");
	}

	public function getJS(){
		return array();
	}

}
