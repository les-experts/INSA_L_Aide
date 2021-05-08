<?php

namespace App\Controllers;

/*
 * Barre de navigation entre les fichiers
 */
class FileController extends BaseController
{
	public function index($path){
		$path = implode("/",func_get_args());
        view_file($path);
    }

    public function view_file($path){
		$model = new GitFileModel();
		$file = $model->getFile($path);
		return $this->view($files,$urlMethode);
	}

    public function view($files){
		$data["files"] = $files;
		$data["urlMethode"] = $urlMethode;
		return view("FileTable/fileTable",$data);
	}
}
