
<head>
<meta http-equiv="Content-Language" content="en-us">
</head>

<?php

import_request_variables("gPc");
define('REGISTER_GLOBALS', 'on');

include "db.php";

$idb = $_POST['B5'];

if (mysql_errno()<>0)
{
 echo "��� ������ ���� ��� �� �� ����� ��� ����� ��� -- ��� �������� �� ����";
 exit;
 }

$sql = "UPDATE data SET id='$id',
						iname='$iname',
						itype='$itype',
						a_name='$a_name',
						e_name='$e_name',
						a_kind='$a_kind',
						e_kind='$e_kind',
						size='$size',
						price='$price',
						note='$note',
						enote='$enote' WHERE id='$idb'";


	$qr = mysql_query($sql);
	
//	echo mysql_errno() . "<br>";
//	echo mysql_error() . "<br>";
if (mysql_errno()<>0)
{
 echo "����� ������� �� ������ ���� �������� ������� � ������ ����� ���� ���";
 exit;
 }
			echo "��� ����� ������� ����� ... ����� ������� ���� ������ �����.";
			echo "<script language='javascript'>document.location = 'list.php'</script>";

?>
