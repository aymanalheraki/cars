
<head>
<meta content="text/html; charset=windows-1256" http-equiv="Content-Type">
<meta content="ar-sa" http-equiv="Content-Language">
</head>

<?php

import_request_variables("gPc");


  $number = $_POST['txtNumber'];

   if (md5($number) != $_SESSION['image_random_value']) 
	{
		echo "����� ������ �� ������ �� ����� �� ������";
		exit(0);
	}



include "db/db.php";

$password = rand(123456, 999999);
$username = Trim($email);

    $sqlC = "SELECT * FROM carsmembers WHERE username = '$username'";
	$qrC = mysql_query($sqlC);
	$ccC = mysql_num_rows($qrC);

if($ccC > 0)
{
	echo "<center>" . "������ ���������� ���� ������ �� ����� ��������" . "<br>" . "�� ���� ������� ���� ������ ���������� ���� �� ���" . "</center>";
	exit;
}




$sqli = "INSERT INTO carsmembers(name,username,password,email,postdate,Country,City,address,noofcars,active) VALUES
('$name','$username','$password','$email','$postdate','$Country1', '$City1','$address', '1', '0')";

$qr = mysql_query($sqli);


    $sql = "SELECT * FROM carsmembers WHERE username = '$email'";
	$qr = mysql_query($sql);
	$cc1 = mysql_num_rows($qr);

	echo mysql_errno() . "<br>";
	echo mysql_error() . "<br>";


	$user = mysql_result($qr, 0, "username");
	$pass = mysql_result($qr, 0, "password");

$message = "��� ������ ����� ��� �������� ������ : " . $username . "\n" . "����� ����� : " . $password . "\n";

mail($email , "������ ������ ������� �� ���  �������� ������", $message,"From: info@arabicwww.com\r\n"); 

mail('info@arabicwww.com' , "������ ������ ������� �� ���  �������� ������", $message,"From: info@arabicwww.com\r\n"); 

print "<center>" . "<div style='direction=rtl;font-family: Tahoma;font-size: 14px;color: navy; height: 15px;height:100% '>" . "����� �� ����� ������ ������ ���� �������� ������ ��� ������ ���� ��� ������� �� ������� :  "  . $email . "</div>" . "</ceneter>";


?>