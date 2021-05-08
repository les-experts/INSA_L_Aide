<?php
/**
 *  Une vue qui affiche la table des fichiers
 *
 * @param $urlMethode Est l'identifiant du controleur et de la méthode utilisée. Apres le base_url et avant les paramêtres. Par defaut: FileTable/index
 * @param $files Une liste d'objet GitFile. Ces GitFiles seront affiché dans le tableau.
 *
 */

?>

<ul class='collection'>

  <?php
    foreach($files as $key => $value) {
        $slashOrNot = (empty($value->get_path_from_git())?'':'/'); // si c'est la racine il ne faut pas ajouer de "/" sinon on se retourve avec http://base_url/FileTable/index//directory
        $encode_path = str_replace(" ","%20",$value->get_path_from_git_with_name());

        $fileExploded = explode(".", $encode_path);
        $extension = end($fileExploded);

        //$avatar = "<img src='".$imgSrc."' class='circle'>"
        $srcImage = "/static/FileTable/img/";

        switch($extension) {
          case "pdf":
            $avatar = "<i class='material-icons circle red'>picture_as_pdf</i>";
            break;
          case "md":
            $srcImage .= "markdown.png";
            $avatar = "<img src='".$srcImage."' class='circle'>";
            break;
          case "html":
            $avatar = "<i class='material-icons circle red'>code</i>";
            break;
          case "tex":
            $srcImage .= "tex.png";
            $avatar = "<img src='".$srcImage."' class='circle'>";
            break;
          default:
            $avatar = "<i class='material-icons circle grey'>description</i>";
        }

        echo '<li class="collection-item avatar clickable-file-or-folder">';

        if (!$value->is_dir()) {
            echo '<a href='.base_url('FileController/index').$slashOrNot.$encode_path.'>';
            echo $avatar;
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
