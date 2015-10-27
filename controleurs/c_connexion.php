<?php
if (! isset ( $_REQUEST ['action'] )) {
	$_REQUEST ['action'] = 'demandeConnexion';
}
$action = $_REQUEST ['action'];

switch ($action) {
	case 'demandeConnexion' :
		{
			include ('vues/v_connexion.php');
			break;
		}
	
	case 'valideConnexion' :
		{
			include ('include/fonctions.php');
			$id = $_REQUEST ['id'];
			$mdp = $_REQUEST ['mdp'];
			var_dump($id);
			
			if(!testConnexion( $id, $mdp ))
			{
				include('vues/v_accueil.php');
				include('vues/v_sommaire.php');
			} else {
				include('vues/v_connexion.php');				
			}
		}
}

?>