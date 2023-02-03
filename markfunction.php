<?php
import_request_variables("gPc");
include "db/db.php";
    $sql = "SELECT * FROM data WHERE id='1'";
	$qr = mysql_query($sql);
	$cc = mysql_num_rows($qr);
	
		$main1 = mysql_result($qr, 0, "main");
		$main11 = explode(chr(13),$main1);
		
?>
