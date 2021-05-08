<div id="commentsContainer" class="row">
    <div class="col s12">
        <div class="row">
            <div class="col s12">
                <h2>Commentaires de <?= $pathToManage ?> </h2>
            </div>
        </div>

        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="pseudo" id="pseudo" type="text" class="validate">
                        <label for="pseudo">Choisissez un pseudo</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input name="newComment" id="newComment" type="text" class="validate">
                        <label for="newComment">Ecrivez un commentaire ! </label>
                    </div>
                </div>

                <input name="pathToManage" id="pathToManage" type="text" value="<?= $pathToManage ?>"  style="display: none;">

                <input type="submit">

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