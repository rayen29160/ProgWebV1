<?php

	/*if(empty($_POST["court"]) && empty($_POST["moyen"]) && empty($_POST["long"]) &&
			empty($_POST["prixcourt"]) && empty($_POST["prixmoyen"]) && empty($_POST["prixlong"])) {		
		//$_SESSION["choixObjectifs"]=="oui";
	} else {
		//$_SESSION["choixObjectifs"]=="non";
	}*/	
	include("include/fonctions.php");
	$argentEconomise = argentEconomise("25/05/2015",  $_SESSION["nbCigarettes"], $_SESSION["marque"]);
	$pourcentageCourt = pourcentageObjectif($argentEconomise, $_SESSION["prixObjCourt"]);
	$pourcentageMoyen = pourcentageObjectif($argentEconomise, $_SESSION["prixObjMoyen"]);
	$pourcentageLong = pourcentageObjectif($argentEconomise, $_SESSION["prixObjLong"]);
	
	if($_SESSION["choixObjectifs"]=="oui") {
		include("vues/v_motivation.php");
	} else {
		include("vues/v_definirObj.php");
	}
?>
