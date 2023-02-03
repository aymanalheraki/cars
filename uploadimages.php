<?php
session_start();
import_request_variables("gPc");

include "checkRG.php";

?>
<html dir="rtl">
<head>
<title>Picture Upload Page</title>
</head>
<body>


<p align="center" style="font-family:Tahoma;font-size:14px"> Õ„Ì· «·’Ê— «·Œ«’… »«·⁄—÷ —ﬁ„ <?php echo $idd ?> </p>
	<br>


	<p>
	<table align="center" style="width: 680px">
		<tr>
			<td>
	<form method="post" action="upload.php" enctype="multipart/form-data" name="uform" target="I1" style="margin:0px 0px 0px 0px">
	<table align="center" style="width: 413px">
		<tr>
			<td style="height: 33px"></td>
			<td style="height: 33px">
			<input type="file" name="userfileb"  size="25"></td>
			<td style="width: 93px; height: 33px;">
			<input type="submit" name="submit"  value="Õ„· «·„·›"></td>
			<td  style=" width:190px; height: 33px;">
			&nbsp;</td>
		</tr>
	</table>
	</form>
			</td>
			<td style="width:300px">
			<form action="memfiles.php" method="post" style="margin:0px 0px 0px 0px">
				<input name="Submit1" type="submit" value="”—œ «·„·›« "></form>
			</td>
		</tr>
	</table>
	</p>
	<table dir="rtl" align="center" style="width: 700px">
		<tr>
			<td>
			<iframe id="I1" name="I1" src="memfiles.php" style="height: 200px; width:100%;direction:rtl">
			Your browser does not support inline frames or is currently configured not to display inline frames.
			</iframe>
			</td>
		</tr>
	</table>

</body>
</html>