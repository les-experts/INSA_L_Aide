<?php
/**
 *  Une vue qui affiche la table des fichiers
 * 
 * @param $urlMethode Est l'identifiant du controleur et de la méthode utilisée. Apres le base_url et avant les paramêtres. Par defaut: FileTable/index
 * @param $files Une liste d'objet GitFile. Ces GitFiles seront affiché dans le tableau.
 * 
 */

?>

<h1>FileTable</h1>

<ul class='collection'>

  <?php 
    foreach($files as $key => $value) {
        $slashOrNot = (empty($value->get_path_from_git())?'':'/'); // si c'est la racine il ne faut pas ajouer de "/" sinon on se retourve avec http://base_url/FileTable/index//directory
        $encode_path = str_replace(" ","%20",$value->get_path_from_git_with_name());
        
        echo '<li class="collection-item avatar clickable-file-or-folder">';

        if (!$value->is_dir()) {
            echo '<a target="_blank" href='.base_url('FileTable/downloadFile').$slashOrNot.$encode_path.'>';
            echo "<i class='material-icons circle green'>description</i>";
            echo "<span class='title'>".$value->get_name()."</span>";
        } else {
            echo '<a href='.base_url($urlMethode).$slashOrNot.$encode_path.'>';
            echo "<i class='material-icons circle blue'>folder</i>";
            echo "<span class='title'>".$value->get_name()."</span>";
            echo "<p> FILE</p>";
        }
        echo "</a></li>";
    }
?>
</ul>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
