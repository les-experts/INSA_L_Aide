<!doctype html>
<html>
<head>

    <title><?= $this->renderSection('title')?></title>

    <link rel="stylesheet" type="text/css" href="<?= base_url('static/Materialize/css/materialize.min.css') ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?php define('materializeIncluded', true); ?>

    <?= $this->renderSection('css') ?>

</head>
<body>
    <?= view_cell('\App\Controllers\Header::header') ?>

    <div class="container">
      <?= $this->renderSection('content') ?>
    </div>

    <?= view_cell('\App\Controllers\Footer::footer') ?>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <?php define('jqueryIncluded', true); ?>

    <script src="<?= base_url("static/Materialize/js/materialize.min.js") ?>"></script>

    <?= $this->renderSection('js') ?>

</body>
</html>
