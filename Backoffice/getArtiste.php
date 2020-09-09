<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include_once "modele/initPdo.php";
include_once "vendor\autoload.php";

$dao = new modele\daoExposition($dbh,$ObjLog);
$id_expo = json_encode($dao->getIdExposition(2019-11-05)); //Trouver comment l'initialisé
echo $id_expo;

$dao = new modele\daoOeuvre_Expo($dbh,$ObjLog);

$id_oeuvre = json_encode($dao->getIdOeuvre($id_expo));
echo $id_oeuvre;

$dao = new modele\daoOeuvre($dbh,$ObjLog);

$id_artiste = json_encode($dao->getIdArtiste($id_oeuvre));
echo $id_artiste;

$dao = new modele\daoartiste($dbh,$ObjLog);

$artiste = json_encode($dao->getArtiste($id_artiste));
echo $artiste;
