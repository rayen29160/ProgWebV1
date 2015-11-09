<!DOCTYPE HTML>
<html>
	<head><h1>Vous devez définir vos objectifs</h1></head>	
	<body>
		<form method="POST" action="index.php?uc=motivation">
			<span> Objectif à cours terme (exemple : un jeu vidéo)</span><input type="text" id="objCourt" name="court"/><span> Prix (€)</span><input type="text" id="prixCourt" name="prixcourt"/>
			<br><br>
			<span> Objectif à moyen terme (exemple : un écran plat)</span><input type="text" id="objMoyen" name="moyen"/><span> Prix (€)</span><input type="text" id="prixMoyen" name="prixmoyen"/>
			<br><br>
			<span> Objectif à long terme (exemple : une moto)</span><input type="text" id="objLong" name="long"/><span> Prix (€) </span><input type="text" id="prixLong" name="prixlong"/>
			<br>
			<div id="erreur"></div>
			<input type="submit" value = "Valider"/>
		</form>
	</body>
	
	<!-- Ce formulaire sera accessible lors de la deuxième étape. Il s'affichera lorsque l'utilisateur cliquera sur 'Motivation'
		 si il n'a pas définit ses objectifs lors de son inscription -->
</html>