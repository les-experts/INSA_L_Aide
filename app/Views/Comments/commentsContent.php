<div class="row">
    <div class="col s12">
        <?php 
        
            if (empty($comments)) { ?>
                
                <div class="row rowNoComment center-align valign-wrapper">
                    <div class="col s12">
                     Aucun commentaire pour l'instant :(
                    </div>
                </div>
            
            <?php } else { foreach ($comments as $row) { ?>
            <div class="row rowComment">
                <div class="col s12">
                    <div class="row rowAuthor">
                        <div class="col s8 truncate">
                            <span class="spanPseudo"><?= $row->COM_pseudo ?> </span><span> - <?= date('d/m/Y à G:i', strtotime($row->COM_date)) ?></span>
                        </div>

                    </div>
                    <div class="row rowContent">
                        <div class="col s12">
                            <?= $row->COM_content ?>
                        </div>
                    </div>
                </div>

            </div>
        <?php }} ?>
    </div>
</div>