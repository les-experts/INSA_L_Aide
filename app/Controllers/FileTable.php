<?php

namespace App\Controllers;

use App\Models\GitFileModel;
class FileTable extends BaseController
{
	/**
	 * Affiche une page standalone qui représente un FileTable
	 * @param string... les dossiers pour aller jusqu'au fichier à afficher, à partir de RepositoryGit
	 */
	public function index()
	{
		helper('url');
		$path = implode("/",func_get_args());
		echo $this->view_dir($path);
	}

	/**
	 * Retourne le HTML d'une FileTable qui représente le/les fichier/s $path
	 *
	 * @param string @path le chemin à partir de RepositoryGit vers un fichier
	 * @return html le code html de la FileTable
	 */
	public function view_dir($path,$urlMethode = "FileTable/getView"){

		$model = new GitFileModel();
		$files = $model->getDirectoryContent($path);

		if(!isset($path) || empty($path)){
			foreach ($files as $key => $value) {
				if($value->get_name() == ".."){
					unset($files[$key]);
				}
			}
		}

		foreach ($files as $key => $value) {
			if($value->get_name() == "."){
				unset($files[$key]);
			}
		}
		return $this->getView($files,$urlMethode);
	}

	/**
	 * Retourne le HTML d'une FileTable qui représente le/les fichier/s $files
	 *
	 * @param GitFile les fichiers à représenter
	 * @param string les fichiers à représenter
	 * @return html le code html de la FileTable
	 */
	public function getView($files,$urlMethode = "FileTable/getView"){
		$data["files"] = $files;
		$data["urlMethode"] = $urlMethode;
		return view("FileTable/fileTable.php",$data);
	}

	public function getCss(){
		return array(
			"static/FileTable/css/fileTable.css",
			"static/_Materialize/css/icon.css",
			"static/_Materialize/css/materialize.min.css"
		);
	}

	public function getJS(){
		return array();
	}

	public function downloadFile($path){
		if(func_num_args() < 1)return;
		if(func_num_args() > 1){
			$path = implode("/",func_get_args());
		}
		$path = GitFileModel::$get_repository_path.$path;
		if (file_exists($path)) {
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename="'.basename($path).'"');
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize($path));
			readfile($path);
			exit;
		}
	}
}
