<?php 

class PdoGsb {
	private static $serveur = 'mysql:host=127.0.0.1';
	private static $bdd = 'dbname=arretecig';
	private static $user = 'root';
	private static $mdp = '';
	private static $monPdo;
	private static $monPdoGsb = null;
	/**
	 * Constructeur priv�, cr�e l'instance de PDO qui sera sollicit�e
	 * pour toutes les m�thodes de la classe
	 */
	private function __construct() {
		PdoGsb::$monPdo = new PDO ( PdoGsb::$serveur . ';' . PdoGsb::$bdd, PdoGsb::$user, PdoGsb::$mdp );
		PdoGsb::$monPdo->query ( "SET CHARACTER SET utf8" );
	}
	public function _destruct() {
		PdoGsb::$monPdo = null;
	}
	/**
	 * Fonction statique qui cr�e l'unique instance de la classe
	 * Appel : $instancePdoGsb = PdoGsb::getPdoGsb();
	 * 
	 * @return l'unique objet de la classe PdoGsb
	 */
	public static function getPdoGsb() {
		if (PdoGsb::$monPdoGsb == null) {
			PdoGsb::$monPdoGsb = new PdoGsb ();
		}
		return PdoGsb::$monPdoGsb;
	}
	
	/**
	 * R�cup�re les informations sur un utilisateur � partir de son mot de passe et son login
	 * (utilisateur_view est une vue sur les tables : utilisateur, objcourt, objmoyen, objlong)
	 * 
	 * @param String $login
	 * @param String $mdp
	 */
	public function getInfosUtilisateur($login, $mdp) {
		$req = "select * 
				from util_view 
				where login = :login
				and mdp= :mdp;";
		$rs = PdoGsb::$monPdo->prepare ( $req );
		$rs->bindParam ( ":login", $login );
		$rs->bindParam ( ":mdp", $mdp );
		$rs->execute ();
		$ligne = $rs->fetch ( PDO::FETCH_ASSOC );
		return $ligne;
	}
	
	/**
	 * Met � jour l'objectif court
	 * 
	 * @param int $idObjC
	 * @param String $nomObjC
	 * @param int $prixObjC
	 */
	public function majObjectifCourt($idObjC, $nomObjC, $prixObjC) {		
			$req = "update objcourt set objcourt.nomObjC = '".$nomObjC."', objcourt.prixObjC = ".$prixObjC."
			where idObjC = ".$idObjC.";";		
			PdoGsb::$monPdo->exec ( $req );
			
			$_SESSION["objCourt"] = $nomObjC;
			$_SESSION["prixObjCourt"] = $prixObjC;
	}
	
	/**
	 * Met � jour l'objectif moyen
	 *
	 * @param int $idObjM
	 * @param String $nomObjM
	 * @param int $prixObjM
	 */
	public function majObjectifMoyen($idObjM, $nomObjM, $prixObjM) {
		$req = "update objmoyen set objmoyen.nomObjM = '".$nomObjM."', objmoyen.prixObjM = ".$prixObjM."
		where idObjM = ".$idObjM.";";		
		PdoGsb::$monPdo->exec ( $req );
		
		$_SESSION["objMoyen"] = $nomObjM;
		$_SESSION["prixObjMoyen"] = $prixObjM;
	}
	
	
	/**
	 * Met � jour l'objectif long
	 *
	 * @param int $idObjL
	 * @param String $nomObjL
	 * @param int $prixObjL
	 */
	public function majObjectifLong($idObjL, $nomObjL, $prixObjL) {
		$req = "update objlong set objlong.nomObjL = '".$nomObjL."', objcourt.prixObjL = ".$prixObjL."
		where idObjL = ".$idObjL.";";		
		PdoGsb::$monPdo->exec ( $req );
		
		$_SESSION["objLong"] = $nomObjL;
		$_SESSION["prixObjLong"] = $prixObjL;
	}
	
	
	/**
	 * Met � jour l'argent �conomis� par l'utilisateur
	 * 
	 * @param int $login
	 * @param double $argentEconomise
	 */
	public function majArgentEconomise($login, $argentEconomise) {
		$req = "update utilisateur set argentEconomise = ".$argentEconomise."
		where login = '".$login."';";	
		PdoGsb::$monPdo->exec ( $req );
	}
	
	
	/**
	 * Met � jour l'argent d�pens� par l'utilisateur
	 * 
	 * @param int $login
	 * @param double $argentDepense
	 */
	public function majArgentDepense($login, $argentDepense) {
		$req = "update utilisateur set argentDepense = ".$argentDepense."
		where login = '".$login."';";
		PdoGsb::$monPdo->exec ( $req );
	}
	
	/**
	 * Met � jour le mot de passe et l'adresse mail de l'utilisateur de l'utilisateur
	 *
	 * @param int $login
	 * @param String $newMdp
	 * @param String $mail 
	 */
	public function majMdp($login, $newMdp, $mail) {
		$req = "update utilisateur set mdp = '".$newMdp."', mail ='".$mail."'
		where login = '".$login."';";			
		PdoGsb::$monPdo->exec ( $req );		
	}
}
?>