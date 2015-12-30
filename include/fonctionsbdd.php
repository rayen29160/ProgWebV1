<?php 

class PdoGsb {
	private static $serveur = 'mysql:host=10.29.133.72';
	private static $bdd = 'dbname=GSB';
	private static $user = 'rannou-n';
	private static $mdp = 'mygroupe7';
	private static $monPdo;
	private static $monPdoGsb = null;
	/**
	 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
	 * pour toutes les méthodes de la classe
	 */
	private function __construct() {
		PdoGsb::$monPdo = new PDO ( PdoGsb::$serveur . ';' . PdoGsb::$bdd, PdoGsb::$user, PdoGsb::$mdp );
		PdoGsb::$monPdo->query ( "SET CHARACTER SET utf8" );
	}
	public function _destruct() {
		PdoGsb::$monPdo = null;
	}
	/**
	 * Fonction statique qui crée l'unique instance de la classe
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
	 * Récupère les informations sur un utilisateur à partir de son mot de passe et son login
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
	 * Met à jour l'objectif court
	 * 
	 * @param int $idObjC
	 * @param String $nomObjC
	 * @param int $prixObjC
	 */
	public function majObjectifCourt($idObjC, $nomObjC, $prixObjC) {		
			$req = "update objcourt set objcourt.nomObjC = :nomObjC, objcourt.prixObjC = :prixObjC
			where idObjC = :idObjC";
			$rs = PdoGsb::$monPdo->prepare ( $req );
			$rs->bindParam ( ":nomObjC", $nomObjC );
			$rs->bindParam ( ":prixObjC", $prixObjC );
			$rs->bindParam ( ":idObjC", $idObjC );
			PdoGsb::$monPdo->exec ( $req );
	}
	
	/**
	 * Met à jour l'objectif moyen
	 *
	 * @param int $idObjM
	 * @param String $nomObjM
	 * @param int $prixObjM
	 */
	public function majObjectifMoyen($idObjM, $nomObjM, $prixObjM) {
		$req = "update objmoyen set objmoyen.nomObjM = :nomObjM, objmoyen.prixObjM = :prixObjM
		where idObjM = :idObjM";
		$rs = PdoGsb::$monPdo->prepare ( $req );
		$rs->bindParam ( ":nomObjM", $nomObjM );
		$rs->bindParam ( ":prixObjM", $prixObjM );
		$rs->bindParam ( ":idObjM", $idObjM );
		PdoGsb::$monPdo->exec ( $req );
	}
	
	
	/**
	 * Met à jour l'objectif long
	 *
	 * @param int $idObjL
	 * @param String $nomObjL
	 * @param int $prixObjL
	 */
	public function majObjectifLong($idObjL, $nomObjL, $prixObjL) {
		$req = "update objlong set objlong.nomObjL = :nomObjL, objcourt.prixObjL = :prixObjL
		where idObjL = :idObjL";
		$rs = PdoGsb::$monPdo->prepare ( $req );
		$rs->bindParam ( ":nomObjL", $nomObjL );
		$rs->bindParam ( ":prixObjL", $prixObjL );
		$rs->bindParam ( ":idObjL", $idObjL );
		PdoGsb::$monPdo->exec ( $req );
	}
	
	
	/**
	 * Met à jour l'argent économisé par l'utilisateur
	 * 
	 * @param int $idUtil
	 * @param double $argentEconomise
	 */
	public function majArgentEconomise($idUtil, $argentEconomise) {
		$req = "update utilisateur set utilisateur.argentEconomise = :argentEconomise
		where idUtil = :idUtil";
		$rs = PdoGsb::$monPdo->prepare ( $req );
		$rs->bindParam ( ":idUtil", $idUtil );
		$rs->bindParam ( ":argentEconomise", $argentEconomise );
		PdoGsb::$monPdo->exec ( $req );
	}
	
	
	/**
	 * Met à jour l'argent dépensé par l'utilisateur
	 * 
	 * @param int $idUtil
	 * @param double $argentDepense
	 */
	public function majArgentDepense($idUtil, $argentDepense) {
		$req = "update utilisateur set utilisateur.argentDepense = :argentDepense
		where idUtil = :idUtil";
		$rs = PdoGsb::$monPdo->prepare ( $req );
		$rs->bindParam ( ":idUtil", $idUtil );
		$rs->bindParam ( ":argentEconomise", $argentEconomise );
		PdoGsb::$monPdo->exec ( $req );
	}
	
	/**
	 * Met à jour le mot de passe de l'utilisateur
	 *
	 * @param int $idUtil
	 * @param String $newMdp
	 */
	public function majMdp($idUtil, $newMdp) {
		$req = "update utilisateur set utilisateur.mdp = :newMdp
		where idUtil = :idUtil";
		$rs = PdoGsb::$monPdo->prepare ( $req );
		$rs->bindParam ( ":idUtil", $idUtil );
		$rs->bindParam ( ":newMdp", $newMdp );
		PdoGsb::$monPdo->exec ( $req );
	}
	
}
?>