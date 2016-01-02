<!DOCTYPE HTML>
<html>
	<head><script src="scripts/verifChamps.js"></script></head>
	<body>
	
	<div id="acceuil">
		
		<div id="imgcochon">
		
		<img src="styles/cochonsilhouette.png">
		
		</div>
		<div id="formu">
		<h1><?php echo("Bonjour ".$_SESSION["id"]);?></h1>
		<form method="POST" action="index.php?uc=moncompte" onsubmit=" return (verifMdp('mdp1','mdp2', 'erreur') && VerifMail('mail', 'erreur') && verifMontantsObj('prixCourt', 'prixMoyen', 'prixlong', 'erreur'));">
			<span>Entre votre nouveau mot de passe : </span><input type="password" id="mdp1" name="mdp1"/>
			<br><br>
			<span>Confirmer votre nouveau mot de passe : </span><input type="password" id="mdp2" name="mdp2"/>
			<br><br>
			<span>Votre adresse mail : </span><input type="text" name="mail" id="mail" value="<?php echo $_SESSION["mail"];?>"/>
			<br><br>
			<span> Objectif à cours terme <br>(exemple : un jeu vidéo)</span><input type="text" id="objCourt" name="court" value="<?php echo $_SESSION["objCourt"];?>"/><span> Prix (€)</span><input type="text" id="prixCourt" name="prixcourt" value="<?php echo $_SESSION["prixObjCourt"];?>"/>
			<br><br>
			<span> Objectif à moyen terme<br> (exemple : un écran plat)</span><input type="text" id="objMoyen" name="moyen" value="<?php echo $_SESSION["objMoyen"];?>"/><span> Prix (€)</span><input type="text" id="prixMoyen" name="prixmoyen" value="<?php echo $_SESSION["prixObjMoyen"];?>"/>
			<br><br>
			<span> Objectif à long terme <br>(exemple : une moto)</span><input type="text" id="objLong" name="long" value="<?php echo $_SESSION["objLong"];?>"/><span> Prix (€) </span><input type="text" id="prixLong" name="prixlong" value="<?php echo $_SESSION["prixObjLong"];?>"/>
			<div id="erreur"></div><br>
			<input type="submit" value="Valider">
		</form>
		</div>
		</div>
		
		<!--  Ce formulaire enregistrera en base de données les informations modifiées pour la prochaine étape -->
	</body>
</html>