<!DOCTYPE HTML>
<html>
	<head><script src="scripts/verifChamps.js"></script>
	<link rel="stylesheet" type="text/css" href="styles/Style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="jquery/jquery.js"></script></head>
	<body>
	<img src="styles/FOND2.png" id="bg" alt="">
	<div id="header">
	<img alt="banniere" src="styles/bannieressimple.png">
</div>
	<div  id="acceuil">
	<div id="imgcochon2">
		<img alt="" src="styles/avatarcochonPoint.png">
	</div>
	<div id="inscri">
		<h1 id="chiant">Dans un premier temps ,<br> inscrivez-vous !</h1>
		<form method="POST" action="index.php?uc=formulaire" onsubmit="return (verifMdp('mdp1','mdp2','erreur') && VerifMail('mail', 'erreur'));">
			<span>Saisissez un identifiant : </span><input type="text" id="id"><br><br>
			<span>Saisissez un mot de passe : </span><input type="password" id="mdp1"><br><br>
			<span>Confirmez le mot de passe : </span><input type="password" id="mdp2"><br><br>
			<span>Saisissez votre adresse mail : </span><input type="text" id="mail"><div id="erreur"></div><br>
			<input type="submit" value="Je m'inscris">		
		</form>
		</div>
		</div>
		
	</body>
	
	<!-- L'inscription marchera lors de la prochaine étape et sauvegardera les informations dans la base de données.
		 Une fois l'inscription validée l'utilisateur est redirigé vers une formulaire dans lequel il renseigne ses 
		 informations qui nous permettent par la suite de faire les calculs. 
		 
		 Il est possible d'être redirigé vers ce formulaire ACTUELLEMENT en remplissant les champs de l'inscription.-->
</html>