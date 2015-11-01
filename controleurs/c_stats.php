<?php

//Initialisation des variables de session
$_SESSION["age"] = $_POST["age"];
$_SESSION["ageDebut"] = $_POST["ageDebut"];
$_SESSION["nbCigarettes"] = $_POST["nbCigarettes"];
$_SESSION["marque"] = $_POST["marques"];

$_SESSION["objCourt"] = $_POST["court"];
$_SESSION["prixObjCourt"] = $_POST["prixcourt"];

$_SESSION["objMoyen"] = $_POST["moyen"];
$_SESSION["prixObjMoyen"] = $_POST["prixmoyen"];

$_SESSION["objLong"] = $_POST["long"];
$_SESSION["prixObjLong"] = $_POST["prixlong"];

echo($_SESSION["objMoyen"]);

include("include/fonctions.php");

$argentDepense = argentDepense($_SESSION["age"], $_SESSION["ageDebut"], $_SESSION["nbCigarettes"], $_SESSION["marque"]);
$argentEconomise = argentEconomise("25/05/2015",  $_SESSION["nbCigarettes"], $_SESSION["marque"]);
$pourcentageCourt = pourcentageObjectif($argentEconomise, $_SESSION["prixObjCourt"]);
$pourcentageMoyen = pourcentageObjectif($argentEconomise, $_SESSION["prixObjMoyen"]);
$pourcentageLong = pourcentageObjectif($argentEconomise, $_SESSION["prixObjLong"]);

include("vues/v_stats.php");

?>