<!DOCTYPE HTML>
<html>
	<head><h1>Vous devez d�finir vos objectifs</h1></head>	
	<body>
		<form method="POST" action="index.php?uc=motivation">
			<span> Objectif � cours terme (exemple : un jeu vid�o)</span><input type="text" id="objCourt" name="court"/><span> Prix (�)</span><input type="text" id="prixCourt" name="prixcourt"/>
			<br><br>
			<span> Objectif � moyen terme (exemple : un �cran plat)</span><input type="text" id="objMoyen" name="moyen"/><span> Prix (�)</span><input type="text" id="prixMoyen" name="prixmoyen"/>
			<br><br>
			<span> Objectif � long terme (exemple : une moto)</span><input type="text" id="objLong" name="long"/><span> Prix (�) </span><input type="text" id="prixLong" name="prixlong"/>
			<br>
			<div id="erreur"></div>
			<input type="submit" value = "Valider"/>
		</form>
	</body>
	
	<!-- Ce formulaire sera accessible lors de la deuxi�me �tape. Il s'affichera lorsque l'utilisateur cliquera sur 'Motivation'
		 si il n'a pas d�finit ses objectifs lors de son inscription -->
</html>