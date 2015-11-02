<html>
	<head><script src="scripts/verifChamps.js"></script></head>
	<body>
		<h1><?php echo("Bonjour ".$_SESSION["id"]);?></h1>		
		Entre votre nouveau mot de passe : <input type="password" id="mdp1"><br>
		Confirmer votre nouveau mot de passe : <input type="password" id="mdp2"><div id="erreur"></div><br>
		<input type="button" onClick="verifMdp('mdp1','mdp2', 'erreur');" value="Changer le mot de passe">			
	</body>
</html>