<!DOCTYPE HTML>
<html>
<link rel="stylesheet" type="text/css" href="styles/Style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready( function() {
  // d�tection de la saisie dans le champ de recherche
  $('#q').keyup( function(){
    $field = $(this);
    $('#results').html(''); // on vide les resultats
    $('#ajax-loader').remove(); // on retire le loader
 
    // on commence � traiter � partir du 2�me caract�re saisie
    if( $field.val().length > 1 )
    {
      // on envoie la valeur recherch� en GET au fichier de traitement
      $.ajax({
  	type : 'GET', // envoi des donn�es en GET ou POST
	url : 'vues/ajax-search.php' , // url du fichier de traitement
	data : 'q='+$(this).val() , // donn�es � envoyer en  GET ou POST
	beforeSend : function() { // traitements JS � faire AVANT l'envoi
		 // ajout d'un loader pour signifier l'action
	},
	success : function(data){ // traitements JS � faire APRES le retour d'ajax-search.php
		$('#ajax-loader').remove(); // on enleve le loader
		$('#results').html(data); // affichage des r�sultats dans le bloc
	}
      });
    }		
  });
});
</script>

<head></head>
<div id=acceuil2>
<!--debut du formulaire-->
<form class="ajax" action="search.php" method="get">
	<p>
		<label for="q">Rechercher un utilisateur</label>
		<input type="text" name="q" id="q" />
	</p>
</form>
<!--fin du formulaire-->
 
<!--preparation de l'affichage des resultats-->
<div id="results">dddddddds</div></div>
	</body>
</html>	
	
	
	
	
	