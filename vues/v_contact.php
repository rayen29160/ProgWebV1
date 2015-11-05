<html>
	<head>
		<h1>Nous contacter</h1>
		<script src="scripts/verifChamps.js"></script>
	</head>
	<body>
		<div>
			<span>Votre nom* : </span><input type="text" id="nom"/><div id="erreur1"></div><br>
			<span>Votre adresse email* : </span><input type="text" id="email"/><div id="erreur2"></div><br>
			<span>Votre message* : </span><input type="textarea" id="message"/><div id="erreur3"></div><br>
			<input type="button" value="Envoyer" onClick="verifRps('nom', 'erreur1');verifRps('email', 'erreur2');verifRps('message', 'erreur3');"/>		
		</div>	
	</body>
	
	<!-- L'utilisateur pourra nous envoyer un mail lors de la prochaine étape lorsque le site sera hébergé -->
</html>