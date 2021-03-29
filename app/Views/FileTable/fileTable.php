<?php
/**
 *  Une vue qui affiche la table des fichiers
 * 
 * @param $urlMethode Est l'identifiant du controleur et de la méthode utilisée. Apres le base_url et avant les paramêtres. Par defaut: FileTable/index
 * @param $files Une liste d'objet GitFile. Ces GitFiles seront affiché dans le tableau.
 * 
 */
   
if(!isset($urlMethode) || empty($urlMethode)){
    $urlMethode = "FileTable/index";
}

?>

<h1>FileTable</h1>

<ul class='collection'>

  <?php 

    
    foreach($files as $key => $value) {

        echo '<li class="collection-item avatar clickable-file-or-folder">
        <a href='.base_url($urlMethode).'/'.$value->get_path().'>';

        if (!$value->is_dir()) {
            echo "<i class='material-icons circle green'>description</i>";
            echo "<span class='title'>".$value->getName()."</span>";
        } else {

            echo "<i class='material-icons circle blue'>folder</i>";
            echo "<span class='title'>".$value->getName()."</span>";
            echo "<p> FILE</p>";
        }
        echo "</li>";
    }
?>
</ul>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
