<html dir="rtl">
<?php
import_request_variables("gPc");
ini_set('session.bug_compat_warn',0);
?>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 12.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<link rel="stylesheet" href="style.css" type="text/css">
<style type="text/css">
.style4 {
	border-left-color: #AEAEAE;
	border-left-width: 0px;
	border-right: 0px none #AEAEAE;
	border-top: 0px none #AEAEAE;
	border-bottom: 0px none #AEAEAE;
}
.style6 {
	border-color: #E3E3E3;
	border-width: 1px;
}
</style>
</head>


<?php
include "db/db.php";

    $sql = "SELECT * FROM main WHERE id='$id'";
	$qr = mysql_query($sql);
	$cc = mysql_num_rows($qr);

		$id = mysql_result($qr, 0,"id");
		$name = mysql_result($qr,0, "name");
		$username = mysql_result($qr, 0, "username");
		$model = mysql_result($qr, 0, "model");
		$year = mysql_result($qr, 0, "year");		
		$color = mysql_result($qr, 0, "color");		
		$price = mysql_result($qr, 0, "price");				
		$picture = mysql_result($qr, 0, "picture");
		$c_counter = mysql_result($qr, 0, "c_counter");		
		$note = mysql_result($qr, 0, "note");


 $picdir = "/home/arabicww/carsupload/"; 
				$dh  = opendir($picdir . $username . "/"); 
				while (false !== ($filename = readdir($dh))) 
				{ 
				   $files[] = $filename; 
				   sort($files);
				} 
				for($x = 0;$x<count($files);$x++)
				{
					if(substr($files[$x],0,strlen($id)) == $id)
					{
						$carimage = $files[$x];
						break;
					}
				}
$z = 0;
				for($x = 0;$x<count($files);$x++)
				{
					if(substr($files[$x],0,strlen($id)) == $id)
					{
						$acars[$z] = $files[$x];
						$z++;
					}
				}
				?>

