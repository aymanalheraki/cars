<?php
$db = "albarart_all";
$user = "albarart_a";
$pw = "123456";
$host="localhost";
$mysql_access=mysql_connect($host, $user, $pw) 
	or die("Error In Connect"); 

mysql_select_db($db,$mysql_access) 
	or die(mysql_error()) ; 
?>