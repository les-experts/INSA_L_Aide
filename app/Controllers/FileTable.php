<?php

namespace App\Controllers;

use App\Models\GitFileModel;
class FileTable extends BaseController
{
	public function index()
	{
		helper('url'); 

		if(func_num_args() <=0){
			throw new Exception("Il n'y a aucun paramètres");
		} 
		$path = implode("/",func_get_args());
		echo $this->view_dir($path);
	}

	public function view_dir($path){
		if(empty($path)){
			throw new Exception("Il n'y a aucun paramètres");
		}

		$model = new GitFileModel();
		$files = $model->getFiles($path);
		return $this->view($files);
	}

	public function view($files){
		$data["files"] = $files;
		return view("FileTable/index",$data);
	}
}
