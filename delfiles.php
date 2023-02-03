<?php
session_start();
include "checkRG.php";

if(strlen($btnDel) > 0)
{
	$fll = "/home/arabicww/carsupload/" . trim($_SESSION['email']) . "/" . $btnDel;
	unlink($fll);
	echo $fll . "<br>";
	echo "<script language='javascript'>document.location = 'memfiles.php'</script>";
}


?>
