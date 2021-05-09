<?php

namespace App\Controllers;

use App\Models\GitFileModel;
use App\Models\GitFile;

class Search extends BaseController
{
    /**
     * Affiche une bar de recherche qui recherche dans le dossier "RepositoryGit les éléments qui ont pour titre un pattern donnée.
     * Retourne le HTML correspondant à la bar de recherche.
     *
     * @return html;
     *
     */
    public function getView(){
        return view("Search/SearchBar.php");
    }


    /**
     * Affiche une FileTable avec les fichiers qui ont pour titre un pattern indiqué dans $_POST['search_pattern']
     *
     * @param string $_POST['search_pattern']
     * @return void
     *
     */
    public function getViewResults(){

        $model = new GitFileModel();

        $post = $this->request->getPost();
        if(!isset($post['search_pattern']) || empty($post['search_pattern'])){
			return "Faudrait rediriger vers la page d'accueil mais jsp comment faire";
        }
        
        $paths = $this->search_by_title("/".$post['search_pattern']."/i");
        //$paths = $this->search_by_content("/".$post['search_pattern']."/i");
        $files = $model->getFile($paths);

        $fileTable_object = new FileTable();
        $fileTable_html = $fileTable_object->getView($files,"Home/getView");
        $fileTable_css = $fileTable_object->getCss();

        //$fileTable = (new Home())->getViewByFileTable($file_table);

        $data["fileTable"] = $fileTable_html;
		$data["cssLink"] = $fileTable_css;

		return view("Home/home.php", $data);
    }

    /**
     * Cherche dans le RepositoryGit les fichiers qui ont pour name $pattern
     * Retourne un tableau de fichiers GitFile
     *
     * @param string $pattern
     * @return array
     */
    public function search_by_title($pattern){
        helper('filesystem');
        $git_repository = directory_map(GitFileModel::$get_repository_path);

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

    public function getCss(){
      return array();
    }

    public function getJS(){
      return array();
    }
}
