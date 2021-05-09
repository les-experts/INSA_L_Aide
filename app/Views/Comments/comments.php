<a class="btn-floating commentsToggler pulse tooltipped" data-position="left" data-tooltip="Commentaires"><i class="material-icons">add</i></a>

<div id="commentsContainer" class="row">
    <div class="col s12">
        <div class="row">
            <div class="col s12">
                <div class="row rowTitre center-align">
                    <div class="col s12">
                        Commentaires
                    </div>
                </div>
                <div class="row rowPath center-align">
                    <div class="col s12">
                        <?php
                        if (empty($pathToManage)) {
                            echo "Page d'accueil d'INSAled";
                        }else {
                            echo $pathToManage;
                        } ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field input-field-pseudo col s8 offset-s2">
                        <input name="pseudo" id="pseudo" type="text" class="validate">
                        <label for="pseudo">Choisissez un pseudo</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field input-field-commentaire col s12 m9">
                        <textarea name="newComment" id="newComment" class="validate materialize-textarea"></textarea>
                        <label for="newComment">Ecrivez un commentaire ! </label>
                    </div>
                    <div class="col s6 offset-s3 m3">
                        <button class="buttonSubmit browser-default"><span>Envoyer </span></button>
                    </div>
                </div>

                <input name="pathToManage" id="pathToManage" type="text" value="<?= $pathToManage ?>" style="display: none;">



            </form>
        </div>

        <div id="commentsContent">
        </div>

    </div>
</div>

<script>
    var Globals = <?php echo json_encode(array(
                        'pathToManage' => $pathToManage,
                        'baseUrl' => base_url()
                    )); ?>;
</script>