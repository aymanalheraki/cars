<?php
session_start();
import_request_variables("gPc");
define('REGISTER_GLOBALS', 'on');
global $user1,$pass;


//ini_set('session.bug_compat_42', 1);
ini_set('session.bug_compat_warn',0);

$ss = session_is_registered("user1");

	if ($ss) 
		{
					$_SESSION = array();
					session_unset();
					session_unregister("user1");
					session_destroy();
					session_write_close();
		}



get_user($user1,$pass);

$ss = session_is_registered("user1");
	if ($ss) 
		{ 
			//$_SESSION['user1'] = $user1;
			echo "<script language='javascript'>document.location = 'u.php'</script>";
			
		} 

function get_user($user1,$pass)
{
include "db/db.php";
global $pass, $user1;
$sql = "SELECT * FROM carsmembers WHERE username='$user1' AND password='$pass'";
$qr = mysql_query($sql);
$cc = mysql_num_rows($qr);
	if ($cc>0)
		{
			$id = mysql_result($qr, 0, "id");
			$username = mysql_result($qr, 0, "username");
			$pass = mysql_result($qr, 0, "password");
			$name = mysql_result($qr, 0, "name");
			$email = mysql_result($qr, 0, "email");
			$postdate = mysql_result($qr, 0, "postdate");
			$country = mysql_result($qr, 0, "country");
			$city = mysql_result($qr, 0, "city");
			$address = mysql_result($qr, 0, "address");
			$noofcars = mysql_result($qr, 0, "noofcars");
			
			
			$_SESSION['id'] = $id;
			$_SESSION['name'] = $name;
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $pass;
			$_SESSION['postdate'] = $postdate;
			$_SESSION['country'] = $country;
			$_SESSION['city'] = $city;
			$_SESSION['address'] = $address;
			$_SESSION['noofcars'] = $noofcars;
			


			session_register("user1");
			
		}
	else
		{	
				echo "ÇÓã ÇáÏÎæá Ãæ ÇáÑÞã ÇáÓÑí ÛíÑ ÕÍíÍ";
		}
		
}

?>