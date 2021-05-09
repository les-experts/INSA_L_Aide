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

		$toolbar_object = new Toolbar($file->get_path_from_git_with_name());
		$toolbar_css = $toolbar_object->getCss();
		$toolbar_js = $toolbar_object->getJS();
		$toolbar_html = $toolbar_object->getView();

		$commentaires_object = new Comments();
		$commentaires_css = $commentaires_object->getCss();
		$commentaires_js = $commentaires_object->getJS();
		$commentaires_html = $commentaires_object->getView($file->get_path_from_git_with_name());

		$data["breadcrumb"] = $breadcrumb_html;
		$data["cssLink"] = array_merge($breadcrumb_css, $this->getCss(), $toolbar_css, $commentaires_css);
		$data["jsLink"] = array_merge($breadcrumb_js, $this->getJS(), $toolbar_js, $commentaires_js);
		
		$data["file"] = $file;
		$data["toolbar"] = $toolbar_html;
		$data["commentaires"] = $commentaires_html;
		
		
		return view("FileController/index",$data);
	}

	protected function getCss(){
		return array("static/FileController/css/fileController.css");
	}

	protected function getJS(){
		return array();
	}

}
