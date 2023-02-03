<html dir="ltr">

<head>
<meta content="text/html; charset=windows-1256" http-equiv="Content-Type">
<meta content="image/jpeg;" http-equiv="Content-Type">
<link href="style.css" rel="STYLESHEET" type="text/css">
<title>معرض المدينة الإليكتروني لبيع السيارات</title>
<script language="JavaScript1.1"> 

var childWin;
function OpenUrl(u,w,h) {
var iw,ih;
var w;
var h;
var aa = "width="+w+",height="+h+",left=0,top=0,toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=yes,resizable=no";
var	tt = "Show_Picture";
	childWin = window.open(u,'_blank',aa,true);
}
</script>
</head>

<?php
include "db/db.php";
require "db/fields.php";
carmain();


	if($f==1)
	{
		$sql = "SELECT * FROM main WHERE name='$name' AND model='$model' AND active=1 ORDER BY model";
		$_SESSION['name'] = $name;
		$_SESSION['model'] = $model;
		$ff = "&name=$name&model=$model&f=1";
	}

	if($f==2)
	{
			if($price == 2) $sr = "price <= 5000";
			if($price == 3) $sr = "price > 5000 AND price < 10000";
			if($price == 4) $sr = "price >= 10000 AND price < 20000";
			if($price == 5) $sr = "price >= 20000";

		$sql = "SELECT * FROM main WHERE $sr AND active=1 ORDER BY model";
		$ff = "&price=$price&f=2";
	}

	if($f==3)
	{
		$sql = "SELECT * FROM main WHERE name = '$n' AND active=1  ORDER BY name,model";	
		$ff = "&n=$n&f=3";
	}


	if($f==4)
	{
	    $sql = "SELECT * FROM main WHERE active = '1' ";
		$ff = "&f=4";
	}

	if($f==5)
	{
	    $sql = "SELECT * FROM main WHERE id='$id' AND active = '1' ";
		$ff = "&f=4";
	}


	$qr = mysql_query($sql);
	$cc = mysql_num_rows($qr);

$dd = ceil($cc/9); 
for($i=0;$i<$cc;$i++)
{    
		$d1[$i] = mysql_result($qr, $i, $f1);
//		$d2[$i] = mysql_result($qr, $i, $f2);
		$d3[$i] = mysql_result($qr, $i, $f3);
		$d4[$i] = mysql_result($qr, $i, $f4);
		$d5[$i] = mysql_result($qr, $i, $f5);
		$d6[$i] = mysql_result($qr, $i, $f6);		
		$d7[$i] = mysql_result($qr, $i, $f7);		
		$d8[$i] = mysql_result($qr, $i, $f8);				
		$d9[$i] = mysql_result($qr, $i, $f9);
		$d10[$i] = mysql_result($qr, $i, $f10);	
		$d11[$i] = mysql_result($qr, $i, $f11);		
		$si = getimagesize("carimages/" . $d8[$i]);
		$img[$i] = "carimages/" . $d8[$i];
		$siw[$i] = $si[0];
		$sih[$i] = $si[1];
}

if(!$cc)
{
	print "لا يوجد نتائج لاختيارك.....";
}

?>
<body bottommargin="0" leftmargin="0" marginheight="0" marginwidth="0" rightmargin="0" topmargin="0">

