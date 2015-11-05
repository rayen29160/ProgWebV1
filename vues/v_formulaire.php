<link rel="stylesheet" type="text/css" href="styles/Style.css" />
<html>
	<!-- Ce formulaire sera vraiment fonctionnel lors de la prochaine étape, et sauvegardera les informations dans la base de données -->
	<head><h1>Remplissez ce formulaire</h1>
		<script src="scripts/verifChamps.js"></script>
		<script language="javascript">
			function afficher(etat) 
			{ 				
				document.getElementById("objectifs").style.visibility=etat; 
			} 
		</script>
	</head>
		
	<body>		
		<form method="POST" action="index.php?uc=motivation" name="formInformations" onsubmit="return verificationRemplissage('age', 'ageDebut', 'nbCigarettes', 'marques, 'erreur');">
		<span>Quel âge avez-vous ?* </span><?php echo 'Peut être une liste déroulante avec choix date naissance ?'?><input type="text" id="age" name="age"/><br><br>
		
		<span>Age auquel vous avez commencé ?* </span> <input type="text" id="ageDebut" name="ageDebut"/><br><br>
		
		<span>Combien de cigarettes fumez-vous par jour ?* </span><input type="text" id="nbCigarettes" name="nbCigarettes"/><br><br>		
		
		<span>Quelle marque de cigarettes achetez-vous ?* </span>
		<select id="marques" name="listeMarques">
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
		<br>
		<span>Voulez-vous définir vos objectifs maintenant ?</span><INPUT type="radio" name="choix" value="oui" onclick="afficher('visible');" checked/>Oui<INPUT type="radio" name="choix" value="non" onclick="afficher('hidden');"/>Non
		<br><br>
		<div id="objectifs">
			<span> Objectif à cours terme (exemple : un jeu vidéo)</span><input type="text" id="objCourt" name="court"/><span> Prix (€)</span><input type="text" id="prixCourt" name="prixcourt"/>
			<br><br>
			<span> Objectif à moyen terme (exemple : un écran plat)</span><input type="text" id="objMoyen" name="moyen"/><span> Prix (€)</span><input type="text" id="prixMoyen" name="prixmoyen"/>
			<br><br>
			<span> Objectif à long terme (exemple : une moto)</span><input type="text" id="objLong" name="long"/><span> Prix (€) </span><input type="text" id="prixLong" name="prixlong"/>
			<br><br>
		</div>
		
		<font color="red">Les champs * sont des champs obligatoires</font>
		
		<br><br>
		
		<input type="submit" name="nom" value="Envoyer">
		
		</form>
	</body>
</html>
