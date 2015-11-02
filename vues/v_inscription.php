<html>
	<head><script src="scripts/verifChamps.js"></script></head>
	<body>
		<h1>Inscrivez-vous</h1>
		Saisissez un identifiant : <input type="text" id="identifiant"><br>
		Saisissez un mot de passe : <input type="password" id="mdp1"><br>
		Confirmez le mot de passe : <input type="password" id="mdp2"><div id="erreur"></div><br>
		Saisissez votre adresse mail : <input type="text" id="mail"><br>
		<input type="button" value="Je m'inscris" onClick="verifMdp('mdp1','mdp2','erreur');">
	</body>
</html>