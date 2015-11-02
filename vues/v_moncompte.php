<html>
	<head>
		<script language="javascript">
		
			function verifMdp(){
				if(window.confirm('Etes-vous sur de vouloir changer de mot de passe ?')){				
					var mdp1 = document.getElementById("mdp1").value;
					var mdp2 = document.getElementById("mdp2").value;

					if(mdp1!=mdp2) {
						document.getElementById("erreur").innerHTML = '<font color="red">Les mots de passe ne sont pas identiques</font>';
						mdp2 = "";
					}
				}
			}
		</script>
	</head>
	<body>
		<h1><?php echo("Bonjour ".$_SESSION["id"]);?></h1>
		
		Entre votre nouveau mot de passe : <input type="password" id="mdp1"><br>
		Confirmer votre nouveau mot de passe : <input type="password" id="mdp2"><div id="erreur"></div><br>
		<input type="button" onClick="verifMdp();" value="Changer le mot de passe">
		
			
	</body>
</html>