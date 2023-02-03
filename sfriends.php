<html dir="rtl">
<?php
import_request_variables("gPc");
?>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 6.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title>إرسال بيانات السيارة لصديق</title>
</head>

<body topmargin="0" leftmargin="0" bottommargin="0" marginwidth="0" marginheight="0">

<div align="center">
	<table border="0" width="252" id="table2" bgcolor="#E4EBF1">
		<tr>
			<td bgcolor="#8AA9C8">
			<p align="center" style="margin-top: 0; margin-bottom: 0"><b>
			<font color="#FFFF00"><span lang="ar-sa">إرسال بيانات سيارة لصديق</span></font></b></td>
		</tr>
		<tr>
			<td>
			<form method="POST" style="margin-top: 0; margin-bottom: 0" action="sfriends_action.php?id=<?php echo $id ?>">
				<div align="center">
					<table border="0" width="97%" id="table3">
						<tr>
							<td bgcolor="#CAD8E6">
							<p align="center"><font color="#000080">
							<span lang="ar-sa">&nbsp;اسم المرسل</span></font></td>
						</tr>
						<tr>
							<td>
							<p align="center">
							<input type="text" name="sname" size="25"></td>
						</tr>
						<tr>
							<td bgcolor="#CAD8E6">
							<p align="center"><font color="#000080">
							<span lang="ar-sa">&nbsp;البريد الإليكتروني للصديق</span></font></td>
						</tr>
						<tr>
							<td>
							<p align="center">
							<input type="text" name="email" size="25"></td>
						</tr>
						<tr>
							<td bgcolor="#CAD8E6">
							<p align="center"><font color="#000080">
							<span lang="ar-sa">&nbsp;بيانات السيارة</span></font></td>
						</tr>
						<tr>
							<td>
							<p align="center">
							<textarea rows="7" name="note" cols="38" style="font-family: Tahoma; font-size: 12px">صديقي العزيز
تصفحت هذا الموقع و أرغب منك أن تطلع على السيارة الموجودة في الرابط التالي و الذي يحتوي على جميع البيانات الخاصة بها مع صورة مكبرة للسيارة.</textarea></td>
						</tr>
						<tr>
							<td>
							<input type="submit" value="&#1573;&#1585;&#1587;&#1575;&#1604;" name="B1" style="float: left"></td>
						</tr>
					</table>
				</div>
				<input type="hidden" name="id" value="<?php echo $id ?>">
			</form>
			</td>
		</tr>
	</table>
</div>

</body>

</html>
