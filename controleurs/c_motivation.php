<?php

	include("include/fonctions.php");
	$argentEconomise = argentEconomise("25/05/2015",  $_SESSION["nbCigarettes"], $_SESSION["marque"]);
	$pourcentageCourt = pourcentageObjectif($argentEconomise, $_SESSION["prixObjCourt"]);
	$pourcentageMoyen = pourcentageObjectif($argentEconomise, $_SESSION["prixObjMoyen"]);
	$pourcentageLong = pourcentageObjectif($argentEconomise, $_SESSION["prixObjLong"]);
	
	if($_SESSION["choixObjectifs"]=="oui") {
		include("vues/v_sommaire.php");
		include("vues/v_motivation.php");
	} else {
		include("vues/v_sommaire.php");
		include("vues/v_definirObj.php");
	}
?>
