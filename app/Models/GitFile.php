<?php
namespace App\Models;

use CodeIgniter\Model;
use App\Models\GitFileModel;

class GitFile
{
    private $name;
    private $path_in_git;


    public function __construct($name,$path){
        $this->name = $name;
        $this->path_in_git = $path;
    }

    private function get_repositoty_path(){
        return GitFileModel::$get_repository_path;
    }

    /**
     * Function qui renvoie le lien vers le fichier à partir de la racine du projet.
     * 
     * @return string
     */
    public function get_full_path(){
        return get_repositoty_path().get_path();
    }

    /**
     * Function qui renvoie le lien vers le fichier à partir de la racine du dossier RepositoryGit.
     * 
     * @return string
     */
    public function get_path(){
        return $path_in_git.$name;
    }

    /**
     * Fonction qui renvoie le type de fichier. Exemple: Image, Directory, Unknown...
     * 
     * @return string
     */
    public function get_type(){
        if(is_dir(get_full_path())){
            return "directory";
        }
        else{
            $tab = explode(".", $this->$name);
            if(count($tab) <=1) return 'unknown';

            switch (end($tab)) {
                case 'png':
                    return 'image';
                    break;
                
                case 'jpg':
                    return 'image';
                    break;
                
                case 'jpeg':
                    return 'image';
                    break;
                
                default:
                    return 'unknown';
                    break;
            }
        }
    }
}