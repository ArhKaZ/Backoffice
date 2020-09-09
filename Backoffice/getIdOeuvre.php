<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include_once "modele/initPdo.php";
include_once "vendor\autoload.php";

$dao = new modele\daoOeuvre_Expo($dbh,$ObjLog);      //$dbh est initialisé par initPdo.php

echo json_encode($dao->getIdOeuvre());