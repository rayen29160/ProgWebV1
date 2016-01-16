<?php 
if(isset($_GET["login"])) 
{ 
$pseudo=$_GET["login"]; 
define('DB_NAME', 'arretecig');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
 
$link   =   @mysql_connect( DB_HOST , DB_USER , DB_PASSWORD );
mysql_select_db( DB_NAME , $link );
$req_pseudo_exist="SELECT login FROM utilisateur WHERE login='".$pseudo."'"; 

$pseudo_exist=mysql_query($req_pseudo_exist); 
if(mysql_num_rows($pseudo_exist)>0) 
{ 
echo "1"; 
} 
else 
{ 
echo "0"; 
} 
mysql_close(); 
} 
else 
{ 
echo "non non !"; 
} 
?> 