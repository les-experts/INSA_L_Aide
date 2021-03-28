<?php

namespace App\Controllers;

use App\Models\GitFileModel;
class FileTable extends BaseController
{
	public function index()
	{
		helper('url'); 

		if(func_num_args() <=0){
			echo view("errors/html/error_404.php");
			exit(0);
		} 
		$path = implode("/",func_get_args());

		$model = new GitFileModel();

		$files = $model->getFiles($path);

		$data["files"] = $files;
		echo view("FileTable/index",$data);
	}
}
