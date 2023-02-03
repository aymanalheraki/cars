<?php
import_request_variables("gPc");
include "../db/db.php";

$sql = "UPDATE data SET
		main='$main1' WHERE id='1'";
$qr = mysql_query($sql);

echo "<script language='javascript'>document.location = 'mark.php'</script>";

?>