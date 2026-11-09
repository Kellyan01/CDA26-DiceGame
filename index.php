<?php
include './Des.php';
include './Joueur.php';
include './Partie.php';

$des = new Des(6);
$yoann = new Joueur("Yoann",$des);

$partie = new Partie($yoann, new Joueur("Jeff",new Des(6)),5);

//Lancement de la partie
$partie->lancerPartie();