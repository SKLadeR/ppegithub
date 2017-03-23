<?php ini_set('display_errors', true); ?>
<?php session_start () ; ?>
<?php var_dump($_POST) ?>
<?php include "connectbdd.php" ?>
<?php 

	$bdd = new Connexion() ;
	$bdd->connect() ;


	$bdd->fetch("INSERT INTO `users` (`ID_user`, `Nom_user`, `Prenom_user`, `Username`, `Mail_user`, `Password_user`) VALUES (NULL, '" . $_POST["name"] . "' , '" . $_POST["prenom"] . "','". $_POST["username"]."','". $_POST["email"] ."', '". $_POST["password"] ."')");
	echo 'Le compte a bien été créé';





?>