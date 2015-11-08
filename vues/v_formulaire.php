
<link rel="stylesheet" type="text/css" href="styles/Style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="jquery/jquery.js"></script>
<html>

	<!-- Ce formulaire sera vraiment fonctionnel lors de la prochaine étape, et sauvegardera les informations dans la base de données -->
	<head>
		<script src="scripts/verifChamps.js"></script>
		<script language="javascript">
			function afficher(etat) 
			{ 				
				document.getElementById("objectifs").style.visibility=etat; 
			} 
		</script>
	</head>
		
	<body>	
	<img src="styles/FOND2.png" id="bg" alt="">
	<div id="header">
	<img alt="banniere" src="styles/bannièressimple.png">
</div>	
	<div id="acceuil">
	<div id="imgcochon2">
		<img alt="" src="styles/avatarcochonPoint.png">
	</div>

	<div id="inscri">
	<h1>Dites m'en un peu plus sur vous ...</h1>
		<form method="POST" action="index.php?uc=motivation" name="formInformations" onsubmit="return (verificationRemplissage('age', 'ageDebut', 'nbCigarettes', 'marques', 'erreur') && verifNbCigarette('nbCigarettes', 'erreur') && verifMontantsObj('prixCourt', 'prixMoyen', 'prixLong', 'erreur') && verifAges('age', 'ageDebut', 'erreur'));">
		<span>Quel âge avez-vous ?* </span><input type="text" id="age" name="age"/><br><br>
		
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
		<br>
		<br>
		<span>Voulez-vous définir vos objectifs maintenant ?</span><INPUT type="radio" name="choix" value="oui" onclick="afficher('visible');" checked/>Oui<INPUT type="radio" name="choix" value="non" onclick="afficher('hidden');"/>Non
		<br><br>
		<div id="objectifs">
			<span> Objectif à cours terme<br> (exemple : un jeu vidéo)</span><input type="text" id="objCourt" name="court"/><span> Prix (€)</span><input type="text" id="prixCourt" name="prixcourt"/>
			<br><br>
			<span> Objectif à moyen terme<br> (exemple : un écran plat)</span><input type="text" id="objMoyen" name="moyen"/><span> Prix (€)</span><input type="text" id="prixMoyen" name="prixmoyen"/>
			<br><br>
			<span> Objectif à long terme<br> (exemple : une moto)</span><input type="text" id="objLong" name="long"/><span> Prix (€) </span><input type="text" id="prixLong" name="prixlong"/>
			<br><br>
		</div>
		
		<font color="red">Les champs * sont des champs obligatoires</font>
		
		<br>
		<div id="erreur"></div>
		<input type="submit" name="nom" value="Envoyer">
		
		</form>
		</div>
		</div>
	</body>
</html>
