<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\GitFile;

class GitFileModel extends Model
{
    public static $get_repository_path = "static/RepositoryGit/"; // path a partir de public

    public function getFiles($path = false)
    {
		$files = scandir(self::$get_repository_path.$path);
        $gitFileList = array();
        foreach ($files as $key => $value) {
            $gitFileList[] = new GitFile($value,$path);
        }
        return $gitFileList;
    }

    public function getFile($paths = FALSE){
        if($paths === FALSE){
            throw new Exception("Il n'y a aucun paramètres");
        }
        if(!is_array($paths)){
            $paths = array($paths);
        }

        $gitFileList = array();
        foreach ($paths as $key => $value) {
            $node = explode("/",$value);
            do {
                $name = array_pop($node);
            } while($name == "");
            $path = implode("/",$node);
            $gitFileList[] = new GitFile($name,$path);
        }
        return $gitFileList;
    }

}
