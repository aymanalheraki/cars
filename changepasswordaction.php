<?php
session_start();
import_request_variables("gPc");

include "checkRG.php";

include "db/db.php";

//echo $_SESSION['id'] . "<br>";
//echo $newpass1  . "<br>";	
	
	if($_SESSION['password'] != $oldpass)
	{
		echo "<center>" . "����� ����� ������ ��� ������ �� ����� ������ �� ����� �������� �������� ������ " . "<br>" . $_SESSION['name']  . "<center>";	
		exit;
	}

if($newpass1 != $newpass2)
{
		echo "<center>" . "����� ����� ������ � ����� �������� ��� �������� " . "<br>" . "<center>";	
		exit;
}
	
	
	$sql = "UPDATE carsmembers SET password='$newpass1' WHERE id=" . $_SESSION['id'];


	$qr = mysql_query($sql);
	
//	echo mysql_errno() . "<br>";
//	echo mysql_error() . "<br>";


echo "<center>" . "�� ����� ����� ����� ����� ����� " . $_SESSION['name']  . "<center>";
?>