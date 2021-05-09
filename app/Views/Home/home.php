<?= $this->extend('Layouts/BaseLayout') ?>

<?= $this->section('content') ?>

  <?php if (isset($breadcrumb)) { echo $breadcrumb; } ?>

  <?php if (isset($fileTable)) { echo $fileTable; } ?>

  <!-- Il faut ajouter fonction DL <? //php if (isset($toolbar)) { echo $toolbar; } ?> -->

  <?php if (isset($comments)) { echo $comments; } ?>

<?= $this->endSection() ?>
