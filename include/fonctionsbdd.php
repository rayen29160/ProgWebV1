<?php 

class PdoGsb {
	private static $serveur = 'mysql:host=127.0.0.1';
	private static $bdd = 'dbname=arretecig';
	private static $user = 'root';
	private static $mdp = '';
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
			$req = "update objcourt set objcourt.nomObjC = '".$nomObjC."', objcourt.prixObjC = ".$prixObjC."
			where idObjC = ".$idObjC.";";		
			PdoGsb::$monPdo->exec ( $req );
			
			$_SESSION["objCourt"] = $nomObjC;
			$_SESSION["prixObjCourt"] = $prixObjC;
	}
	
	/**
	 * Met à jour l'objectif moyen
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
	 * Met à jour l'objectif long
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
	 * Met à jour l'argent économisé par l'utilisateur
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
	 * Met à jour l'argent dépensé par l'utilisateur
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
	 * Met à jour le mot de passe et l'adresse mail de l'utilisateur de l'utilisateur
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
	
	/**
	 * Permet de savoir si l'adresse mail n'est pas déjà utilisée par un autre compte
	 * @param String $email
	 */
	public function verifEmail($email) {
		$req = "select *
				from util_view
				where mail = :email;";
		$rs = PdoGsb::$monPdo->prepare ( $req );
		$rs->bindParam ( ":email", $email );
		$rs->execute ();
		$ligne = $rs->fetch ( PDO::FETCH_ASSOC );
		return $ligne;
	}
	
	
	/**
	 * Permet de savoir si le login n'est pas déjà utilisé par un autre compte
	 * 
	 * @param String $login
	 */
	public function verifLogin($login) {
		$req = "select *
				from util_view
				where login = :login;";
		$rs = PdoGsb::$monPdo->prepare ( $req );
		$rs->bindParam ( ":login", $login );
		$rs->execute ();
		$ligne = $rs->fetch ( PDO::FETCH_ASSOC );
		return $ligne;
	}
	
	
	
	public function addNewUtil($login, $mdp, $email) {
		$req = "insert into utilisateur(login, mdp, mail) VALUES('".$login."','".$mdp."','".$email."');";		
		PdoGsb::$monPdo->exec ( $req );
	}
	
	public function updateNewUtil($idUtil,$age,$ageDebut,$nbCig,$marque,$argentDepense,
			$argentEconomise,$dateArret,$choixObjectifs) {
		$req = "UPDATE utilisateur 
				SET age=".$age.", ageDebut=".$ageDebut.",
				nbCigarettes=".$nbCig.", marque='".$marque."', argentDepense=".$argentDepense.", 
				argentEconomise=".$argentEconomise.", dateArret='".$dateArret."', choixObjectifs=".choixObjectifs."
				WHERE idUtil=".$idUtil.";";
		PdoGsb::$monPdo->exec($req);
	}
		
	
	
	
	
	
	//FLORENT
	public function addfriends($idUtil, $add) {
		$req = "insert into contact VALUES(':idUtil1',':add','"+date("YYY-mm-dd")+","+date("h:i:s")+")";
		$rs = PdoGsb::$monPdo->prepare ( $req );
		$rs->bindParam ( ":idUtil1", $idUtil );
		$rs->bindParam ( ":add", $add );
		PdoGsb::$monPdo->exec ( $req );
	}
	
	public function addmessage($idUtil, $util2,$txt) {
		$req = "insert into message VALUES(':idUtil1',':util2','"+date("YYY-mm-dd")+","+date("h:i:s")+",:message)";
		$rs = PdoGsb::$monPdo->prepare ( $req );
		$rs->bindParam ( ":idUtil1", $idUtil );
		$rs->bindParam ( ":util2", $util2 );
		$rs->binParam(":message",$txt);
		PdoGsb::$monPdo->exec ( $req );
	}
	
	public function messagevue($idUtil){
					$req = "select count(*)
				from message
				where de = :de
				and vue=0;";
			$rs = PdoGsb::$monPdo->prepare ( $req );
			$rs->bindParam ( ":de", $idUtil );
			$rs->execute ();
			$nb = $rs->fetch ( PDO::FETCH_ASSOC );
			return $nb;
		
	
	}
	
	public function messagenotif($idUtil){
		$req = "select count(*)
				from message
				where de = :de
				and notifié=0;";
		$rs = PdoGsb::$monPdo->prepare ( $req );
		$rs->bindParam ( ":de", $idUtil );
		$rs->execute ();
		$nb = $rs->fetch ( PDO::FETCH_ASSOC );
		return $nb;
	
	
	}
	public function amisliste($util){
	$req = "select Cutil2
				from  contact
				where Cutil1=:util
				and Cvalidé=1";
	$rs = PdoGsb::$monPdo->prepare ( $req );
	$rs->bindParam ( ":util", $util );

	$rs->execute ();
	$ligne = $rs->fetch ( PDO::FETCH_ASSOC );
	return $ligne;
	
	}
	
}
?>