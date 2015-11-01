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
			
			//echo(argentEconomise("25/05/2000", 10, "Marlboro"));
			
			//$total = argentDepense(50, 20, 40, "Marlboro");
			//echo("/ total =".$total);
			//Teste si l'identifiant et le mot de passe sont bons
			if(connexion($id,$mdp))
			{
				//Si oui, affiche la page d'accueil et le sommaire				
				$_SESSION["id"] = $_POST["id"];
				include('vues/v_accueil.php');
				include('vues/v_sommaire.php');
			} else {
				//Sinon on reste sur la page de connexion
				include('vues/v_connexion.php');				
			}
			break;
		}
}

?>