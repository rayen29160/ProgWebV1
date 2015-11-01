<?php
	session_destroy();
	include("vues/v_connexion.php");
	echo($_SESSION["connecte"]);
?>