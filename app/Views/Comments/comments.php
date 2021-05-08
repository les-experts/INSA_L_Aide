<div id="commentsContainer" class="row">
    <div class="col s12">
        <div class="row">
            <div class="col s12">
                <h2>Commentaires de <?= $pathToManage ?> </h2>
            </div>
        </div>

        <div class="row">
            <form class="col s12" method="POST" action="<?php echo base_url().'/comments'; ?>">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="newComment" id="new_comment" type="text" class="validate">
                        <label for="new_comment">Ecrivez un commentaire ! </label>
                    </div>
                </div>
            </form>
        </div>

        <div id="commentsContent">
        </div>
    


    </div>
</div>