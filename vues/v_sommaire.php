<!DOCTYPE HTML>
<html>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready( function () {
  // On cache les sous-menus :
  $(".navigation ul.subMenu").hide();    

  // On sélectionne tous les items de liste portant la classe "toggleSubMenu"
  // et on remplace l'élément span qu'ils contiennent par un lien :
  $(".navigation li.toggleSubMenu span").each( function () {
      $(this).replaceWith('<a href="" title="Afficher le sous-menu">' + $(this).text() + '<\/a>') ;
  } ) ;

  // On modifie l'évènement "click" sur les liens dans les items de liste
  // qui portent la classe "toggleSubMenu" :
  $(".navigation li.toggleSubMenu > a").click( function () {
      // Si le sous-menu était déjà ouvert, on le referme :
      if ($(this).next("ul.subMenu:visible").length != 0) {
          $(this).next("ul.subMenu").slideUp("normal");
      }
      // Si le sous-menu est caché, on ferme les autres et on l'affiche :
      else {
          $(".navigation ul.subMenu").slideUp("normal");
          $(this).next("ul.subMenu").slideDown("normal");
      }
      // On empêche le navigateur de suivre le lien :
      return false;
  });    
 

  

  
} ) ;
</script>    

<link rel="stylesheet" type="text/css" href="styles/Style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="jquery/jquery.js"></script>
<img src="styles/FOND2.png" id="bg" alt="">
	<div id="header">
	<img alt="banniere" src="styles/bannieres+traits.png">
</div>

	<div id="menu">
		<ul class="navigation" id="menuPrincipal">	
			<li><a href="index.php?uc=accueil">Accueil</a></li>
		
			<li><a href="index.php?uc=stats">Vos statistiques</a></li>
		
			<li><a href="index.php?uc=motivation">Motivation</a></li>
			
			
			<li class="toggleSubMenu"><span>mon espace</span>
			<ul class="subMenu">
				
				<li><a href="index.php?uc=amis">messages</a></li>
				<li><a href="index.php?uc=moncompte">mon compte</a></li>
			
			</ul> 
			</li>
			
			
		
			<li><a href="index.php?uc=contact">Nous contacter</a></li>		
		
			<li><a href="index.php?uc=deconnecter">Se déconnecter</a></li>		
		</ul>
	</div>
</html>

