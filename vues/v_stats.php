<!DOCTYPE HTML>
<html>
	<head></head>
	<body>
	<div id="prototype;">
		<div id="acceuil2">
				<div id="image">
					<img alt="" src="styles/cochonsouris.png">
				</div>
				
				<div id="texte">
				<strong><h1>Voici vos statistiques</h1></strong>
				<span>Vous avez �conomis� environ<br></span>			
			 <?php echo("<h1>".$argentEconomise."�</h1> ");?>			 
		<span> et sauv�</span> 
			<?php echo("<h1>".$vieSauvee." jours</h1>"); ?>
		<span>  votre vie depuis que vous avez arr�t� de fumer.</span><br>	
		</div>

		</div>	
		<!-- Dans cette version sans base de donn�e les deux types de pages sont afficher ,
			lors de la seconde parti seul un des deux cas sera affich�. Si la
			l'utilisateur � d�ja arr�ter de fumer la version afficher sera
			accueil2 et dans le cas contraire c'est le acceuil3 qui sera afficher.
			(Le visuel de cochon d'acceuil3 ne sera pas le m�me mais n'a pas encore �t�
			r�aliser) -->
		<div id="acceuil3">
				<div id="image">
					<img alt="" src="styles/cochonsouris.png">
				</div>
				
				<div id="texte">
				<strong><h1>Voici vos statistiques</h1></strong>
				<span>Quand vous fumiez vous avez d�pens�<br></span>			
			 <?php echo("<h1>".$argentDepense."�</h1> ");?>			 
		<span><h1> et r�duit de</h1></span> 
			<?php echo("<h1>".$viePerdue." jours</h1>"); ?>
			<span>  votre esp�rance de vie </span> 
		
		</div>

		</div>
		</div>	
		<div id="perdu">
			 <?php echo(" ".$argentDepense." � et votre esp�rance de vie � �t� r�duite de ".$viePerdue." jours.");?><br><br>		
		</div>
	</body>
</html>