<?php

	include("include/fonctions.php");
	$argentEconomise = argentEconomise("25/05/2015",  $_SESSION["nbCigarettes"], $_SESSION["marque"]);
	$pourcentageCourt = pourcentageObjectif($argentEconomise, $_SESSION["prixObjCourt"]);
	$pourcentageMoyen = pourcentageObjectif($argentEconomise, $_SESSION["prixObjMoyen"]);
	$pourcentageLong = pourcentageObjectif($argentEconomise, $_SESSION["prixObjLong"]);
	
	//$pdo->updateNewUtil($idUtil,$age,$ageDebut,$nbCig,$marque,$argentDepense,
			//$argentEconomise,$dateArret,$choixObjectifs);
	
	if($_SESSION["choixObjectifs"]==1) {
		include("vues/v_sommaire.php");
		include("vues/v_motivation.php");
	} else {
		include("vues/v_sommaire.php");
		include("vues/v_definirObj.php");
	}
?>
