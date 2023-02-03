<?php
$mysql_access=mysql_connect("localhost", "arabicww_a", "123456") 
	or die("Error In Connect"); 

mysql_select_db("arabicww_all",$mysql_access) 
	or die(mysql_error()) ;
?>