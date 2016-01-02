<?php
	if(isset($_POST["mdp2"])&& isset($_POST["mail"])){
		$pdo->majMdp($_SESSION["id"], $_POST["mdp2"],$_POST["mail"]);
	}
	
	if(isset($_POST["court"])&& isset($_POST["prixcourt"])){
		$pdo->majObjectifCourt($_SESSION["idObjC"], $_POST["court"], $_POST["prixcourt"]);		
	}
	
	if(isset($_POST["moyen"])&& isset($_POST["prixmoyen"])){
		$pdo->majObjectifMoyen($_SESSION["idObjM"], $_POST["moyen"], $_POST["prixmoyen"]);		
	}
	
	if(isset($_POST["long"])&& isset($_POST["prixlong"])){
		$pdo->majObjectifLong($_SESSION["idObjL"], $_POST["long"], $_POST["prixlong"]);		
	}
	include("vues/v_sommaire.php");
	include("vues/v_moncompte.php");
?>