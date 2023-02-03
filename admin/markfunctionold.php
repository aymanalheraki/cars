<?php
include "db.php";
    $sql = "SELECT * FROM mark WHERE id='1'";
	$qr = mysql_query($sql);
	$cc = mysql_num_rows($qr);
	
		$body1 = mysql_result($qr, 0, "body");
		$delay1 = mysql_result($qr, 0, "delay");
		$value1 = mysql_result($qr, 0, "value");
		
   $sql = "SELECT * FROM mark WHERE id='2'";
	$qr = mysql_query($sql);
	$cc = mysql_num_rows($qr);
	
		$body2 = mysql_result($qr, 0, "body");		
		$delay2 = mysql_result($qr, 0, "delay");
		$value2 = mysql_result($qr, 0, "value");

function b2()
{
	global $body2,$value2,$delay2;
	$fff = "";
	$bb = explode(chr(13),$body2);
	echo "<marquee direction='right' width='100%' height='21' scrollamount='$value2' scrolldelay='$delay2'>";
	for($ii=0;$ii < count($bb);$ii=$ii+2)
		{
			$s1 = $ii + 1;
			$fff = $fff . " :: <a target='_blank' href='http://$bb[$s1]'>$bb[$ii]</a>";
		}
		echo $fff;
		echo "</marquee>";

}

function b1()
{
	global $body1,$value1,$delay1;
	$ff = "";
	$b = explode(chr(13),$body1);
	echo "<marquee direction='right' width='100%' height='21' scrollamount='$value1' scrolldelay='$delay1'>";
	for($i=0;$i < count($b);$i=$i+2)
		{
			$s = $i + 1;
			$ff = $ff . " :: <a target='_blank' href='http://$b[$s]'>$b[$i]</a>";
		}
		echo $ff;
		echo "</marquee>";

}


?>
