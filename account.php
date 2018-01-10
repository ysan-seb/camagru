<?php
include('config/database.php');
require('function/login_verify.php');
require('function/email_verify.php');
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
if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['comfirm_password']) && isset($_POST['email']))
{
	if (login_exist($db, $_POST['login']))
		echo "Unknow user\n";
	else
		echo "User exist\n";
	// verifier format mdp; A-z-0-9
	if ($_POST['password'] == $_POST['comfirm_password'])
		echo "password ok\n";
	else
		echo "password error\n";
	if (email_verify($db, $_POST['email']))
		echo "Unknow email\n";
	else
	{
		echo $_POST['email'] . "is not a valid email address\n";
	}
}
else
	echo "Error\n";
?>
