<?php

namespace App\Controllers;
use App\Models\GitFileModel;

/*
 * Afficher un fichier
 */
class FileController extends BaseController
{
	public function index($path){
		$path = implode("/",func_get_args());
        echo $this->view_file($path);
    }

    public function view_file($path){
		$model = new GitFileModel();
		$files = $model->getFile($path);
		$file = $files[0];
		return $this->view($file);
	}

    public function view($file){
		$breadcrumb_object = new Breadcrumb();
		$breadcrumb_css = $breadcrumb_object->getCss();
		$breadcrumb_js = $breadcrumb_object->getJS();
		$breadcrumb_html = $breadcrumb_object->getView($file->get_path_from_git_with_name());

		$data["breadcrumb"] = $breadcrumb_html;
		$data["cssLink"] = array_merge($breadcrumb_css, $this->getCss());
		$data["jsLink"] = array_merge($breadcrumb_js, $this->getJS());
		$data["file"] = $file;
		return view("FileController/index",$data);
	}

	protected function getCss(){
		return array("static/FileController/css/fileController.css");
	}

	protected function getJS(){
		return array();
	}

}
