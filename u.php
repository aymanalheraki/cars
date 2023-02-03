<?php
session_start();
import_request_variables("gPc");

include "checkRG.php";

ini_set('session.gc_maxlifetime', 86400);
ini_set('session.cookie_lifetime', 86400);

setcookie(session_name(), $_COOKIE[session_name()], time()+2400, '/'); 

?>

<html dir="rtl">

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 12.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="-1">
<LINK href="style.css" type=text/css rel=STYLESHEET>

<title>سوق السيارات العربي</title>
</head>
<style>
a:link {text-decoration: none;  color:darkblue;}
a:visited {text-decoration: none;  color:blue;}
a:active {text-decoration: none;  color:#eeeeff; }
a:hover {text-decoration: none; color:red;}
.style1 {
	border-style: solid;
	border-width: 1px;
}
.style2 {
	color: #000080;
	font-weight: normal;
	font-size: 14px;
	FONT-FAMILY: "Arabic Transparent", Tahoma, sans-serif;
	margin-top: 0;
	margin-bottom: 0;
	border-left-style: solid;
	border-left-width: 1px;
	border-top-style: solid;
	border-top-width: 1px;
}
.style3 {
	color: #000080;
	font-weight: normal;
	font-size: 16px;
	FONT-FAMILY: "Arabic Transparent", Tahoma, sans-serif;
	margin-top: 0;
	margin-bottom: 0;
	border-left-style: solid;
	border-left-width: 1px;
	border-top-style: none;
	border-top-width: medium;
	border-bottom-style: solid;
	border-bottom-width: 1px;
}
.style4 {
	border-collapse: collapse;
	border-right-width: 0px;
	border-top-width: 0px;
	border-bottom-width: 0px;
}
.style5 {
	color: #000080;
	font-weight: normal;
	font-size: 14px;
	FONT-FAMILY: "Arabic Transparent", Tahoma, sans-serif;
	margin-top: 0;
	margin-bottom: 0;
	border-right-style: solid;
	border-right-width: 1px;
	border-top-style: solid;
	border-top-width: 1px;
}
.style6 {
	border-right-style: solid;
	border-right-width: 1px;
	border-bottom-style: solid;
	border-bottom-width: 1px;
}
.style9 {
	border-top-style: solid;
	border-top-width: 1px;
	border-bottom-style: solid;
	border-bottom-width: 1px;
}
.style10 {
	border-right-style: solid;
	border-right-width: 1px;
	border-bottom-style: solid;
	border-bottom-width: 1px;
	border-top-style: solid;
	border-top-width: 1px;
}
</style>

<body topmargin="0" bottommargin="0" style="text-align: center" onload="BodyLoad();Fill_Sub();CountryBodyLoad();Country_Fill_Sub();">

<div align="center" style="border:thin gray solid;width:980px;background-color:  #EBF0F5">
	<table width="980" id="table9" >
		<tr style="border:thin gray solid">
			<td class="style10">
			&nbsp;</td>
		</tr>
	</table>
</div>

<div align="center">
	<table border="0" width="980" id="table1" cellpadding="0" style="border-collapse: collapse">
		<tr>
			<td>
			<p align="center">
			<table style="width: 100%">
				<tr>
					<td style="width: 319px">
					<img alt="" height="159" src="images/mlogo.png" width="374"></td>
					<td style="text-align:center">
					<table style="width: 580px;text-align:center">
						<tr>
							<td >
							<img alt="" class="style1" height="100" src="images/adv1.jpg" width="580"></td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td>
			<table align="center" border="0" width="980" id="table3" style="border-collapse: collapse" height="21">
				<tr>
					<td align="center" width="100%" height="21">
					
					
					<table id="table1" align="center" bgcolor="#ECE9D8" border="1" bordercolor="#B9AD68" cellpadding="0" dir="ltr" style="border-collapse: collapse" width="980">
		<tr>
			<td bgcolor="#CAC18E" style=" text-align:center;font-family:Tahoma;font-size:14px;color:maroon">صفحة العضو : <?php echo $_SESSION['name'];  ?></td>
		</tr>
	</table>

					
					
					
					
					
					</td>
				</tr>
				</table>
			</td>
		</tr>
	</table>
</div>
<div align="center">
	<table border="0" width="980" id="table2" cellpadding="0" style="border-collapse: collapse">
		<tr>
			<td>
			<p align="center">
			<img border="0" src="images/bodytop.jpg" width="980" height="21"></td>
		</tr>
		<tr>
			<td height="100%">
			<table border="0" width="100%" id="table4" dir="rtl" height="104" class="style4">
				<tr>
					<td width="168" dir="ltr" bgcolor="#7094B9" height="0" class="style2">
					<p align="center"></td>
					<td valign="top" bgcolor="#7094B9" class="style5">
					<p style="margin-top: 0; margin-bottom: 0">&nbsp;</td>
				</tr>
				<tr>
					<td width="168" valign="top" class="style3">
					<div align="center">
					<table border="0" width="15" id="table12" cellspacing="0" cellpadding="0">
						<tr>
							<td>
							&nbsp;</td>
						</tr>
					</table>
					</div>

<table border="0" style="width: 100%">
	<tr>
		<td bgcolor="#7094B9" style="height: 25px">
		<p align="center" style="margin-top: 0; margin-bottom: 0; text-align: center; color: #FFff88;font-family:Tahoma;font-size:14px">
		<span lang="ar-qa">خيارات الأعضاء</span></p>
		</td>
	</tr>
	<tr>
		<td bgcolor="#F9F9F9">
		<table align="right" border="0" dir="rtl" width="100%">
			<tr>
				<td align="center">
				<table border="0" width="141">
					<tr>
						<td align="right">
						<div align="center">
							<table border="0" width="131">
								<tr>
									<td style="font-family:Tahoma;font-size:12px">
									<span lang="ar-qa"><a href="u.php?s1=enterdata">إضافة عرض جديد</a></span></td>
								</tr>
								<tr>
									<td style="font-family:Tahoma;font-size:12px">
									<span lang="ar-qa">قائمة عروضي</span></td>
								</tr>
								<tr>
									<td style="font-family:Tahoma;font-size:12px">
									<span lang="ar-qa">تعديل بياناتي الشخصية</span></td>
								</tr>
								<tr>
									<td style="font-family:Tahoma;font-size:12px">
									<span lang="ar-qa">
									<a href="u.php?s1=changepassword">تغيير الرقم السري</a></span></td>
								</tr>
								<tr>
									<td style="font-family:Tahoma;font-size:12px">
									<span lang="ar-qa"><a href="signout.php">تسجيل خروج</a></span></td>
								</tr>
							</table>
						</div>
						</td>
					</tr>
				</table>
				</td>
			</tr>
			</table>
		</td>
	</tr>
</table>
					

					<p align="center" style="margin-top: 0; margin-bottom: 0">
			</td>
					<td valign="top" class="style6">
					
					<table style="width: 100%">
						<tr>
							<td>
							&nbsp;</td>
						</tr>
						<tr style="border:thin gray solid">
							<td style="border:thin gray solid">
							<?php 
								if(isset($s1))
								{
									if(file_exists($s1 . ".php"))
									{
										include $s1 . ".php"; 
									}
								}
							?>
							</td>
						</tr>
					</table>
					
					
					
					</td>
				</tr>
			</table>
			<p>&nbsp;</td>
		</tr>
		<tr>
			<td>
			<p align="center" style="margin-top: 0; margin-bottom: 0">
			<img border="0" src="images/bodybot.jpg" width="980" height="21"></td>
		</tr>
	</table>
</div>

<p align="center" style="margin-top: 0; margin-bottom: 0; font-size:12; font-face:'Traditional Arabic'">
<font color="#00008B"><span lang="ar-sa">
جميع الحقوق محفوظة لسوق السيارات العربي 2010.</span></font></p>

</body>

</html>