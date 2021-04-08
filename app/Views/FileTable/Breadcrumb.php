<?php $breadscrumbContentExploded = explode("/", $pathToRepresent); ?>
<nav class="clean valign-wrapper">
     <div class="nav-wrapper">
       <div class="col s12">
         <a href="/" class="breadcrumb"><i class="material-icons">home</i></a>
         <?php
           foreach ($breadscrumbContentExploded as $key => $breadscrumbElement) {
               if ($key != count($breadscrumbContentExploded)-1 ) {
                 echo "<a href='/index.php?folder=".explode("/".$breadscrumbContentExploded[$key+1],$pathToRepresent)[0]."' class='breadcrumb'>$breadscrumbElement</a>";
               } else {
                 echo "<a href='#!' class='breadcrumb'>$breadscrumbElement</a>";
               }
           }
         ?>
       </div>
     </div>

 </nav>
