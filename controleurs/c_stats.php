<?php

include("include/fonctions.php");

$argentDepense = $_SESSION["argentDepense"];
$argentEconomise = argentEconomise($_SESSION["dateArret"],  $_SESSION["nbCigarettes"], $_SESSION["marque"]);
$viePerdue = esperanceViePerdue($_SESSION["age"], $_SESSION["ageDebut"], $_SESSION["nbCigarettes"]);
$vieSauvee = esperanceVieGagnee($_SESSION["dateArret"], $_SESSION["nbCigarettes"]);

include("vues/v_sommaire.php");
include("vues/v_stats.php");

?>