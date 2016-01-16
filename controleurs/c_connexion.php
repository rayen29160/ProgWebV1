<?php
if (! isset ( $_REQUEST ['action'] )) {
	$_REQUEST ['action'] = 'demandeConnexion';
}
$action = $_REQUEST ['action'];

include('include/fonctions.php');

switch ($action) {
	case 'demandeConnexion' :
		{
			if (isset ( $_POST ["choix"] )) {
				if ($_POST ["choix"] == "oui") {
					$pdo->updateNewUtil($_POST["login"], $_POST["age"], $_POST["ageDebut"], $_POST["nbCigarettes"], $_POST["listeMarques"], 1);
					$pdo->addNewObjC($_POST ["court"], $_POST ["prixcourt"]);
					$pdo->addNewObjM($_POST ["moyen"], $_POST ["prixmoyen"]);
					$pdo->addNewObjL($_POST ["long"], $_POST ["prixlong"]);
					$tabIdObj = $pdo->selectObj($_POST ["court"], $_POST ["moyen"], $_POST ["long"]);
					$idObjC = $tabIdObj["idObjC"];
					$idObjM = $tabIdObj["idObjM"];
					$idObjL = $tabIdObj["idObjL"];
					$pdo->updateUtil($_POST ["login"], $idObjC, $idObjM, $idObjL);
				} else {
					$pdo->updateNewUtil($_POST["login"], $_POST["age"], $_POST["ageDebut"], $_POST["nbCigarettes"], $_POST["listeMarques"], 0);
				}
			}
			include ('vues/v_connexion.php');			
			break;
		}
	
	case 'valideConnexion' :
		{			
			$login = $_REQUEST ['login'];
			$mdp = $_REQUEST ['mdp'];
			$tabInfo =	$pdo->getInfosUtilisateur($login, $mdp);
			
			
			//Teste si l'identifiant et le mot de passe sont bons
			if(sizeof($tabInfo)>1)
			{
				//Si oui, affiche la page d'accueil et le sommaire				
				$_SESSION["login"] = $login;
				$_SESSION["connecte"]=1;
				$_SESSION["util"]=$tabInfo["idUtil"];
				$_SESSION["age"]= $tabInfo["age"];
				$_SESSION["ageDebut"]= $tabInfo["ageDebut"];
				$_SESSION["nbCigarettes"]= $tabInfo["nbCigarettes"];
				$_SESSION["marque"]= $tabInfo["marque"];
				$_SESSION["argentDepense"]= argentDepense($_SESSION["age"], $_SESSION["ageDebut"], $_SESSION["nbCigarettes"], $_SESSION["marque"]);
				$_SESSION["dateArret"]=  convertDateBdToSite($tabInfo["dateArret"]);
				$_SESSION["argentEconomise"]= argentEconomise($_SESSION["dateArret"], $_SESSION["nbCigarettes"], $_SESSION["marque"]);				
				$_SESSION["idObjC"] = $tabInfo["idObjC"];
				$_SESSION["objCourt"] = $tabInfo["nomObjC"];
				$_SESSION["prixObjCourt"] = $tabInfo["prixObjC"];
				$_SESSION["idObjM"] = $tabInfo["idObjM"];
				$_SESSION["objMoyen"] = $tabInfo["nomObjM"];
				$_SESSION["prixObjMoyen"] = $tabInfo["prixObjM"];
				$_SESSION["idObjL"] = $tabInfo["idObjL"];
				$_SESSION["objLong"] = $tabInfo["nomObjL"];
				$_SESSION["prixObjLong"] = $tabInfo["prixObjL"];
				$_SESSION["choixObjectifs"] = $tabInfo["choixObjectifs"];			
				$_SESSION["mail"] = $tabInfo["mail"];
				$_SESSION["reveDepasse"] = nbRevesDepasse($_SESSION["argentDepense"] , $_SESSION["prixObjLong"]);
				
				$pdo->majArgentEconomise($_SESSION["login"], floatval($_SESSION["argentEconomise"]));
				$pdo->majArgentDepense( $_SESSION["login"], $_SESSION["argentDepense"]);				
				
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