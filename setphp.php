<?php

ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 1);
ini_set('session.gc_maxlifetime', 86400);
ini_set('session.cookie_lifetime', 86400);
ini_set('session.use_trans_sid', 0);
ini_set('session.use_only_cookies', 1);
ini_set('session.save_path', 'C:/windows/temp');



if(isset($_COOKIE['cookie'])){$PHPSESSID = $_COOKIE['cookie'];} 

session_start();

$sessionname = session_id();
setcookie ('cookie', $sessionname, 86400, '/', 'cars.arabicwww.com', 0);

if(isset($value))
{
$value++;
}
else
{
session_register('value');
$value = 1;
}

Print "You have been here $value times. <br>";

print '<a href="_test.php">Refresh</a><br><br><br>';

?>