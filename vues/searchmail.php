<?php
//connexion à la base de données 
define('DB_NAME', 'arretecig');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
 
$link   =   @mysql_connect( DB_HOST , DB_USER , DB_PASSWORD );
mysql_select_db( DB_NAME , $link );
 
//recherche des résultats dans la base de données
$result =   mysql_query( 'SELECT * 
                          FROM messages
                          where id_destinataire='.$_SESSION["util"].'
                          LIMIT 0,20' );
 
// affichage d'un message "pas de résultats"
?>
	<div id="acceuil2">
<?php  
if( mysql_num_rows( $result ) == 0 )
{
?>
	<div style="border-bottom : 1px solid #000;">
    <h3 style="text-align:center; margin:10px 0;border-bottom : 1px solid #000;">Pas de nouveau message</h3>
	</div>
<?php
}
else
{
	
	?>
	 <h3><a ><?php echo ( mysql_num_rows( $result )." nouveaux messages"); ?></a></h3>
	 <?php 
	
    // parcours et affichage des résultats
    while( $post = mysql_fetch_object( $result ))
    {
    ?>
        <div style="border-bottom : 1px solid #000;" class="article-result">
        <form  method="POST" action="index.php?uc=mesmails">
            <h3 style="margin-left:20px;"><a ><?php echo utf8_encode( $post->titre); ?></a></h3>
            <p style="margin-left:20px;">   
            	<?php echo utf8_encode( $post->message); ?>
            </p>
            
			</form>
        </div>
    <?php
    }
}
 

?>
</div>