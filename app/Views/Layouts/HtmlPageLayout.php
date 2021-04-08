<!DOCTYPE html>
<html>
    <head>
    <?php
        use App\Controllers\Head;
        helper('html');
        $cssLink = Head::parseCSS($cssLink);
        foreach ($cssLink as $value) {
            echo link_tag(base_url($value));
        }
    ?>
    <?php
        if(isset($jsLink)){
            foreach ($jsLink as $value) {
                echo script_tag($value);
            }
        }
    ?>
    <title><?=(isset($title)?$title:"InsaL'Aide")?></title>

        <meta charset="UTF-8">
        <?= $this->renderSection('head') ?>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
                <a href="/" class="brand-logo" >INSAled</a>
                <ul class="right">
                    <?= view_cell('\App\Controllers\Search::search_bar') ?>
                </ul>
            </div>
        </nav>
        <?= $this->renderSection('content') ?>
    </body>
</html>