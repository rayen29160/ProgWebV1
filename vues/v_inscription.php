<html>
	<head><script src="scripts/verifChamps.js"></script></head>
	<body>
		<h1>Inscrivez-vous</h1>
		<form method="POST" action="index.php?uc=formulaire" onsubmit="return verifMdp('mdp1','mdp2','erreur');">
			<span>Saisissez un identifiant : </span><input type="text" id="id"><br><br>
			<span>Saisissez un mot de passe : </span><input type="password" id="mdp1"><br><br>
			<span>Confirmez le mot de passe : </span><input type="password" id="mdp2"><div id="erreur"></div><br>
			<span>Saisissez votre adresse mail : </span><input type="text" id="mail"><br><br>
			<input type="submit" value="Je m'inscris">		
		</form>
	</body>
	
	<!-- L'inscription marchera lors de la prochaine �tape et sauvegardera les informations dans la base de donn�es.
		 Une fois l'inscription valid�e l'utilisateur est redirig� vers une formulaire dans lequel il renseigne ses 
		 informations qui nous permettent par la suite de faire les calculs. 
		 
		 Il est possible d'�tre redirig� vers ce formulaire ACTUELLEMENT en remplissant les champs de l'inscription.-->
</html>