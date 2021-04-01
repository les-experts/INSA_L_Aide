<?php

namespace App\Controllers;

use App\Models\GitFileModel;
use App\Models\GitFile;

class Search extends BaseController
{
    public function search_bar(){
        return view("Search/SearchBar.php");
    }

    public function index(){

        $model = new GitFileModel();

        $post = $this->request->getPost();
        if(!isset($post['search_pattern']) || empty($post['search_pattern'])){
			       throw new Exception("Il n'y a aucun paramètres dans Search/index");
        }
        $paths = $this->search_by_title("/".$post['search_pattern']."/i");
        $files = $model->getFile($paths);

        $file_Table_controleur = new FileTable();
        echo $file_Table_controleur->view($files);
    }

    public function search_by_title($pattern){
        helper('filesystem');
        $git_repository = directory_map("../writable/RepositoryGit");

        function recur($object,$pattern,$prefix = ""){
            $match = array();
            if(is_array($object)){
                foreach ($object as $key => $value) {
                    if(preg_match($pattern,$key)){
                        $pathFile = implode("/",explode("\\",$prefix.$key));
                        $match[] = $pathFile;
                    }
                    $res = recur($value,$pattern,$prefix.$key);
                    $match = array_merge($match,$res);
                }
            }else{
                if(preg_match($pattern,$object)){
                    $pathFile = implode("/",explode("\\",$prefix.$object));
                    $match[] = $pathFile;
                }
            }
            return $match;
        }

        return recur($git_repository,$pattern);
    }
}
