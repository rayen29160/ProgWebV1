<<!DOCTYPE div PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<div id=acceuil2>

<!--debut du formulaire-->
<?php 

	$tabmess =	$pdo->retrivemessage($_SESSION["util"]);
	for($i=0;$i<count($tabmess);$i++){
	echo "aaaaaaaaaaa<br>";
		echo $i;
}


?>
<!--fin du formulaire-->
 
<!--preparation de l'affichage des resultats-->
<div id="results"></div></div>
	</body>
</html>	
	