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
	public function view_dir($path){

		$model = new GitFileModel();
		$files = $model->getFiles($path);

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
		return $this->view($files);
	}

	/**
	 * Retourne le HTML d'une FileTable qui représente le/les fichier/s $files
	 * 
	 * @param GitFile les fichiers à représenter
	 * @return html le code html de la FileTable
	 */
	public function view($files){
		$data["files"] = $files;
		return view("FileTable/filetable",$data);
	}

	public function getCss(){
		$link = array(
		"static/css/FileTable.css",
		"static/css/SearchBar.css",
		"static/css/icon.css",
		"static/css/materialize.min.css",);
		return $link;
	}
}
