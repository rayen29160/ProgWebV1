
/**
 * Permet de vérifier si un champ est vide
 * 
 * @param champId
 * @returns {Boolean}
 * 		true si le champ est vide
 * 		false sinon
 */
function estVide(champId) {
	var value = document.getElementById(champId).value;
	value = value.trim();

	if (value === "") {
		return true;
	} else {
		return false;
	}
}

/**
 * Permet de vérifier si les mots de passe sont identiques et qu'ils fassent plus de 7 caractères
 * Ecrit un message d'erreur dans la div dont l'id a été précisé en paramètre
 * 
 * @param idMdp1
 * @param idMdp2
 * @param idDivErreur
 */
function verifMdp(idMdp1, idMdp2, idDivErreur){
	
	var submit = true;			
	var mdp1 = document.getElementById(idMdp1).value;
	var mdp2 = document.getElementById(idMdp2).value;

	if(mdp1.length < 7 && mdp2.length < 7){
		document.getElementById(idDivErreur).innerHTML = '<font color="red">Les mots de passe doivent contenir minimum 7 caracteres</font>';
		submit = false;
	}
					
	if(mdp1!=mdp2){
		document.getElementById(idDivErreur).innerHTML = '<font color="red">Les mots de passe ne sont pas identiques</font>';
		document.getElementById(idMdp2).value = "";
		submit = false;
	}
	
	return submit;
}

/**
 * Verifie que les champs des 3 premières id ne sont pas vides et que un élément de la liste déroulante est sélectionnée
 * Ecrit le message d'erreur s'il y en a un dans la div dont on a précisé l'id en paramètre
 * 
 * @param id1
 * 		id du premier champ à vérifier
 * @param id2
 * 		id du second champ à vérifier
 * @param id3
 * 		id du troisième champ à vérifier
 * @param id4
 * 		id de la liste déroulante à vérifier
 * @param idDivErreur
 * 		id de la div où écrire le message d'erreur
 * @returns {Boolean}
 * 		true si on peut valider le formulaire (les champs sont remplis
 */
function verificationRemplissage(id1, id2, id3, id4, idDivErreur) {

	var select = document.getElementById(id4);
	var nbErreur = 0;
	var msg;
		
	if(estVide(id1)) {
		document.getElementById(id1).style.backgroundColor='red';
		nbErreur = nbErreur + 1;
		msg = "Vous devez saisir votre age ! <BR>";
	}

	if(estVide(id2)) {
		document.getElementById(id2).style.backgroundColor='red';
		nbErreur = nbErreur + 1;
		msg = msg + "Vous devez saisir l'age auquel vous avez commence a fumer ! <BR>";
	}

	if(estVide(id3)) {
		document.getElementById(id3).style.backgroundColor='red';
		nbErreur = nbErreur + 1;
		msg = msg + "Vous devez saisir le nombre de cigarettes que vous fumez en moyenne par jour ! <BR>";
	}
		
	if(select.selectedIndex==0) {
		msg = msg + "Vous devez selectionner votre marque de cigarettes ! <BR>";
		
		nbErreur = nbErreur + 1;
	}
	
	if(nbErreur==0) {
		//Si tous les champs sont remplis alors on soumet le formulaire
		return true;
	} else {
		document.getElementById(idDivErreur).innerHTML= msg;
		return false;
	}			
}

/**
 * Vérifie le remplissage d'un champs, si il est vide écrit un message d'erreur dans une div
 * @param idChamp
 * @param idDivErreur
 * @returns {Boolean}
 * 		true si le champ est rempli
 * 		false sinon
 */
function verifRps(idChamp, idDivErreur) {
	var nbErreur = 0;
		
	if(estVide(idChamp)) {
		document.getElementById(idDivErreur).innerHTML = "<font color='red'> Vous devez remplir ce champ !</font>";
		nbErreur = nbErreur + 1;				
	} else {
		document.getElementById(idDivErreur).innerHTML = "";
	}

	if(nbErreur==0) {
		//Si le champs est rempli alors on soumet le formulaire
		return true;
	} else {
		return false;
	}			
}


/**
 * Fonction qui permet de vérifier la validité d'une adresse mail
 * 
 * @param mailteste
 * @returns {Boolean}
 * 		true si l'adresse est valide
 * 		false sinon et écrit un message d'erreur dans une div
 */
function VerifMail(idMail, idDivErreur){
	var mail = document.getElementById(idMail).value ;
	var valide = false;

	for(var j=1;j<(mail.length);j++){
		if(mail.charAt(j)=='@'){
			if(j<(mail.length-4)){
				for(var k=j;k<(mail.length-2);k++){
					if(mail.charAt(k)=='.'){
						valide = true;
					}					
				}
			}
		}
	}
	if(valide == false){
		document.getElementById(idDivErreur).innerHTML = "<FONT color='red'>L'adresse mail n'est pas valide !</FONT>";
	}
	
	return valide;
}

/**
 * Verifie si les montants des objectifs sont cohérents entre eux
 * (prixObjCourt < prixOjbMoy < prixObjLong)
 * 
 * @param idPrixObjCourt
 * @param idPrixObjMoy
 * @param idPrixObjLong
 * @param idDivErreur
 * @returns {Boolean}
 * 		true si les montants sont valides
 * 		false sinon et écrit un message d'erreur dans une div
 */
function verifMontantsObj(idPrixObjCourt, idPrixObjMoy, idPrixObjLong, idDivErreur) {
	var prixCourt = parseInt(document.getElementById(idPrixObjCourt).value);
	var prixMoy = parseInt(document.getElementById(idPrixObjMoy).value);
	var prixLong = parseInt(document.getElementById(idPrixObjLong).value);	
	var radioButton = $("input[type=radio]:checked").val();
    
	if(radioButton == "non") {
		return true;
	} else {
		if((prixCourt < prixMoy) && (prixMoy < prixLong)){
			return true;
		} else {
			alert(typeof(prixCourt));
			document.getElementById(idDivErreur).innerHTML = "<FONT color='red'>Le prix de l'objectif a court terme doit etre inferieur a celui a moyen terme. <BR>" +
			"Le prix de l'objectif a moyen terme doit aussi etre inferieur a celui a long terme !</FONT>";
			return false;
		}
	}	
}


/**
 * Verifie si le le nombre de cigarette est bien positif et non nul
 * 
 * @param idNbCig
 * @param idDivErreur
 * @returns {Boolean}
 * 		true si le nombre de cigarette est valide
 * 		false sinon et écrit un message d'erreur dans une div
 */
function verifNbCigarette(idNbCig, idDivErreur) {

	var nbCig = parseInt(document.getElementById(idNbCig).value);
	
	if(nbCig <= 0){		
		document.getElementById(idDivErreur).innerHTML = "<FONT color='red'>Le nombre de cigarettes ne peut pas etre negatif !</FONT>";
		return false;
	} else {
		return true;
	}
}


/**
 * Verifie la cohérence des âges saisis par la personne
 * (L'âge auquel la personne a commencé à fumer ne peut pas être supérieur à son âge actuel)
 * 
 * @param idAge
 * @param idAgeDebut
 */
function verifAges(idAge, idAgeDebut, idDivErreur){
	var age = parseInt(document.getElementById(idAge).value);
	var ageDebut = parseInt(document.getElementById(idAgeDebut).value);	
	
	if(ageDebut >= age) {
		document.getElementById(idDivErreur).innerHTML = "<FONT color='red'>L'age auquel vous avez commence a fumer ne peut pas etre superieur a votre age actuel !</FONT>";
		return false;
	} else {
		return true;
	}
}