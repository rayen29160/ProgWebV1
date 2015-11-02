<?php
if (! isset ( $_REQUEST ['action'] )) {
	$_REQUEST ['action'] = 'demandeConnexion';
}
$action = $_REQUEST ['action'];

include('include/fonctions.php');

$_SESSION["age"]= 40;
$_SESSION["ageDebut"]= 20;
$_SESSION["nbCigarettes"]= 15;
$_SESSION["marque"]= "Marlboro";
$_SESSION["argentDepense"]= argentDepense($_SESSION["age"], $_SESSION["ageDebut"], $_SESSION["nbCigarettes"], $_SESSION["marque"]);
$_SESSION["dateArret"]= 38;
$_SESSION["argentEconomise"]= argentEconomise($_SESSION["dateArret"], $_SESSION["nbCigarettes"], $_SESSION["marque"]);

$_SESSION["objCourt"] = "Jeu vidéo";
$_SESSION["prixObjCourt"] = 50;
$_SESSION["objMoyen"] = "Ordinateur";
$_SESSION["prixObjMoyen"] = 1200;
$_SESSION["objLong"] = "GSXR";
$_SESSION["prixObjLong"] = 10000;

switch ($action) {
	case 'demandeConnexion' :
		{
			include ('vues/v_connexion.php');
			break;
		}
	
	case 'valideConnexion' :
		{			
			$id = $_REQUEST ['id'];
			$mdp = $_REQUEST ['mdp'];			
			
			//Teste si l'identifiant et le mot de passe sont bons
			if(connexion($id,$mdp))
			{
				//Si oui, affiche la page d'accueil et le sommaire				
				$_SESSION["id"] = $id;
				include('vues/v_accueil.php');
				include('vues/v_sommaire.php');
			} else {
				//Sinon on reste sur la page de connexion
				include('vues/v_connexion.php');
				echo("<script language='javascript'>alert('Identifiant ou mot de passe incorrect');</script>");
			}
			break;
		}
}

?>