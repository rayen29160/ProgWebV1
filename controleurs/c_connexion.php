<?php
	$id = $_POST['id'];
	$mdp = $_POST['mdp'];
	
	if($id=="toto"&&$mdp="toto")
	{
		echo '<script language="javascript">alert("Connexion réussie");</script>';
	} else {
		echo '<script language="javascript">alert("Identifiant ou mot de passe incorrect");</script>';
	}
?>