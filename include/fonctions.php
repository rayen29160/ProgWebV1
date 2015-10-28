<?php

	$prix6090 = 1.98/20; //prix d'une cigarette Marlboro entre 1960 et 1989 (paquet de 20)
	$prix9000 = 2.60 / 20; //prix d'une cigarette Marlboro entre 1990 et 1999 (paquet de 20)
	$prix0015 = 5.10 / 20; //prix d'une cigarette Marlboro entre 2000 et 2015 (paquet de 20)

	//Renvoie true si l'identifiant et le mot de passe sont bons
	function testConnexion($id, $mdp){		
		if($id=="abc" && $mdp=="abc") {
			return true;
		} else {
			return false;
		}
	}
	
	
	function argentDepense($age, $ageDebut, $nbCigarettesJours, $marqueCigarettes) {
		global $prix6090, $prix9000, $prix0015;
		//Calcul la dur�e totale
		$dureeTotale = $age - $ageDebut;
		$duree = $dureeTotale;
		//R�cup�re l'ann�e en cours (ex:2015)
		$yearNow = substr(date("Y-m-d"),0,4);
		
		//Calcule le nombre d'ann�es o� la personne � fumer entre 2001 et maintenant(2015)
		if($duree < 10) {
			$periodeTrois = $duree;
			$duree = 0;
		} else {
			$periodeTrois = $yearNow - 2001;
			$duree = $duree - $periodeTrois;
		}		
		
		//Calcule le nombre d'ann�es o� la personne � fumer entre 1990 et 2000
		if($duree > 10 & $duree <= 20) {
			$periodeDeux = $duree;
			$duree = 0;
		} else {
			$periodeDeux = 2000 - 1990;
			$duree = $duree - $periodeDeux;
		}
		
		//Calcule le nombre d'ann�es o� la personne � fumer entre 1960 et 1989
		if($duree > 20) {
			$periodeUne = $duree;
			$duree = 0;
		} else {
			$periodeUne = $dureeTotale - $periodeDeux - $periodeTrois;			
		}
				
		//Le nombre de cigarettes fum�es sur les diff�rentes p�riodes
		$nbCigPeriodeUne = $nbCigarettesJours * 365 * $periodeUne;
		$nbCigPeriodeDeux = $nbCigarettesJours * 365 * $periodeDeux;
		$nbCigPeriodeTrois = $nbCigarettesJours * 365 * $periodeTrois;
		
		$argentDepense = ($nbCigPeriodeUne * $prix6090) + ($nbCigPeriodeDeux * $prix9000) + ($nbCigPeriodeTrois * $prix0015);
		
		return $argentDepense;
	}
	
	
?>