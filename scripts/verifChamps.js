
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
		
	if(estVide(id1)) {
		document.getElementById(id1).style.backgroundColor='red';
		nbErreur = nbErreur + 1;				
	}

	if(estVide(id2)) {
		document.getElementById(id2).style.backgroundColor='red';
		nbErreur = nbErreur + 1;
	}

	if(estVide(id3)) {
		document.getElementById(id3).style.backgroundColor='red';
		nbErreur = nbErreur + 1;
	}
		
	if(select.selectedIndex==0) {
		document.getElementById(idDivErreur).innerHTML="Vous devez sélectionner votre marque de cigarettes !";
		nbErreur = nbErreur + 1;
	}

	if(nbErreur==0) {
		//Si tous les champs sont remplis alors on soumet le formulaire
		return true;
	} else {
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