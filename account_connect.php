<?php
include('config/database.php');
//funct auth
try{
	$pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$request = "SELECT * FROM `users`;";
	$req = $pdo->prepare($request);
	$req->execute();
	$db = $req->fetchAll();
	$req->closeCursor();
}
catch(PDOException $Exception){
	echo "Error during the taking table :\n" . $Exception->getMessage() . "\n";
}
if (isset($_POST['login']) && isset($_POST['password']))
{

}
