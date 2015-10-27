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
			include("controleurs/c_contact.php");break;
		}
		case 'mentionsLegales':{
			include("controleurs/c_mentionsLegales.php");break;
		}
		case 'stats':{
			include("controleurs/c_stats.php");break;
		}
		case 'motivation':{
			include("controleurs/c_motivation.php");break;
		}
		case 'inscription':{
			include("controleurs/c_connexion.php");break;
		}
	}
?>