<p>&nbsp;</p>
<table id="table1" border="0" cellpadding="0" cellspacing="0" class="font10" width="100%">
	<tr dir="rtl">
		<td height="31" valign="top">
		<div align="center" class="font12">
			<?php 
                      	for($s=0;$s<$dd;$s++)
                      	{
                      	$ss = $s + 1;
                      		if($dd != 1)
                      		{
                      	?>
			<a href="s.php?s1=a&amp;p=<?php echo (($s * 9) + 1) . $ff; ?>"><?php echo "[$ss]"; ?>
			</a><?php
							}
						}
						?></div>
		</td>
	</tr>
	<?php

	$i = $p - 1 ;
	$flag = 0;	
	do
	{
?>
	<tr>
		<td>
		<div align="center">
			<table id="table2" border="0" cellpadding="0" cellspacing="0" class="font10" dir="rtl" width="100%">
				<tr>
					<?php
                                if(!empty($d8[$i]))
                                {
								?>
					<td align="center" valign="top">
					<table id="table3" bgcolor="#E4EBF1" border="1" bordercolor="#7094B9" cellpadding="0" cellspacing="0" class="font10" height="250" style="border-collapse: collapse" width="170">
						<tr>
							<td dir="ltr">
							<p align="center">&nbsp;<?php echo $d1[$i]; ?></p>
							</td>
						</tr>
						<tr>
							<td bgcolor="#7094B9">
							<p align="center" style="color: #ffff00">&nbsp;<?php echo $d3[$i]; ?></p>
							</td>
						</tr>
						<tr>
							<td height="90%">
							<div align="center">
								<table id="table7" bgcolor="#CFDCE7" border="0" width="100%">
									<tr>
										<td align="center" width="100">&nbsp;</td>
										<td align="center">
										<img alt="أرسل بيانات هذه السيارة لصديق" border="0" height="28" onclick="javascript:OpenUrl('sfriends.php?id=<?php echo $d1[$i]?>',300,330);" src="images/sfriends.gif" style="CURSOR: hand" width="30"></td>
										<td align="center">
										<img alt="راسل صاحب الموقع حول هذه السيارة" border="0" height="23" onclick="javascript:OpenUrl('ssite.php?id=<?php echo $d1[$i]?>',300,330);" src="images/mail.gif" style="CURSOR: hand" width="20"></td>
									</tr>
								</table>
							</div>
							<p align="center">
							<?php 
							$dh  = opendir($picdir . $username . "/"); 
							while (false !== ($filename = readdir($dh))) 
							{ 
							   $files[] = $filename; 
							} 
							?>
						
							<img align="middle" border="1" hspace="2" onclick="javascript:OpenUrl('show.php?id=<?php echo $d1[$i]?>',<?php echo $siw[$i]+60;  ?>,<?php echo $sih[$i]+120;  ?>);" src="resizer.php?imgfile=<?php $username . "/" . trim($files[2]); ?>" style="CURSOR: hand" vspace="2"></p>
							</td>
						</tr>
						<tr>
							<td class="font10">
							<p align="center">&nbsp;<?php echo $d4[$i]; ?></p>
							</td>
						</tr>
						<tr>
							<td>
							<p align="center">&nbsp;<?php echo $d5[$i]; ?></p>
							</td>
						</tr>
						<tr>
							<td>
							<p align="center">&nbsp;<?php echo $d7[$i] . " ر.س"; ?></p>
							</td>
							<?php $i++; ?>
						</tr>
					</table>
					</td>
					<?php
								}
								?><?php
                                if(!empty($d8[$i]))
                                {
                                ?>
					<td align="center" valign="top">
					<table id="table4" bgcolor="#E4EBF1" border="1" bordercolor="#7094B9" cellpadding="0" cellspacing="0" class="font10" height="250" style="border-collapse: collapse" width="170">
						<tr>
							<td dir="ltr" height="17">
							<p align="center">&nbsp;<?php echo $d1[$i]; ?></p>
							</td>
						</tr>
						<tr>
							<td bgcolor="#7094B9" height="17">
							<p align="center" style="color: #ffff00">&nbsp;<?php echo $d3[$i]; ?></p>
							</td>
						</tr>
						<tr>
							<td height="90%">
							<div align="center">
								<table id="table8" bgcolor="#CFDCE7" border="0" width="100%">
									<tr>
										<td align="center" width="100">&nbsp;</td>
										<td align="center">
										<img alt="أرسل بيانات هذه السيارة لصديق" border="0" height="28" onclick="javascript:OpenUrl('sfriends.php?id=<?php echo $d1[$i]?>',300,330);" src="images/sfriends.gif" style="CURSOR: hand" width="30"></td>
										<td align="center">
										<img alt="راسل صاحب الموقع حول هذه السيارة" border="0" height="23" onclick="javascript:OpenUrl('ssite.php?id=<?php echo $d1[$i]?>',300,330);" src="images/mail.gif" style="CURSOR: hand" width="20"></td>
									</tr>
								</table>
							</div>
							<p align="center">
							
							<?php 
							$dh  = opendir($picdir . $username . "/"); 
							while (false !== ($filename = readdir($dh))) 
							{ 
							   $files[] = $filename; 
							} 
							?>
							
							
							<img align="middle" border="1" hspace="2" onclick="javascript:OpenUrl('show.php?id=<?php echo $d1[$i]?>',<?php echo $siw[$i]+60;  ?>,<?php echo $sih[$i]+120;  ?>);" src="resizer.php?imgfile=<?php echo $img[$i]?>" style="CURSOR: hand" vspace="2"></p>
							</td>
						</tr>
						<tr>
							<td class="font10">
							<p align="center">&nbsp;<?php echo $d4[$i]; ?></p>
							</td>
						</tr>
						<tr>
							<td>
							<p align="center">&nbsp;<?php echo $d5[$i]; ?></p>
							</td>
						</tr>
						<tr>
							<td>
							<p align="center">&nbsp;<?php echo $d7[$i] . " ر.س"; ?></p>
							</td>
							<?php $i++; ?>
						</tr>
					</table>
					</td>
					<?php
								}
								?><?php
                                if(!empty($d8[$i]))
                                {
                                ?>
					<td align="center" valign="top">
					<table id="table6" bgcolor="#E4EBF1" border="1" bordercolor="#7094B9" cellpadding="0" cellspacing="0" class="font10" height="250" style="border-collapse: collapse" width="170">
						<tr>
							<td dir="ltr">
							<p align="center">&nbsp;<?php echo $d1[$i]; ?></p>
							</td>
						</tr>
						<tr>
							<td bgcolor="#7094B9">
							<p align="center" style="color: #ffff00">&nbsp;<?php echo $d3[$i]; ?></p>
							</td>
						</tr>
						<tr>
							<td height="90%">
							<div align="center">
								<table id="table9" bgcolor="#CFDCE7" border="0" width="100%">
									<tr>
										<td align="center" width="100">&nbsp;</td>
										<td align="center">
										<img alt="أرسل بيانات هذه السيارة لصديق" border="0" height="28" onclick="javascript:OpenUrl('sfriends.php?id=<?php echo $d1[$i]?>',300,330);" src="images/sfriends.gif" style="CURSOR: hand" width="30"></td>
										<td align="center">
										<img alt="راسل صاحب الموقع حول هذه السيارة" border="0" height="23" onclick="javascript:OpenUrl('ssite.php?id=<?php echo $d1[$i]?>',300,330);" src="images/mail.gif" style="CURSOR: hand" width="20"></td>
									</tr>
								</table>
							</div>
							<p align="center">
							
							<?php 
							$dh  = opendir($picdir . $username . "/"); 
							while (false !== ($filename = readdir($dh))) 
							{ 
							   $files[] = $filename; 
							} 
							?>
							
							<img align="middle" border="1" hspace="2" onclick="javascript:OpenUrl('show.php?id=<?php echo $d1[$i] ?>',<?php echo $siw[$i]+60;  ?>,<?php echo $sih[$i]+120;  ?>);" src="resizer.php?imgfile=<?php echo $img[$i]?>" style="CURSOR: hand" vspace="2"></p>
							</td>
						</tr>
						<tr>
							<td class="font10">
							<p align="center">&nbsp;<?php echo $d4[$i]; ?></p>
							</td>
						</tr>
						<tr>
							<td>
							<p align="center">&nbsp;<?php echo $d5[$i]; ?></p>
							</td>
						</tr>
						<tr>
							<td>
							<p align="center">&nbsp;<?php echo $d7[$i] . " ر.س"; ?></p>
							</td>
							<?php $i++; ?>
						</tr>
					</table>
					<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
					</td>
					<?php
								}
								?><?php
                                if(!empty($d8[$i]))
                                {
                                ?>
					
					
					
					
					
					
					<td align="center" valign="top">
					<table id="table6" bgcolor="#E4EBF1" border="1" bordercolor="#7094B9" cellpadding="0" cellspacing="0" class="font10" height="250" style="border-collapse: collapse" width="170">
						<tr>
							<td dir="ltr">
							<p align="center">&nbsp;<?php echo $d1[$i]; ?></p>
							</td>
						</tr>
						<tr>
							<td bgcolor="#7094B9">
							<p align="center" style="color: #ffff00">&nbsp;<?php echo $d3[$i]; ?></p>
							</td>
						</tr>
						<tr>
							<td height="90%">
							<div align="center">
								<table id="table9" bgcolor="#CFDCE7" border="0" width="100%">
									<tr>
										<td align="center" width="100">&nbsp;</td>
										<td align="center">
										<img alt="أرسل بيانات هذه السيارة لصديق" border="0" height="28" onclick="javascript:OpenUrl('sfriends.php?id=<?php echo $d1[$i]?>',300,330);" src="images/sfriends.gif" style="CURSOR: hand" width="30"></td>
										<td align="center">
										<img alt="راسل صاحب الموقع حول هذه السيارة" border="0" height="23" onclick="javascript:OpenUrl('ssite.php?id=<?php echo $d1[$i]?>',300,330);" src="images/mail.gif" style="CURSOR: hand" width="20"></td>
									</tr>
								</table>
							</div>
							<p align="center">
							
							<?php 
							$dh  = opendir($picdir . $username . "/"); 
							while (false !== ($filename = readdir($dh))) 
							{ 
							   $files[] = $filename; 
							} 
							?>
							
							<img align="middle" border="1" hspace="2" onclick="javascript:OpenUrl('show.php?id=<?php echo $d1[$i] ?>',<?php echo $siw[$i]+60;  ?>,<?php echo $sih[$i]+120;  ?>);" src="resizer.php?imgfile=<?php echo $img[$i]?>" style="CURSOR: hand" vspace="2"></p>
							</td>
						</tr>
						<tr>
							<td class="font10">
							<p align="center">&nbsp;<?php echo $d4[$i]; ?></p>
							</td>
						</tr>
						<tr>
							<td>
							<p align="center">&nbsp;<?php echo $d5[$i]; ?></p>
							</td>
						</tr>
						<tr>
							<td>
							<p align="center">&nbsp;<?php echo $d7[$i] . " ر.س"; ?></p>
							</td>
							<?php $i++; ?>
						</tr>
					</table>
					
					
					</td>
					<?php
					  }
					?>
					
				</tr>
			</table>
		</div>
		</td>
	</tr>
	<?php
	$flag++;
	}while($flag < 3);
?>
	<tr dir="rtl">
		<td height="28" valign="top">
		<div align="center" class="font12">
			<?php 
                      	for($s=0;$s<$dd;$s++)
                      	{
                      	$ss = $s + 1;
                      		if($dd != 1)
                      		{

                      	?>
			<a href="s.php?s1=a&amp;p=<?php echo (($s * 9) + 1) . $ff; ?>"><?php echo "[$ss]"; ?>
			</a><?php
							}
						}
						?></div>
		</td>
	</tr>
</table>

</body>

</html>
