<!DOCTYPE HTML>
<html>
	<head>
		
		<script src="scripts/verifChamps.js"></script>
	</head>
	<body>
		<div id="acceuil">
		
			<div id="contact">
			<h1>Nous contacter</h1>
			<span>Votre nom* : <br></span><input type="text" id="nom"/><div id="erreur1"></div><br>
			<span>Votre adresse email* : <br></span><input type="text" id="email" value="<?php echo $_SESSION["mail"];?>"/><div id="erreur2"></div><br>
			<span>Votre message* : <br></span><textarea type="message" id="message"></textarea><div id="erreur3"></div><br>
			<input type="button" value="Envoyer" onClick="verifRps('nom', 'erreur1');verifRps('email', 'erreur2');verifRps('message', 'erreur3');"/>		
			</div>
		</div>	
	</body>
	
	<!-- L'utilisateur pourra nous envoyer un mail lors de la prochaine étape lorsque le site sera hébergé -->
</html>