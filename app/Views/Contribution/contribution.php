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
          Pour cela il suffit d'appuyer sur "Request Access" (en pointillés rouges sur l'image).
        </div>
      </div>
    </div>

    <div class="row center row-logo">
        <img class="demander_acces" src="/static/Contribution/img/demander_acces.png"/>
    </div>

    <div class="row row-text-presentation">
      <div class="col s12">
        <div class="row row-with-text">
          Une fois que l'administrateur vous a accepté, vous pouvez désormais déposer des fichiers. Pour cela, placez-vous dans le dossier correspondant à votre fichier et ajoutez le. Si
          vous souhaitez créer un sous-répertoire afin de placer votre fichier car le chapitre le concernant n'en a pas encore, vous pouvez également (en faisant attention de bien le nommer).
          Le nom des fichiers déposés a une réelle importance car la recherche (via la barre de recherche en haut du site) est faite à partir des titres des documents, veuillez donc mettre un
          maximum de mots clés au sein de celui-ci. <br/><br/>
          <b>Exemple :</b> je dispose d'une fiche sur Cholesky en ANANUM. Je clique donc sur le dossier "ANANUM" sur la page d'accueil du repository Gitlab. Le dossier "Cholesky" existe déja donc je clique dessus, on arrive alors sur la page sur laquelle on va devoir déposer notre fiche. Au niveau
          de l'affichage de l'arborescence de dossier, un "+" va apparaitre (pointillés rouges sur la photo suivante). En cliquant dessus, une liste de choix va se proposer à vous.
        </div>
      </div>
    </div>

    <div class="row center row-logo">
        <img class="add_file" src="/static/Contribution/img/add_file.png"/>
    </div>

    <div class="row row-text-presentation">
      <div class="col s12">
        <div class="row row-with-text">
          Sur cette liste, l'option qui nous intéresse est "upload file" (pointillés rouges sur la photo suivante), qui va nous permettre d'importer un fichier stocké en local.
          On peut également créer un fichier directement sur Gitlab (ce qu'on ne conseille pas), ou bien créer un nouveau dossier.
        </div>
      </div>
    </div>

    <div class="row center row-logo">
        <img class="add_file" src="/static/Contribution/img/add_file2.png"/>
    </div>

    <div class="row row-text-presentation">
      <div class="col s12">
        <div class="row row-with-text">
          En ayant choisi l'option "upload file", une fenêtre va s'afficher. Elle va nous permettre de sélectionner un fichier local. Pour cela, vous pouvez faire un glisser/deposer
          sur la zone en pointillés ou bien cliquer sur "click to upload" (pointillés rouges sur la photo suivante).
        </div>
      </div>
    </div>

    <div class="row center row-logo">
        <img class="add_file" src="/static/Contribution/img/add_file3.png"/>
    </div>

    <div class="row row-text-presentation">
      <div class="col s12">
        <div class="row row-with-text">
          Dans notre cas, nous avons choisi d'importer le fichier "fiche_cholesky_algorithme.md". On peut rajouter un message de commit dans le cadre prévu (pointillés rouges sur la photo suivante),
           permettant d'identifier l'action que nous avons réalisé lors de cette mise à jour du Git (mais ce n'est pas obligatoire, laisser le texte par défaut est possible). La dernière étape est d'appuyer
           sur le bouton "upload file" en bas à gauche (pointillés bleus sur la photo suivante). Cela permettra de valider l'importation du fichier dans le Git.
        </div>
      </div>
    </div>

    <div class="row center row-logo">
        <img class="add_file" src="/static/Contribution/img/add_file4.png"/>
    </div>

    <div class="row row-text-presentation">
      <div class="col s12">
        <div class="row row-with-text">
          Comme vous pouvez le voir, le fichier a bien été importé. Merci d'avoir contribué !
        </div>
      </div>
    </div>

    <div class="row center row-logo">
        <img class="add_file" src="/static/Contribution/img/add_file5.png"/>
    </div>

<?= $this->endSection() ?>
