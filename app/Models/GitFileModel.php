<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\GitFile;

class GitFileModel extends Model
{
    public static $get_repository_path = "../app/RepositoryGit/";
    
    public function getFiles($path = false)
    {
		$files = scandir(self::$get_repository_path.$path);
        $gitFileList = array();
        foreach ($files as $key => $value) {
            $gitFileList[] = new GitFile($value,$path);
        }
        return $gitFileList;
    }

}