<?php if(!defined('materializeIncluded')) { ?>
  <link rel="stylesheet" type="text/css" href="<?= base_url('static/Materialize/css/materialize.min.css') ?>">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php } ?>

<title><?= $this->renderSection('module_title')?></title>

<?= $this->renderSection('module_css') ?>

<?= $this->renderSection('module_content') ?>

<?= $this->renderSection('module_js') ?>

<?php if(!defined('materializeIncluded')) { ?>
  <script src="<?= base_url("static/Materialize/js/materialize.min.js") ?>"></script>
<?php } ?>

<?php if(!defined('jqueryIncluded')) { ?>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<?php } ?>
