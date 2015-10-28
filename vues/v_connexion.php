<html>
	<head>
		<h1>Connexion au site</h1>
	</head>
	<body>
		<form method="POST" action="index.php?uc=connexion&action=valideConnexion">
			Identifiant :  <input type="text" name="id"/><br>
			Mot de passe : <input type="text" name="mdp"/><br>
			<input type="submit" value="Se connecter"/>		
		</form>
		<a href="vues/v_inscription.php">inscription</a>
	</body>
</html>
	