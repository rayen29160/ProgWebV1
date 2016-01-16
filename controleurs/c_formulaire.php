<?php
	$pdo->addNewUtil($_POST["login"], $_POST["mdp"], $_POST["mail"]);
	include("vues/v_formulaire.php");
?>