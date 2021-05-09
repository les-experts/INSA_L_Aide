<?php $breadscrumbContentExploded = explode("/", $pathToRepresent); ?>
<nav class="clean valign-wrapper">
     <div class="nav-wrapper">
       <div class="col s12">
         <a href="/" class="breadcrumb"><i class="material-icons">home</i></a>
         <?php
           foreach ($breadscrumbContentExploded as $key => $breadscrumbElement) {
              
              if (!empty($breadscrumbElement)) { //fix pour les "fichiers" à la racine du dossier git
                if ($key != count($breadscrumbContentExploded)-1 ) {
                  $link = base_url("/Home/getView/".explode("/".$breadscrumbContentExploded[$key+1],$pathToRepresent)[0]);
                  echo "<a href='$link' class='breadcrumb'>$breadscrumbElement</a>";
                } else {
                  echo "<a href='#!' class='breadcrumb'>$breadscrumbElement</a>";
                }
              }
           }
         ?>
       </div>
     </div>

 </nav>
