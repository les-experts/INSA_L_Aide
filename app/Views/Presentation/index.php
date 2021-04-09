<?= $this->extend('Layouts/BaseLayout') ?>

<?= $this->section('content') ?>
    <div class="main-container">

        <img class="logo" src="/static/Images/logo_iti.jpg"/>

        <h3>Pourquoi INSAled ?</h3>
        <p>L’INSA est une formation exigeante, et c’est ce qui en fait sa force. 
        Cependant, certains élèves peuvent se sentir perdus à la vue de la quantité 
        de travail à fournir, surtout en intégrant l’école en 3eme année du cycle ingénieur 
        et venant de formations plus professionnalisantes comme le DUT. Trouver des 
        ressources extérieures afin de palier aux manques n'est pas toujours facile 
        et adapté à la formation donnée par le département ITI. </p>

        <h3>INSAled, une plateforme d'aide par les élèves pour les élèves</h3>
        <p>Le principe d'INSAled est simple : regrouper toutes les ressources possibles
        pouvant aider la compréhension des cours données dans le département, notamment en 3ème 
        année. Le site regroupe donc de nombreux documents, lien vers des vidéos, fiches et 
        autres afin d'aider l'étudiant de 3ème année dans son année considérée comme la 
        plus dure dans le département. Le site a été pensé afin de faciliter un maximum la recherche
        d'information, notamment grâce à une barre de recherche sur tous les documents du site.</p>

        <h3>Comment contribuer ?</h3>
        <p> Que vous soyez étudiant de 3ème, 4ème ou 5ème année ou même professeur, vous pouvez
        contribuer au site en proposant vos documents, via le git prévu pour. Nous comptons
        sur votre bienveillance et votre sérieux afin d'agrémenter le site de nouveaux contenus pouvant
        aider les élèves les plus en difficulté ! </p>

        <a class="waves-effect light-green btn" href="/Home/index"><i class="material-icons right">arrow_forward</i>Aller vers la page de navigation</a>
    </div>
    

<?= $this->endSection() ?>
