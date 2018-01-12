<?php
session_start();
include('config/database.php');
function		authentification($db, $login, $password)
{
	$password = hash('Whirlpool', $password);
	foreach ($db as $data)
	{
		if ($login === $data['login'] && $password === $data['password'])
			return (TRUE);
	}
	return (FALSE);
}
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
if (!empty($_POST['login']) && !empty($_POST['password']))
{
	echo "fuck";
	if (authentification($db, $_POST['login'], $_POST['password']))
	{
		$_SESSION['connected'] = 'YES';
		header('location: home.php');
	}
	else
		echo "Unknow user\n";
}
else
	echo "Please complete all fields\n";
