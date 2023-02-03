<?php
session_start();
import_request_variables("gPc");

include "checkRG.php";

include "db/db.php";

//echo $_SESSION['id'] . "<br>";
//echo $newpass1  . "<br>";	
	
	if($_SESSION['password'] != $oldpass)
	{
		echo "<center>" . "«·—ﬁ„ «·”—Ì «·Õ«·Ì €Ì— „ ÿ«»ﬁ „⁄ «·—ﬁ„ «·„”Ã· ›Ì ﬁ«⁄œ… «·»Ì«‰«  ··„” Œœ„ «·Õ«·Ì " . "<br>" . $_SESSION['name']  . "<center>";	
		exit;
	}

if($newpass1 != $newpass2)
{
		echo "<center>" . "«·—ﬁ„ «·”—Ì «·ÃœÌœ Ê «·—ﬁ„ «· √ﬂÌœÌ €Ì— „ ÿ«»ﬁ«‰ " . "<br>" . "<center>";	
		exit;
}
	
	
	$sql = "UPDATE carsmembers SET password='$newpass1' WHERE id=" . $_SESSION['id'];


	$qr = mysql_query($sql);
	
//	echo mysql_errno() . "<br>";
//	echo mysql_error() . "<br>";


echo "<center>" . " „  €ÌÌ— «·—ﬁ„ «·”—Ì »‰Ã«Õ ··⁄÷Ê " . $_SESSION['name']  . "<center>";
?>