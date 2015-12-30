<!DOCTYPE HTML>
<html>
	<head></head>
	<body>
		<div id="acceuil5">
			<div id="image">
				<img alt="" src="styles/cochonsouris.png">
			</div>
			<h1>Avancement de vos objectifs</h1>
			<div id="stat">
				<h2><strong><span>Court terme:</span></strong></h2><br>
				<p><?php echo($_SESSION["objCourt"]." : ");?><progress id="avancement" value="<?php echo($pourcentageCourt);?>" max="100"></progress><span id="obj"><?php echo($pourcentageCourt);?>%</span></p>
				<h2><strong><span>Moyen terme:</span></strong></h2><br>	  
				<p><?php echo($_SESSION["objMoyen"]." : ");?><progress id="avancement2" value="<?php echo($pourcentageMoyen);?>" max="100"></progress><span id="obj"><?php echo($pourcentageMoyen);?>%</span></p>
				<h2><strong><span>Long terme:</span></strong></h2><br>	  
				<p><?php echo($_SESSION["objLong"]." : ");?><progress id="avancement3" value="<?php echo($pourcentageLong);?>" max="100"></progress><span id="obj"><?php echo($pourcentageLong);?>%</span></p>			
			</div>
		</div>	
	</body>
</html>	
	
	
	
	
	