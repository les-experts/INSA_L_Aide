<!DOCTYPE html>
<html>
    <head>
      <?php
          use App\Controllers\Head;
          use App\Controllers\Header;
          use App\Controllers\Footer;

          helper('html');

          /* Defining variables relative to header, used later in the layout */
  				$header_object = new Header();
  				$header_css = $header_object->getCss();
          $header_js = $header_object->getJS();

          if(isset($cssLink) && !empty($cssLink)){
            $cssLink = array_merge($cssLink, $header_css);
          }
          else{
            $cssLink = $header_css;
          }

          /* Defining variables relative to footer, used later in the layout */
          $footer_object = new Footer();
  				$footer_css = $footer_object->getCss();
          $footer_js = $footer_object->getJS();

          if(isset($cssLink) && !empty($cssLink)){
            $cssLink = array_merge($cssLink, $footer_css);
          }
          else{
            $cssLink = $footer_css;
          }

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

        <?= $header_object->getView() ?>

        <div id="globalContainer" class="container">
          <?= $this->renderSection('content') ?>
        </div>

        <?= $footer_object->getView() ?>

        <?php

        if(isset($jsLink) && !empty($jsLink)){
          $jsLink = array_merge($jsLink, $header_js);
          $jsLink = array_merge($jsLink, $footer_js);
        }
        else{
          $jsLink = $header_js;
          $jsLink = array_merge($jsLink, $footer_js);
        }

        $jsLink = Head::parseJs($jsLink);

        if(isset($jsLink)){
            foreach ($jsLink as $value) {
                echo script_tag($value);
            }
        }
        ?>
    </body>
</html>
