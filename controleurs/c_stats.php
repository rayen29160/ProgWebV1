<?php

//Initialisation des variables de session

include("include/fonctions.php");

//$argentDepense = argentDepense($_SESSION["age"], $_SESSION["ageDebut"], $_SESSION["nbCigarettes"], $_SESSION["marque"]);

$argentDepense = $_SESSION["argentDepense"];
$argentEconomise = argentEconomise("25/05/2015",  $_SESSION["nbCigarettes"], $_SESSION["marque"]);
$pourcentageCourt = pourcentageObjectif($argentEconomise, $_SESSION["prixObjCourt"]);
$pourcentageMoyen = pourcentageObjectif($argentEconomise, $_SESSION["prixObjMoyen"]);
$pourcentageLong = pourcentageObjectif($argentEconomise, $_SESSION["prixObjLong"]);
$viePerdue = esperanceViePerdue($_SESSION["age"], $_SESSION["ageDebut"], $_SESSION["nbCigarettes"]);
$vieSauvee = esperanceVieGagnee("25/05/2015", $_SESSION["nbCigarettes"]);

include("vues/v_stats.php");

?>