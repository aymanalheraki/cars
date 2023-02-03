
<head>
<meta content="text/html; charset=windows-1256" http-equiv="Content-Type">
<meta content="ar-sa" http-equiv="Content-Language">
</head>

<?php
include 'markfunction.php';
?>
<body>

<form method="POST" action="markaction.php">
	<table border="0" width="100%" id="table1" dir="rtl">
		<tr>
			<td colspan="2" bgcolor="#528ABD">
			<p align="center"><font color="#FFFF00"><b>بيانات السيارات المستعجلة</b></font></td>
		</tr>
		<tr>
			<td width="131" valign="top"><b><font size="2" face="Tahoma">&nbsp; 
			البيانات</font></b></td>
			<td>
			<textarea rows="7" name="main1" cols="77" dir="rtl" style="font-family: Tahoma"><?php echo $main1; ?></textarea></td>
		</tr>
		</table>
	<p align="center">
	

	</p>
	<div style="background-color: #C0C0C0">
	<p align="center"></p>
	</div>
	
	
	
	
	<p><input type="submit" value="إرسال" name="B1"></p>
</form>
