<?php
	if(isset($_POST["id2"])){
		
		$pdo->addmessage($_SESSION["util"], $_POST["id2"],$_POST["titre"],$_POST["texte"]);
	}

	include("vues/v_sommaire.php");
	include("vues/v_messages.php");	
?>