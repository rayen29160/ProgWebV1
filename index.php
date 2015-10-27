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
	}
?>
