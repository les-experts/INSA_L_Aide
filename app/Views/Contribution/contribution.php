<?= $this->extend('Layouts/BaseLayout') ?>

<?= $this->section('content') ?>

    <div class="row center row-logo">
        <img class="gitlab_logo" src="/static/Contribution/img/gitlab_logo.png"/>
    </div>

    <div class="row row-text-presentation">
      <div class="col s12">
        <div class="row center">
          <h4>Comment contribuer au projet ?</h4>
        </div>
        <div class="row row-with-text">
            Le stockage des documents du site est basé sur un Git, afin de permettre une navigation plus simple et une contribution plus facile ! Après avoir demandé
            l'accès à un administrateur, vous pourrez librement déposer des documents dans les sections adéquates. Une arborescence de dossiers est disponible selon 
            le nom des EC. A l'intérieur de ceux-ci se trouvent différents sous-répertoires selon les chapitres ou les pré-requis de la matière.
        </div>
      </div>
    </div>

    <div class="row center btn-return-nav">
      <a class="waves-effect light-green btn" target="_blank" href="https://gitlab.insa-rouen.fr/insaled/publicRepository"><i class="material-icons right">arrow_forward</i>Aller vers le projet Gitlab</a>
    </div>

    <div class="row row-text-presentation">
      <div class="col s12">
        <div class="row center">
          <h4>Vous ne savez pas utiliser Git ? Aucun soucis, tout est expliqué ici !</h4>
        </div>
        <div class="row row-with-text">
          La première étape est de demander l'accès au Git à un administrateur. Cela permettra par la suite 
          de déposer des documents librement et sans limite, cette étape étant à réaliser une seule fois !
          Pour cela il suffit d'appuyer sur "request acces" (en pointillés rouges sur l'image).
        </div>
      </div>
    </div>

    <div class="row center row-logo">
        <img class="demander_acces" src="/static/Contribution/img/demander_acces.png"/>
    </div>

    <div class="row row-text-presentation">
      <div class="col s12">
        <div class="row row-with-text">
          Une fois que l'administrateur vous a accepté, vous pouvez désormais déposer des fichiers. Pour cela, placez-vous dans le dossier correspondant à votre fichier et ajouter le. Si
          vous souhaitez créer un sous-répertoire afin de placer votre fichier car le chapitre le concernant n'en a pas encore, vous pouvez également (en faisant attention de bien le nommer).
          Le nom des fichiers déposés a une réelle importance car la recherche (via la barre de recherche en haut du site) est faite à partir des titres des documents, veuillez donc mettre un 
          maximum de mots clés au sein de celui-ci.
          Exemple : je dispose d'une fiche
        </div>
      </div>
    </div>

    <div class="row center btn-return-nav">
      <a class="waves-effect light-green btn" target="_blank" href="https://gitlab.insa-rouen.fr/insaled/insaled_main_repo"><i class="material-icons right">arrow_forward</i>Aller vers le projet Gitlab</a>
    </div>







<?= $this->endSection() ?>
