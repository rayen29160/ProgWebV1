<?php
//connexion à la base de données 
define('DB_NAME', 'arretecig');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
 
$link   =   @mysql_connect( DB_HOST , DB_USER , DB_PASSWORD );
mysql_select_db( DB_NAME , $link );
 
//recherche des résultats dans la base de données
$result =   mysql_query( 'SELECT nom , prenom 
                          FROM utilisateur
                          where nom LIKE \'' . safe( $_GET['q'] ) . '%\'
                          LIMIT 0,20' );
 
// affichage d'un message "pas de résultats"
if( mysql_num_rows( $result ) == 0 )
{
?>
    <h3 style="text-align:center; margin:10px 0;">Pas de r&eacute;sultats pour cette recherche</h3>
<?php
}
else
{
    // parcours et affichage des résultats
    while( $post = mysql_fetch_object( $result ))
    {
    ?>
        <div class="article-result">
        
            <h3><a ><?php echo utf8_encode( $post->nom );echo "" ; echo utf8_encode( $post->prenom ); ?></a></h3>
            <input type="submit" name="nom" value="Ajouter">

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