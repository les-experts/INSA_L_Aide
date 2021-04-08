<?= $this->extend('Layouts/HtmlPageLayout') ?>

<?= $this->section('head') ?>
    <?=$head?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?=$filetable?>
<?= $this->endSection() ?>