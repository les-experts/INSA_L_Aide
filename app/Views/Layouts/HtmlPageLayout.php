<!DOCTYPE html>
<html>
    <head>
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