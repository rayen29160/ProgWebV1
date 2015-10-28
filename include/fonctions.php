<?php
	//Renvoie true si l'identifiant et le mot de passe sont bons
	function testConnexion($id, $mdp){		
		if($id=="abc" && $mdp=="abc") {
			return true;
		} else {
			return false;
		}
	}
	
?>