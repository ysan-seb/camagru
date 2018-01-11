<?php
include('config/database.php');
require('function/fields_check.php');
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
	if (fields_check($db, $_POST['login'], $_POST['password'], $_POST['comfirm_password'], $_POST['email']))
	{
		$log = htmlspecialchars($_POST['login']);
		$pass = hash("Whirlpool", $_POST["password"]);
		$email = $_POST['email'];
		try{
			$pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$request = "INSERT INTO `users`(`login`, `password`, `email`) VALUES ('$log','$pass','$email');";
			$req = $pdo->prepare($request);
			$req->execute();
			$req->closeCursor();
			echo "Account created\n";
		}
		catch(PDOException $Exception){
			echo "Error during the inserting data :\n" . $Exception->getMessage() . "\n";
		}
	}
}
else
	echo "Please complete all fields\n";
?>
