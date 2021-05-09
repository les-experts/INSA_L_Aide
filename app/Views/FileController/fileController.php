<?= $this->extend('Layouts/BaseLayout') ?>

<?= $this->section('content') ?>

    <?= $breadcrumb ?>

    <iframe class="fileController_iframe"
        src="<?= base_url($file->get_full_path()) ?>">
    </iframe>

    <?= $toolbar ?>

    <?= $commentaires ?>

<?= $this->endSection() ?>