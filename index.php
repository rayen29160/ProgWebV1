<?php
	include("vues/v_entete.php");
	require_once("include/fct.inc.php");
	require_once("include/class.pdogsb.inc.php");
	session_start();
	$pdo = PdoGsb::getPdoGsb();
	$estConnecte = estConnecte();
	if(!isset($_REQUEST["uc"]) || !$estConnecte){
		$_REQUEST["uc"] = 'connexion';
	}	 
	$uc = $_REQUEST["uc"];
	switch($uc){
		case 'connexion':{
			include("controleurs/c_connexion.php");break;
		}
		case 'accueil' :{
			include("controleurs/c_accueil.php");break;
		}
		case 'gererFrais' :{
			include("controleurs/c_gererFrais.php");break;
		}
		case 'etatFrais' :{
			include("controleurs/c_etatFrais.php");break;			
		}
		case 'suiviRemboursement' :{
			include("controleurs/c_suiviRemboursement.php");break;			
		}
		case 'validation' :{
			include("controleurs/c_gererFraisComptable.php");break;
		}
	}
	include("vues/v_pied.php") ;
?>