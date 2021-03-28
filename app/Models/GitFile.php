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

    public function get_repositoty_path(){
        return GitFileModel::$get_repository_path;
    }

    public function getName(){
        return $this->name;
    }

    public function getPath_in_git(){
        return $this->path_in_git;
    }

    /**
     * Function qui renvoie le lien vers le fichier à partir de la racine du projet.
     * 
     * @return string
     */
    public function get_full_path(){
        return $this->get_repositoty_path()."/".$this->get_path();
    }

    /**
     * Function qui renvoie le lien vers le fichier à partir de la racine du dossier RepositoryGit.
     * 
     * @return string
     */
    public function get_path(){
        return $this->getPath_in_git()."/".$this->getName();
    }

    public function is_dir(){
        return $this->get_type() == "directory";
    }
    /**
     * Fonction qui renvoie le type de fichier. Exemple: Image, Directory, Unknown...
     * 
     * @return string
     */
    public function get_type(){
        if(is_dir($this->get_full_path())){
            return "directory";
        }
        else{
            $tab = explode(".", $this->getName());
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