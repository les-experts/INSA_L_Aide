# INSAL'aide
## Set up project
Comment initialiser le projet:
* Pull le depôt
* Avec composer installer les dépendances: $(/INSA_L_AIDE) composer update
* Modifier le app/Config/App.php
* Modifier le app/Config/Database.php

### Problèmes possibles

#### Composer pas installer
Sur linux : sudo apt install composer
sur window : https://getcomposer.org/doc/00-intro.md

⚠️ Pour la version Windows, lors du setup de composer il faut lui dire d'utiliser une version de php >7.

## Problème

L’INSA est une formation exigeante, et c’est ce qui en fait sa force. Cependant, certains élèves peuvent se sentir perdus à la vue de la quantité de travail à fournir, surtout en intégrant l’école en 3eme année du cycle ingénieur et venant de formations plus professionnalisantes comme le DUT. Il faudrait proposer aux élèves ayant des difficultés des solutions plus pratiques d’accès, en facilitant la navigation à travers celles-ci. Il faudrait également que le découpage soit plus précis au sein des cours, pour pouvoir réviser et apprendre sur des notions en particulier. 
De plus, il manque des cours sur les notions de base, pour certains cours il y a des pré-requis et l’apprentissage de ceux-ci est en autodidacte ; il faudrait mettre à disposition des ressources existantes de qualité et ordonnées.

## Solution proposée : INS’Aled 
L’idée qui nous est venue est de réaliser une application web permettant de répondre au problème cité ci-dessus. 
Besoins auxquels INS’Aled devra répondre : 
*Proposer des ressources existantes (certainement de moodle) de façon ordonnée pour en faciliter l’apprentissage

*Agrémenter avec des ressources existantes autres que celles proposées par l’INSA (Tutoriels youtubes de qualité faits par des professeurs, sites webs utiles, …)

*Agrémenter avec des ressources non-existantes : astuces données par des élèves, notion de “communauté” et d’aide élève-élève

*Les ressources devront porter sur des notions spécifiques

*On doit trouver ce que l’on cherche en seulement quelques clics

*Dans un premier temps, INS’Aled sera porté sur les pré-requis de chaque cours