<title><?php echo $name . " " . $model . " " . $year . " "; ?></title>
<body topmargin="25">
	<div align="center">
		<table style="width: 700px">
			<tr>
				<td dir="rtl" style="text-align:center">
				<?php 
					echo " " . $name . " " . $model  . " " . $year ; 
				?></td>
			</tr>
		</table>
		<br>
		<table style="width:770px">
			<tr>
				<td style="vertical-align: middle; width: 370px; text-align:center">
				
				<table style="width: 360px" cellpadding="1px" cellspacing="1px" >
					<tr>
						
						<?php
						if(isset($acars[2]))
						{
						?>
						<td style="text-align:center" onclick="javascript:ajaxFunction('tt.php','sh','<?php echo '?imgfile=' . $username . '/' . $acars[2] ?>');">
						<?php
							$img = "resizer1.php?imgfile=" . $username . "/" . $acars[2];
							echo "<img src=" . $img . " style='border:2px gray solid;width: 123px;height:80px;cursor:hand'>";
						?>
						</td>
						<?php
						}
						?>
						
						<?php
						
						if(isset($acars[1]))
						{
						?>
						
						<td style="text-align:center" onclick="javascript:ajaxFunction('tt.php','sh','<?php echo '?imgfile=' . $username . '/' . $acars[1] ?>');">
						
						<?php
						
							$img = "resizer1.php?imgfile=" . $username . "/" . $acars[1];
							echo "<img src=" . $img . " style='border:2px gray solid;width: 123px;height:80px;cursor:hand'>";
						?>
						</td>
						<?php
						}
						?>
						
						
						<?php
						if(isset($acars[0]))
						{
						?>
						
						<td style="text-align:center" onclick="javascript:ajaxFunction('tt.php','sh','<?php echo '?imgfile=' . $username . '/' . $acars[0] ?>');">
						<?php						
						$img = "resizer1.php?imgfile=" . $username . "/" . $acars[0];
							
							echo "<img src='" . $img . "' style='border:2px gray solid;width:123px;height:80px;cursor:hand' >";
						?>

						</td>
						<?php
						}
						?>
						
					</tr>
					<tr>
						<?php
						if(isset($acars[5]))
						{
						?>
						<td style="text-align:center" onclick="javascript:ajaxFunction('tt.php','sh','<?php echo '?imgfile=' . $username . '/' . $acars[5] ?>');">
						<?php
							$img = "resizer1.php?imgfile=" . $username . "/" . $acars[5];
							echo "<img src=" . $img . " style='border:2px gray solid;width: 123px;height:80px;cursor:hand'>";
						?>
						</td>
						<?php
						}
						?>
						
						<?php
						
						if(isset($acars[4]))
						{
						?>
						
						<td style="text-align:center" onclick="javascript:ajaxFunction('tt.php','sh','<?php echo '?imgfile=' . $username . '/' . $acars[4] ?>');">
						
						<?php
						
							$img = "resizer1.php?imgfile=" . $username . "/" . $acars[4];
							echo "<img src=" . $img . " style='border:2px gray solid;width: 123px;height:80px;cursor:hand'>";
						?>
						</td>
						<?php
						}
						?>
						
						
						<?php
						if(isset($acars[3]))
						{
						?>
						
						<td style="text-align:center" onclick="javascript:ajaxFunction('tt.php','sh','<?php echo '?imgfile=' . $username . '/' . $acars[3] ?>');">
						<?php						
						$img = "resizer1.php?imgfile=" . $username . "/" . $acars[3];
							
							echo "<img src='" . $img . "' style='border:2px gray solid;width:123px;height:80px;cursor:hand' >";
						?>

						</td>
						<?php
						}
						?>
						
					</tr>
					<tr>
						<?php
						if(isset($acars[8]))
						{
						?>
						<td style="text-align:center" onclick="javascript:ajaxFunction('tt.php','sh','<?php echo '?imgfile=' . $username . '/' . $acars[8] ?>');">
						<?php
							$img = "resizer1.php?imgfile=" . $username . "/" . $acars[8];
							echo "<img src=" . $img . " style='border:2px gray solid;width: 123px;height:80px;cursor:hand'>";
						?>
						</td>
						<?php
						}
						?>
						
						<?php
						
						if(isset($acars[7]))
						{
						?>
						
						<td style="text-align:center" onclick="javascript:ajaxFunction('tt.php','sh','<?php echo '?imgfile=' . $username . '/' . $acars[7] ?>');">
						
						<?php
						
							$img = "resizer1.php?imgfile=" . $username . "/" . $acars[7];
							echo "<img src=" . $img . " style='border:2px gray solid;width: 123px;height:80px;cursor:hand'>";
						?>
						</td>
						<?php
						}
						?>
						
						
						<?php
						if(isset($acars[6]))
						{
						?>
						
						<td style="text-align:center" onclick="javascript:ajaxFunction('tt.php','sh','<?php echo '?imgfile=' . $username . '/' . $acars[6] ?>');">
						<?php						
						$img = "resizer1.php?imgfile=" . $username . "/" . $acars[6];
							
							echo "<img src='" . $img . "' style='border:2px gray solid;width:123px;height:80px;cursor:hand' >";
						?>

						</td>
						<?php
						}
						?>
					</tr>
				</table>
				
				</td>
				<td >
				<table style="width:408px;height:308px" cellpadding="0px" cellspacing="0px">
					<tr>
						<td id="sh" style="text-align:center;width:406px;height:306px"></td>
					</tr>
				</table>
				</td>
			</tr>
		</table>
		<br>
	<table border="1" dir="rtl" style=" width:770px" bordercolor="#ffffff">
		<tr>
			<td style="width:400" class="style6">
			
	<div align="center">

		<table style="width: 400px" cellpadding="0px" cellspacing="0px">
			<tr>
				<td style="background-image:url('images/d_head.jpg')">&nbsp;</td>
			</tr>
		</table>
	<table border="0" width="400px" id="table3" cellspacing="0" cellpadding="0" style="">
		<tr>
			<td style="width:127px">الصانع</td>
			<td >
			<?php echo $name . " " . $model . " " . $year . " " ?></td>
		</tr>
		<tr>
			<td style="width: 127px" >الموديل</td>
			<td width="75%" ></td>
		</tr>
		<tr>
			<td style="width: 127px" >سنة الإنتاج</td>
			<td width="75%" ></td>
		</tr>
		<tr>
			<td style="width: 127px">لون السيارة</td>
			<td width="75%" ><?php echo $color ?></td>
		</tr>
		<tr>
			<td style="width: 127px" >رقم العداد</td>
			<td class="style2"><?php echo $c_counter ?></td>
		</tr>
		<tr>
			<td height="22" style="width: 127px" >السعر</td>
			<td height="22"><?php echo $price ?></td>
		</tr>
		<tr>
			<td style="width: 127px" >مواصفات أخرى</td>
			<td ><?php echo $note ?></td>
		</tr>
	</table>

						<table style="width: 100%; height: 9px;" cellpadding="0px" cellspacing="0px">
							<tr>
								<td style="vertical-align:top">
								<img alt="" height="7" src="images/d_footer.jpg" width="400"></td>
							</tr>
							<tr>
								<td style="text-align:left">
								<img alt="" height="20" src="images/shadow.jpg" width="230"></td>
							</tr>
						</table>

	</div>

			</td>
			<td>
			
			</td>			
		</tr>
	</table>
		<br>
</div>

	</body>
</html>
