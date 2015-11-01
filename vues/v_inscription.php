<link rel="stylesheet" type="text/css" href="styles/Style.css" />
<html>

	<head><h1>Remplissez ce formulaire</h1>
	<script language="javascript">
		//Enlève les espaces et renvoie true si le champ est vide
		function estVide(champId) {
			var value = document.getElementById(champId).value;
			value = value.trim();

			if (value === "") {
				return true;
			} else {
				return false;
			}
		}


		//Verifie que les champs ne sont pas vides. Si ils le sont leur background devient rouge
		function verificationRemplissage(id1, id2, id3, id4) {

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
				document.getElementById("erreur").innerHTML="Vous devez sélectionner votre marque de ciagrette !";
				nbErreur = nbErreur + 1;
			}

			if(nbErreur==0) {
				//Si tous les champs sont remplis alors on soumet le formulaire
				document.formInformations.submit();
			}
		}

		function changeImage() {
				var select= document.getElementById("test");				
				var style = select.style;	
									
				switch(select.selectedIndex) {
				case 0:
					break;
				case 1:
					style.background = "url('../images/Marlboro.PNG') no-repeat;";						
					break;
				case 2:
					style.background = "url('../images/LuckyStrike.PNG') no-repeat";
					break;
				case 3:
					style.background = "url('../images/Camel.PNG') no-repeat";
					break;
				}
		}			
	</script>
	</head>
		
	<body>		
		<form method="POST" action="index.php?uc=stats" name="formInformations">
		Quel âge avez-vous ?* <?php echo 'Peut être une liste déroulante avec choix date naissance ?'?><input type="text" id="age" name="age"/><br><br>
		
		Age auquel vous avez commencé ?*  <input type="text" id="ageDebut" name="ageDebut"/><br><br>
		
		Combien de cigarettes fumez-vous par jour ?*  <input type="text" id="nbCigarettes" name="nbCigarettes"/><br><br>		
		
		Quelle marque de cigarettes achetez-vous ?* 
		<select id="marques" name="listeMarques" onChange="changeImage()">
			<option value="0" selected>--- Votre marque de cigarette ---</option>
			<option value="1"><img src="images/Marloboro.PNG"/>Marlboro</option>
			<option value="2">Lucky Strike</option>
			<option value="3">Gitanes</option>
			<option value="4">Philip Maurice</option>
			<option value="5">Camel</option>
			<option value="6">Royale</option>
			<option value="7">Gauloises</option>
			<option value="8">Bastos</option>
			<option value="9">News</option>
			<option value="10">...</option>
		</select>
		<div id="erreur"></div>
		<br><br>
		<span> Objectif à cours terme (exemple : un jeu vidéo)</span><input type="text" id="objCourt" name="court"/><span> Prix (€)</span><input type="text" id="prixCourt" name="prixcourt"/>
		<br><br>
		<span> Objectif à moyen terme (exemple : un écran plat)</span><input type="text" id="objMoyen" name="moyen"/><span> Prix (€)</span><input type="text" id="prixMoyen" name="prixmoyen"/>
		<br><br>
		<span> Objectif à long terme (exemple : une moto)</span><input type="text" id="objLong" name="long"/><span> Prix (€) </span><input type="text" id="prixLong" name="prixlong"/>
		<br><br>
		
		
		<font color="red">Les champs * sont des champs obligatoires</font>
		
		<br><br>
		
		<input type="button" onClick="verificationRemplissage('age', 'ageDebut', 'nbCigarettes', 'marques');" value="Valider le formulaire"/>
		
		</form>
	</body>
</html>
