<?php
namespace App\Models;

use CodeIgniter\Model;
use App\Models\GitFileModel;

/**
 * GitFile est un objet qui représente un ficher contenue dans le RepositoryGit
 * 
 */
class GitFile
{
    private $name;
    private $path_in_git;


    /**
     * Contructeur de GitFile
     * 
     * @param string $name
     * @param string $path
     * @return GitFile
     */
    public function __construct($name,$path){
        $this->name = $name;
        $this->path_in_git = $path;
    }

    public function get_repositoty_path(){
        return GitFileModel::$get_repository_path;
    }

    public function get_name(){
        return $this->name;
    }

    public function get_path_from_git(){
        return $this->path_in_git;
    }

    /**
     * Function qui renvoie le lien vers le fichier à partir de la racine du projet.
     * 
     * @return string
     */
    public function get_full_path(){
        return $this->get_repositoty_path()."/".$this->get_path_from_git_with_name();
    }

    /**
     * Function qui renvoie le lien vers le fichier à partir de la racine du dossier RepositoryGit.
     * 
     * @return string
     */
    public function get_path_from_git_with_name(){
        return $this->get_path_from_git ()."/".$this->get_name();
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
            $tab = explode(".", $this->get_name());
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