

<html>
	<head><h1>Voici vos statistiques</h1></head>
	<body>
		<div id="statistiques">
			 <?php echo("Quand vous fumiez vous avez dépensé ".$argentDepense." € et votre espérance de vie à été réduite de ".$viePerdue." jours.");?><br><br>		
		
			 <?php echo("Vous avez économisé ".$argentEconomise." € et sauvé ".$vieSauvee." jours de votre vie depuis que vous avez arrêté de fumer.");?><br><br>
			 
			 <p><?php echo($_SESSION["objCourt"]." : ");?><progress id="avancement" value="<?php echo($pourcentageCourt);?>" max="100"></progress></p>
			  
			 <p><?php echo($_SESSION["objMoyen"]." : ");?><progress id="avancement2" value="<?php echo($pourcentageMoyen);?>" max="100"></progress></p>
			  
			 <p><?php echo($_SESSION["objLong"]." : ");?><progress id="avancement3" value="<?php echo($pourcentageLong);?>" max="100"></progress></p>
			
		</div>	
	</body>
</html>