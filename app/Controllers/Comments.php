<?php

namespace App\Controllers;

class Comments extends BaseController
{

	/**
	 * PathToManage en POST car appellée par du Ajax
	 */
	public function addComment() {

		$newComment = $this->request.getPost('newComment');
		return $newComment;
	}

	/**
	 * PathToManage en paramètre de fonction car la fonction est appellé par du php
	 */
    public function getView($pathToManage)
	{
        $data["pathToManage"] = $pathToManage;
		return view('Comments/comments.php', $data);
	}

	/**
	 * PathToManage en POST car appellée par du Ajax
	 */
	public function getComments() {
        $pathToManage = $this->request->getPost('pathToManage');
		//faut chopper les coms ici
		$data["commentsArray"] = array("truc","bidule");
		return view('Comments/commentsContent.php', $data);
	}

	public function getCss(){
		return array(
			"static/_Materialize/css/materialize.min.css",
			"static/_Materialize/css/jquery-ui.css",
            "static/_Materialize/css/jquery-ui.structure.css",
            "static/_Materialize/css/jquery-ui.theme.css"
		);
	}

	public function getJS(){
		return array(
			"static/Comments/js/comments.js",
			"static/_Materialize/js/jquery-3.6.0.js",
      		"static/_Materialize/js/materialize.min.js",
			"static/_Materialize/js/jquery-ui.js"
		);
	}

}
