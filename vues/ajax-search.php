<?php
//connexion � la base de donn�es 
define('DB_NAME', 'arretecig');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
 
$link   =   @mysql_connect( DB_HOST , DB_USER , DB_PASSWORD );
mysql_select_db( DB_NAME , $link );
 
//recherche des r�sultats dans la base de donn�es
$result =   mysql_query( 'SELECT idUtil ,login 
                          FROM utilisateur
                          where login LIKE \'' . safe( $_GET['q'] ) . '%\'
                          LIMIT 0,20' );
 
// affichage d'un message "pas de r�sultats"

?>

<?php 

if( mysql_num_rows( $result ) == 0 )
{
?>
	
    <h3 style="text-align:center; margin:10px 0;">Pas de r&eacute;sultats pour cette recherche</h3>
<?php
}
else
{
    // parcours et affichage des r�sultats
    while( $post = mysql_fetch_object( $result ))
    {
    ?>
        <div class="article-result">
        <form  method="POST" action="index.php?uc=amis">
            <h3><a ><?php echo utf8_encode( $post->login );echo "" ; echo utf8_encode( $post->login ); ?></a></h3>
            
            <input style="margin-left:5%; width: 25%; float:left;" name="titre" type="message" id="titre" placeholder="Titre"></textarea><br><br>
            <input style="margin-left:5%; width: 25%; height:50px; float:left;" name="texte" type="message" id="message" placeholder="Message"></textarea>
            
            <input type="hidden" name="id2" value="<?php echo $post->idUtil; ?>">
            <input type="submit" name="nom" value="Envoyer">
            
			</form>
        </div>
    <?php
    }
}
 
/*****
fonctions
*****/
function safe($var)
{
	$var = mysql_real_escape_string($var);
	$var = addcslashes($var, '%_');
	$var = trim($var);
	$var = htmlspecialchars($var);
	return $var;
}
?>