<?php
	include('database.php');
	try{
		$pdo = new PDO($DB_DS, $DB_USER, $DB_PASSWORD);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$request = "CREATE DATABASE IF NOT EXISTS `camagru` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
		$pdo->prepare($request)->execute();
	}
	catch(PDOException $Exception){
		echo "Error during the create database :\n" . $Exception->getMessage() . "\n";
	}
	try{
		$pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$request = "CREATE TABLE IF NOT EXISTS `users` (`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,`login` VARCHAR(8) NOT NULL,`password` VARCHAR(255) NOT NULL,`email` VARCHAR(50) NOT NULL, `confirmed` VARCHAR(1) NOT NULL DEFAULT 'N')";
		$pdo->prepare($request)->execute();
	}
	catch(PDOException $Exception){
		echo "Error during the create table :\n" . $Exception->getMessage() . "\n";
	}
?>
