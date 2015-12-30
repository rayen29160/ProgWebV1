<?php
	if(isset($_POST["mdp2"])){
		$pdo->majMdp($_SESSION["id"], $_POST["mdp2"]);		
	}	
	include("vues/v_sommaire.php");
	include("vues/v_moncompte.php");
?>