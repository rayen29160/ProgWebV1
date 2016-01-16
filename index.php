<?php
	include('include/fonctionsbdd.php');
	$pdo = PdoGsb::getPdoGsb ();	
	session_start();
	
	if(!isset($_REQUEST["uc"])){
		$_REQUEST["uc"] = 'connexion';
	}	
	
	$uc = $_REQUEST["uc"];
	switch($uc){
		case 'connexion':{
			include("controleurs/c_connexion.php");break;
		}
		case 'accueil':{
			if($_SESSION["connecte"]==1){
				include("controleurs/c_accueil.php");break;
			} else {
				include("controleurs/c_connexion.php");
			}
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
			include("controleurs/c_mentionsLegales.php");break;
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
			if($_SESSION["connecte"]==1){
				include("controleurs/c_moncompte.php");break;
			} else {
				include("controleurs/c_connexion.php");
			}
		}
		case 'inscription':{			
			include("controleurs/c_inscription.php");break;
		}
		case 'mesmessages':{
			include("controleurs/c_mesmessages.php");break;
		}
		case 'formulaire':{			
			include("controleurs/c_formulaire.php");break;
		}
		case 'amis':{
			include("controleurs/c_amis.php");break;
		}
		case 'message':{
			include("controleurs/c_messages.php");break;
		}
		case 'deconnecter':{
			if(isset($_SESSION)){
				include("controleurs/c_deconnecter.php");
			} else {
				include("controleurs/c_connexion.php");
			}
			break;
		}		
	}
?>
