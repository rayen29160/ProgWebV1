<?php
	
	session_start();
	
	if(!isset($_REQUEST["uc"])){
		$_REQUEST["uc"] = 'connexion';
	}	
	
	$uc = $_REQUEST["uc"];
	switch($uc){
		case 'connexion':{
			include("controleurs/c_connexion.php");break;
		}
		case 'contact':{
			if($_SESSION["connecte"]==1){
				include("controleurs/c_contact.php");
			} else {
				include("controleurs/c_connexion.php");
			}
			break;
		}
		case 'mentionsLegales':{
			if($_SESSION["connecte"]==1){
				include("controleurs/c_mentionsLegales.php");
			} else {
				include("controleurs/c_connexion.php");
			}
			break;
		}
		case 'stats':{
			if($_SESSION["connecte"]==1){
				include("controleurs/c_stats.php");
			} else {
				include("controleurs/c_connexion.php");
			}
			break;
		}
		case 'motivation':{
			if($_SESSION["connecte"]==1){
				include("controleurs/c_motivation.php");
			} else {
				include("controleurs/c_connexion.php");
			}
			break;
		}
		case 'moncompte':{
			include("controleurs/c_moncompte.php");break;
		}
		case 'inscription':{			
			include("controleurs/c_inscription.php");break;
		}
		case 'formulaire':{			
			include("controleurs/c_formulaire.php");break;
		}
		case 'deconnecter':{
			if($_SESSION["connecte"]==1){
				include("controleurs/c_deconnecter.php");
			} else {
				include("controleurs/c_connexion.php");
			}
			break;
		}		
	}
?>
