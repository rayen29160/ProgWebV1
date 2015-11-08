<?php	
	date_default_timezone_set('Europe/Paris');

	$prix6090 = 1.98/20; //prix d'une cigarette Marlboro entre 1960 et 1989 (paquet de 20)
	$prix9000 = 2.60 / 20; //prix d'une cigarette Marlboro entre 1990 et 1999 (paquet de 20)
	$prix0015 = 5.10 / 20; //prix d'une cigarette Marlboro entre 2000 et 2015 (paquet de 20)

	/**	
	 * G�re la connexion (cr�e une session si la connexion est valide)
	 * 
	 * @param string $id
	 * @param string $mdp
	 * @return boolean
	 * 		true si l'identifiant et le mot de passe sont bons
	 * 		false sinon 		
	 */
	function connexion($id, $mdp){		
		if($id=="abc" && $mdp=="abc") {
			if(!isset($_SESSION))
			session_start();						
			$_SESSION["connecte"] = 1 ;
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 * Calcule l'argent d�pens� depuis que la personne a commenc� � fumer
	 * 
	 * @param int $age
	 * @param int $ageDebut
	 * @param int $nbCigarettesJours
	 * @param string $marqueCigarettes
	 * @return number 
	 * 		l'argent d�pens�
	 */
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
		
		return round($argentDepense);
	}
	
	/**
	 * Calcule l'argent que la personne a �conomis� depuis qu'elle a arr�t� de fumer
	 * 
	 * @param string $dateArret	jj/mm/aaaa
	 * @param int $nbCigarettesJours
	 * @param string $marqueCigarettes
	 * @return number
	 * 		l'argent �conomis�
	 */
	function argentEconomise($dateArret, $nbCigarettesJours, $marqueCigarettes) {
		global $prix0015;		
		$dureeArretJours = dureeEnJours($dateArret);		
		return number_format(round($dureeArretJours * $nbCigarettesJours * $prix0015));		
	}
	
	/**
	 * Calcule le nombre de jours qui s�pare 2 dates
	 * 
	 * @param string $dateArret  jj/mm/aaaa
	 * @return number
	 * 		la diff�rence en jours
	 */
	function dureeEnJours($dateArret) {		
		$dateArret = str_replace("/","-",$dateArret);
		//On divise par 86400 car c'est le nombre de seconde dans un jour(60*60*24)		
		return round((strtotime("now") - strtotime($dateArret))/86400);
	}
	
	
	
	/**
	 * Renvoie le pourcentage de l'objectif atteint
	 * 
	 * @param double $argentEconomise
	 * @param double $prixObjectif
	 * @return number
	 * 		le pourcentage accompli
	 */
	function pourcentageObjectif($argentEconomise, $prixObjectif){		
		if($prixObjectif==0){
			return 0;
		}
		
		if(round(($argentEconomise*100)/$prixObjectif)>100) {
			return 100;
		} else {
			return round(($argentEconomise*100)/$prixObjectif);
		}
	}
	
	
	/**
	 * Calcule le nombre total de cigarettes fum�es depuis que la personne a commenc�
	 * 
	 * @param int $age
	 * @param int $ageDebut
	 * @param int $nbCigarettesJours
	 * @return number
	 * 		le nombre de cigarette fum�es
	 */
	function nbCigarettesTotal($age, $ageDebut, $nbCigarettesJours) {
		$duree = $age - $ageDebut;
		return $duree * 365 * $nbCigarettesJours;
	}	
	
	
	/**
	 * Calcule l'esp�rance de vie perdue depuis que la personne fume
	 * (1 cigarette = 8 min perdues)
	 * 
	 * @param int $age
	 * @param int $ageDebut
	 * @param int $nbCigarettesJours
	 * @return int
	 * 		l'esp�rance de vie perdue
	 */
	function esperanceViePerdue($age, $ageDebut, $nbCigarettesJours) {
		$nbCigTotal = nbCigarettesTotal($age, $ageDebut, $nbCigarettesJours);		
		$minPerdues = $nbCigTotal * 8;
		$joursPerdus = floor(($minPerdues/60)/24);
		return $joursPerdus;
	}
	
	
	/**
	 * Calcule l'esp�rance de vie sauv�e depuis que la personne a arr�t� de fumer
	 * (1 cigarette non fum�e = 8 min sauv�es)
	 * 
	 * @param date $dateArret
	 * @param int $nbCigarettesJour
	 * @return number
	 */
	function esperanceVieGagnee($dateArret, $nbCigarettesJour) {
		$nbJours = dureeEnJours($dateArret);		
		$nbCigArret = $nbJours*$nbCigarettesJour;		
		$minSauvees = $nbCigArret*8;		
		$joursSauves = floor(($minSauvees/60)/24);		
		return $joursSauves;
	}
	
	/**
	 * Renvoie le nombre de fois que le r�ve a �t� d�pass�
	 * 
	 * @param int $argentDepense
	 * @param int $prixReves
	 */
	function nbRevesDepasse($argentDepense, $prixReves){
		$nb = $argentDepense / $prixReves;
		return round($nb,1);
	}
	
	
	
?>