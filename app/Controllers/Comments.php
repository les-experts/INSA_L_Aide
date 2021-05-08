<?php

namespace App\Controllers;

class Comments extends BaseController
{
	/**
	 * PathToManage en POST car appellée par du Ajax
	 */
	public function addComment() {

		$newComment = $this->request->getPost('newComment');

		if (empty($newComment)) {
			$data['success'] = false;
			return json_encode($data);
		}

		$filePath = $this->request->getPost('pathToManage');
		$pseudo = $this->request->getPost('pseudo');

		if (empty($pseudo)) {
			$pseudo = "Guest";
		}

		$data = [
			"COM_content" => $newComment,
			"COM_date" => date(DATE_RFC3339),
			"COM_filePath" => $filePath,
			"COM_pseudo" => $pseudo
		];
		
		$db = db_connect();
		$db->table('Comment')->insert($data);

		$data['success'] = $db->affectedRows() > 0;

		return json_encode($data);
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
	 * PathToManage en GET car appellée par du Ajax
	 */
	public function getComments() {
        

		$pathToManage = $this->request->getGet('pathToManage');
		
		
		$db = db_connect();
		$sql = "select * from Comment where COM_filePath = ? order by COM_date desc";
		
		$query = $db->query($sql, [$pathToManage]);

		
		$results = $query->getResult();

		$data['comments'] = $results;
		
		return view('Comments/commentsContent.php', $data);
	}

	public function getCss(){
		return array(
			"static/Comments/css/comments.css",
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
