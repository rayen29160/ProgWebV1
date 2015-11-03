<html>
	<head>
		<h1>Nous contacter (L'envoi de mail sera opérationnel une fois le site hebergé)</h1>
		<script src="scripts/verifChamps.js"></script>
	</head>
	<body>
		<div>
			Votre nom* : <input type="text" id="nom"/><div id="erreur1"></div><br>
			Votre adresse email* : <input type="text" id="email"/><div id="erreur2"></div><br>
			Votre message* : <input type="textarea" id="message"/><div id="erreur3"></div><br>
			<input type="button" value="Envoyer" onClick="verifRps('nom', 'erreur1');verifRps('email', 'erreur2');verifRps('message', 'erreur3');"/>		
		</div>	
	</body>
</html>