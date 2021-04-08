<!DOCTYPE html>
<html>
    <head>
      <?php
          use App\Controllers\Head;
          helper('html');

          $cssLink = Head::parseCSS($cssLink);

          if(isset($cssLink)){
            foreach ($cssLink as $value) {
                echo link_tag(base_url($value));
            }
          }
      ?>
      <title><?= $this->renderSection('title') ?></title>
      <meta charset="UTF-8">
    </head>

    <body>

        <?= $header ?>
        
        <div class="container">
          <?= $this->renderSection('content') ?>
        </div>

        <?php
        if(isset($jsLink)){
            foreach ($jsLink as $value) {
                echo script_tag($value);
            }
        }
        ?>
    </body>
</html>
