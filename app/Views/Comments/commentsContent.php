<div class="row">
    <div class="col s12">
        <?php foreach ($comments as $row) { ?>
            <div class="row blue darken-3">
                <div class="col s12">
                    <?= $row->COM_content ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>