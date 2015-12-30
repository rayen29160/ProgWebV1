<?php

	$tabInfo =	$pdo->getInfosUtilisateur('marc1', 'mdp');
	include("vues/v_sommaire.php");
	include("vues/v_contact.php");
?>