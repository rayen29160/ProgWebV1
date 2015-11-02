function verifMdp(){
	if(window.confirm('Etes-vous sur de vouloir changer de mot de passe ?')){				
		var mdp1 = document.getElementById("mdp1").value;
		var mdp2 = document.getElementById("mdp2").value;

		if(mdp1.length < 7 && mdp2.length < 7)
		{
			document.getElementById("erreur").innerHTML = '<font color="red">Les mots de passe doivent contenir minimum 7 caracteres</font>';
		}
					
		if(mdp1!=mdp2) {
			document.getElementById("erreur").innerHTML = '<font color="red">Les mots de passe ne sont pas identiques</font>';
			mdp2 = "";
		}
	}
}