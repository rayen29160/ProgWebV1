<?php

include("include/fonctions.php");

$_SESSION["choixObjectifs"] = $_POST["choix"];

$argentDepense = $_SESSION["argentDepense"];
$argentEconomise = argentEconomise("25/05/2015",  $_SESSION["nbCigarettes"], $_SESSION["marque"]);
$viePerdue = esperanceViePerdue($_SESSION["age"], $_SESSION["ageDebut"], $_SESSION["nbCigarettes"]);
$vieSauvee = esperanceVieGagnee("25/05/2015", $_SESSION["nbCigarettes"]);

include("vues/v_stats.php");

?>