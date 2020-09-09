<?php
include_once "const.php";
include_once ".\util\log.php";

$ObjLog = new util\log();

try {
    $dbh = new PDO($dsn,$user,$pass);
    $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
    $ObjLog->insertErrException($e);
	 die();
}
