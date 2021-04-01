<?= $this->extend('Layouts/ModuleLayout') ?>

<?= $this->section('module_title') ?>
    Header
<?= $this->endSection() ?>

<?= $this->section('module_css') ?>
  <link rel="stylesheet" type="text/css" href="<?= base_url('static/Header/css/header.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('module_content') ?>
<nav>
  <div class="nav-wrapper">
    <a href="/" class="brand-logo" >INSAled</a>
    <ul class="right">
        <!-- ?= view_cell('\App\Controllers\Search::search_bar') ?> -->
    </ul>
  </div>
</nav>
<?= $this->endSection() ?>
