<?php
session_start();
setcookie(session_name(), $_COOKIE[session_name()], time()+2400, '/');  
include "db/db.php";
import_request_variables("gPc");
$Country_cat = "Country";
$City_cat = "City";
$table = "main";

$main_cat = "name";
$sub_cat = "model";

$query_occasions = "SELECT DISTINCT " . $main_cat . " FROM " . $table . " Where active='1' ORDER by " . $main_cat;
$occasions = mysql_query($query_occasions);


$query_Country = "SELECT DISTINCT " . $Country_cat . " FROM " . $table . " WHERE active=1";
$Countries = mysql_query($query_Country);




$sql = "SELECT name, count(name) AS ns FROM main WHERE active='1' GROUP BY name ORDER BY name";
	$qr = mysql_query($sql);
	$cc = mysql_num_rows($qr);


?>

<script language="javascript" type="text/javascript">

var xmlhttp;

if (window.ActiveXObject){
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
} else {

xmlhttp = new XMLHttpRequest();
}


function makerequest(serverPage, objID,param) {

    var obj = document.getElementById(objID);

	var data = param;

    xmlhttp.open("GET", encodeURI(serverPage),true);
    
    
//    xmlHttp.open("GET", strUrl, true); 
    
    
   	xmlhttp.setRequestHeader("If-Modified-Since", "Sat, 1 Jan 2000 00:00:00 GMT");
	xmlhttp.setRequestHeader("Last-Modified", "Sat, 1 Jan 2000 01:00:00 GMT");
	xmlhttp.setRequestHeader("Expires", "Sat, 1 Jan 2000 01:00:00 GMT");   	
   	xmlhttp.setRequestHeader("Cache-Control", "no-store, no-cache, must-revalidate");  // HTTP/1.1
//	xmlhttp.setRequestHeader("Cache-Control", "post-check=0", false);
	xmlhttp.setRequestHeader("Pragma", "no-cache");
  //  xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=utf-8');
    
    
    
    
    
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var parentElement = document.getElementById(objID);
            var wrappingDiv = document.createElement('div');
            parentElement.innerHTML = "";
            wrappingDiv.innerHTML = document.getElementById(objID).value + ' ' + xmlhttp.responseText;
            wrappingDiv.innerHTML = xmlhttp.responseText;
            parentElement.appendChild(wrappingDiv);
        }
        else {
            var parentElement = document.getElementById(objID);
            var wrappingDiv = document.createElement('div');
            parentElement.innerHTML = "";
            wrappingDiv.innerHTML = "";
            wrappingDiv.innerHTML = "<div align='center' class=\"bold\">" + "<img alt='' height='50' src='images/ajax-loader.gif' width='50' />" + "</div>";
            parentElement.appendChild(wrappingDiv);


        }
    }
    xmlhttp.send(data);

}

function ajaxFunction(serverPage, objID,queryString){
	var ajaxRequest;  // The variable that makes Ajax possible!
	
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	
	
	
	
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			var ajaxDisplay = document.getElementById(objID);
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
		}else
		{
			var ajaxDisplay = document.getElementById(objID);
			ajaxDisplay.innerHTML = "<div align='center' class=\"bold\">" + "<img alt='' height='50' src='images/ajax-loader.gif' width='50' />" + "</div>";
		}
	}

	serverPage;
	
	ajaxRequest.open("GET",serverPage + queryString, true);
	
   	ajaxRequest .setRequestHeader("If-Modified-Since", "Sat, 1 Jan 2000 00:00:00 GMT");
	ajaxRequest.setRequestHeader("Last-Modified", "Sat, 1 Jan 2000 01:00:00 GMT");
	ajaxRequest.setRequestHeader("Expires", "Sat, 1 Jan 2000 01:00:00 GMT");   	
   	ajaxRequest.setRequestHeader("Cache-Control", "no-store, no-cache, must-revalidate");  // HTTP/1.1
//	xmlhttp.setRequestHeader("Cache-Control", "post-check=0", false);
	ajaxRequest.setRequestHeader("Pragma", "no-cache");
  //  xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=utf-8');
	
	
	
	
	
	ajaxRequest.send(null); 
}



function BodyLoad()
{
	var select = document.FormName.name;
	var sub_select = document.FormName.model;

	<?PHP
	$ctr = 0;
	While( $Row = mysql_fetch_array($occasions) )
	{
//	
	echo "select.options[$ctr] = new Option('$Row[$main_cat]')" . "\n";
	echo "select.options[$ctr].value = '$Row[$main_cat]'" . "\n";
	
		if ("<?php echo $Row[$main_cat] ?>" == "<?php echo $name ?>")
	{
		echo "select.options[$ctr].selected = '$Row[$main_cat]'" . "\n";
	}

	
	
	$ctr++;
	}
	?>
}

function Fill_Sub() 
{
	var main_select = document.FormName.name;
	var sub_select = document.FormName.model;

	if( main_select.options[main_select.selectedIndex].value != 0)
	{
		sub_select.length = 0;
	}
	<?PHP
	$query_occasions = "SELECT DISTINCT $main_cat FROM $table Where active='1' " ;
	$occasions = mysql_query($query_occasions);

	while( $Row = mysql_fetch_array($occasions) )
	{
	?>
		if( main_select.options[main_select.selectedIndex].text == "<?php echo $Row[$main_cat] ?>" )
		{
		<?PHP
		$query_recipe_type = "SELECT DISTINCT $sub_cat FROM " . $table . " WHERE $main_cat = '$Row[$main_cat]' AND active='1' ORDER by $sub_cat";
		$recipe_type = mysql_query($query_recipe_type);

		$ctr = 0;
			While( $Row2 = mysql_fetch_array($recipe_type) )
			{
				echo "sub_select.options[$ctr] = new Option('$Row2[$sub_cat]')" . "\n";
				echo "sub_select.options[$ctr].value = '$Row2[$sub_cat]'" . "\n";

				$ctr++;
			}
		?>
		}

	<?PHP
	}
	?>
}




function CountryBodyLoad()
{
	var selectC = document.CountryForm.Country;
	<?PHP
	$ctrC = 0;
	While( $Row = mysql_fetch_array($Countries) )
	{
	echo "selectC.options[$ctrC] = new Option('$Row[$Country_cat]')" . "\n";
	echo "selectC.options[$ctrC].value = '$Row[$Country_cat]'" . "\n";
	$ctrC++;
	}
	?>
}

function Country_Fill_Sub() 
{
	var Country_select = document.CountryForm.Country;
	var City_select = document.CountryForm.City;
	
	
	if( Country_select.options[Country_select.selectedIndex].value != 0 )
	{
		City_select.length = 0;
	}
	<?PHP
	$query_Country = "SELECT DISTINCT $Country_cat FROM $table WHERE active=1";
	$Countries = mysql_query($query_Country);

	while( $Row = mysql_fetch_array($Countries) )
	{
	?>
		if( Country_select.options[Country_select.selectedIndex].text == "<?php echo $Row[$Country_cat] ?>" )
		{
		<?PHP
		$query_recipe_typeC = "SELECT DISTINCT $City_cat FROM " . $table . " WHERE $Country_cat = '$Row[$Country_cat]' AND active=1";
		$recipe_typeC = mysql_query($query_recipe_typeC);

		$ctrC = 0;
			While( $Row2 = mysql_fetch_array($recipe_typeC) )
			{
				echo "City_select.options[$ctrC] = new Option('$Row2[$City_cat]')" . "\n";
				echo "City_select.options[$ctrC].value = '$Row2[$City_cat]'" . "\n";

				echo "document.CountryForm.Country1.value = '$Row[$Country_cat]'" . "\n";	
				echo "document.CountryForm.City1.value = document.CountryForm.City.value" . "\n";	

				$ctrC++;
			}
		?>
		}
		
	<?PHP
	}
	?>
}


function Fill_City()
{
	<?php
	echo "document.CountryForm.City1.value = document.CountryForm.City.value" . "\n";	
	?>
}


</script>
<html dir="rtl">

<head>
<meta content="en-us" http-equiv="Content-Language">
<meta content="Microsoft FrontPage 12.0" name="GENERATOR">
<meta content="FrontPage.Editor.Document" name="ProgId">
<meta content="text/html; charset=windows-1256" http-equiv="Content-Type">
<meta content="no-cache" http-equiv="Pragma">
<meta content="-1" http-equiv="Expires">
<link href="style.css" rel="STYLESHEET" type="text/css">
<title>”Êﬁ «·”Ì«—«  «·⁄—»Ì</title>
</head>

<style>
a:link {
	text-decoration: none;
	color: darkblue;
}
a:visited {
	text-decoration: none;
	color: blue;
}
a:active {
	text-decoration: none;
	color: #eeeeff;
}
a:hover {
	text-decoration: none;
	color: red;
}
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
.style11 {
	text-align: center;
}
</style>
<body bottommargin="0" onload="BodyLoad();Fill_Sub();CountryBodyLoad();Country_Fill_Sub();" style="text-align: center" topmargin="0">

<div align="center" style="border: thin gray solid; width: 980px; background-color: #EBF0F5">
	<table id="table9" width="980">
		<tr style="border: thin gray solid">
			<td style="width: 305px">
			<table id="table10" bgcolor="#D6E0EB" border="1" bordercolordark="#D6E0EB" bordercolorlight="#D6E0EB" cellpadding="0" cellspacing="0" dir="rtl" style="border-collapse: collapse; font-face: 'Arabic Transparent'; font-size: 14; color: 000080; text-indent: 15px; margin-left: 15px; margin-top: 0; margin-bottom: 0" width="300">
				<tr>
					<td align="center" bgcolor="#E9EEF3">
					<p align="right" style="width: 108px"><b><span lang="ar-sa">ÕÊ· «·„⁄—÷</span></b></p>
					</td>
					<td align="center" bgcolor="#E9EEF3" style="width: 63px">
					<p align="right"><b><span lang="ar-sa">
					<a href="s.php?s1=contact">« ’· »‰«</a></span></b></p>
					</td>
				</tr>
			</table>
			</td>
			<td class="style9" style="width: 228px">
			<form action="s.php?s1=a&amp;p=1&amp;f=5" class="font12" method="POST" name="form5" style="margin: 0">
				<p align="right" style="margin-top: 0; margin-bottom: 0; width: 224px;">
				<span lang="ar-sa">√œŒ· —ﬁ„ «·”Ì«—… </span>
				<input name="id" size="7" style="text-align: center" type="text"><span lang="ar-sa">
				</span>
				<input name="B4" style="font-size: 10px" type="submit" value="⁄—÷"></p>
			</form>
			</td>
			<td class="style10">
			<form dir="rtl" method="POST" name="CountryForm" style="margin: 0">
				<table style="width: 100%">
					<tr>
						<td style="width: 45px; text-align: left; font-family: Tahoma; font-size: 12px; color: navy">
						<span lang="ar-qa">«·œÊ·…</span></td>
						<td style="width: 140px">
						<font face="Arabic Transparent" size="1">
						<select class="hp_long" dir="rtl" name="Country" onchange="Country_Fill_Sub();" size="1" style="background-color: #D9E1F0">
						</select></font></td>
						<td style="width: 45px; text-align: left; font-family: Tahoma; font-size: 12px; color: navy">
						<span lang="ar-qa">«·„œÌ‰…</span></td>
						<td><font face="Arabic Transparent" size="1">
						<select class="hp_long" dir="rtl" name="City" size="1" style="background-color: #D9E1F0">
						</select></font></td>
					</tr>
				</table>
			</form>
			</td>
		</tr>
	</table>
</div>
<div align="center">
	<table id="table1" border="0" cellpadding="0" style="border-collapse: collapse" width="980">
		<tr>
			<td>
			<p align="center">
			<table style="width: 100%">
				<tr>
					<td style="width: 319px">
					<img alt="" height="159" src="images/mlogo.png" width="374"></td>
					<td style="text-align: center">
					<table style="width: 580px; text-align: center">
						<tr>
							<td>
							<img alt="" class="style1" height="100" src="images/adv1.jpg" width="580"></td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
			</p>
			</td>
		</tr>
		<tr>
			<td>
			<table id="table3" align="center" border="0" height="21"  width="980">
				<tr>
					<td align="center" height="21" width="100%">
					<table id="table1" align="center" bgcolor="#ECE9D8" border="1" bordercolor="#B9AD68" cellpadding="0" dir="rtl" style="" width="980px">
						<tr>
							<td bgcolor="#CAC18E" style="width: 496px" >
							<form action="s.php?s1=a&amp;p=1&amp;f=1" method="POST" name="FormName" style="margin: 0px 0px 0px 0px">
								
									<table border="0" cellpadding="0" >
										<tr>
											<td width="20px"></td>
											<td style="width:51px;text-align:center">«·„«—ﬂ…</td>
											<td width="143">
											<select name="name" onchange="Fill_Sub()" size="1">
											</select></td>
											<td style="width:51px;text-align:center">«·„ÊœÌ·</td>
											<td width="155">
											<select name="model" size="1">
											</select></td>
											<td width="52">
											<input dir="rtl" name="B1" style="font-size: 12px; background-color: #CAC18E" type="submit" value=" ⁄—÷ "></td>
										</tr>
									</table>
								
							</form>
							</td>
							<td bgcolor="#CAC18E" class="style11" >
							<form action="s.php?s1=a&f=4" method="post" style="margin:0px 0px 0px 0px">
								<input name="Submit1" type="submit" value="⁄—÷ Ã„Ì⁄ «·”Ì«—« "></form>
							</td>
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
	<table id="table2" border="0" cellpadding="0" style="border-collapse: collapse" width="980">
		<tr>
			<td>
			<p align="center">
			<img border="0" height="21" src="images/bodytop.jpg" width="980"></p>
			</td>
		</tr>
		<tr>
			<td height="100%">
			<table id="table4" border="0" class="style4" dir="rtl" height="104" width="100%">
				<tr>
					<td bgcolor="#7094B9" class="style2" dir="ltr" height="0" width="168">
					<p align="center"></p>
					</td>
					<td bgcolor="#7094B9" class="style5" valign="top">
					<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
					</td>
				</tr>
				<tr>
					<td class="style3" valign="top" width="168">
					<div align="center">
						<table id="table12" border="0" cellpadding="0" cellspacing="0" width="15">
							<tr>
								<td>
								<img align="left" border="0" height="28" src="images/iconb.jpg" width="157"></td>
							</tr>
						</table>
						<table id="table7" border="0" cellspacing="1" dir="rtl" width="155">
							<?php
						for($i=0;$i<$cc;$i++)
						{
							$d3[$i] = mysql_result($qr, $i, 'name');
							$ds[$i] = mysql_result($qr, $i, 'ns');
						?>
							<tr>
								<td dir="ltr" height="22" width="13">
								<p align="right">
								<img border="0" height="22" src="images/bull1.jpg" width="13"></p>
								</td>
								<td bgcolor="#D6E0EB" dir="rtl" style="FONT-FAMILY: Tahoma; font-size: 12; color: #ffff11; text-indent: 5px; margin-right: 5px" width="112">
								<a href="s.php?s1=a&amp;p=1&amp;n=<?php echo $d3[$i] ?>&amp;f=3">
								<?php echo $d3[$i]; ?></a></td>
								<td bgcolor="#D6E0EB" class="font12" dir="rtl" width="26">
								<p align="center"><?php echo $ds[$i] ?></p>
								</td>
							</tr>
							<?php
						}
						?>
						</table>
					</div>
					<p></p>
					<form action="signin.php" method="post" name="signinForm">
						<table border="0" style="width: 100%">
							<tr>
								<td bgcolor="#7094B9" style="height: 25px">
								<p align="center" style="margin-top: 0; margin-bottom: 0; text-align: center; color: #FFff88; font-family: Tahoma; font-size: 14px">
								<span lang="ar-qa"> ”ÃÌ· œŒÊ· «·√⁄÷«¡</span></p>
								</td>
							</tr>
							<tr>
								<td bgcolor="#F9F9F9">
								<table align="right" border="0" dir="rtl" width="100%">
									<tr>
										<td align="center">
										<table border="0" width="131">
											<tr>
												<td align="right">
												<div align="center">
													<table border="0" width="131">
														<tr>
															<td style="font-family: Tahoma; font-size: 12px">
															«”„ «·œŒÊ·</td>
														</tr>
														<tr>
															<td width="63">
															<input dir="rtl" name="user1" size="8" style="width: 120px;"></td>
														</tr>
														<tr>
															<td style="font-family: Tahoma; font-size: 12px">
															«·—ﬁ„ «·”—Ì</td>
														</tr>
														<tr>
															<td width="60">
															<input dir="ltr" maxlength="32" name="pass" size="6" style="width: 120px;" type="password"></td>
														</tr>
														<tr>
															<td style="text-align: left; width: 120px">
															<input dir="rtl" name="sign-in" style="background-color: #4F78A2; color: yellow" type="submit" value="«·œŒÊ·"></td>
														</tr>
													</table>
												</div>
												</td>
											</tr>
										</table>
										</td>
									</tr>
									<tr style="background-color: #eeeeee">
										<td align="center" valign="top">
										<span lang="ar-qa">
										<a href="s.php?s1=regform"> ”ÃÌ·</a></span></td>
									</tr>
									<tr>
										<td align="center" valign="top">
										<a href="javascript:OpenUrl('fuser.php')">
										‰”Ì  «·—ﬁ„ «·”—Ì</a></td>
									</tr>
								</table>
								</td>
							</tr>
						</table>
					</form>
					<p></p>
					<p align="center" style="margin-top: 0; margin-bottom: 0">&nbsp;«·„ Ê«ÃœÌ‰ 
					Õ«·Ì« ›Ì «·„Êﬁ⁄<?php include "line.php"; ?>“«∆—</p>
					</td>
					<td class="style6" valign="top">
					<table style="width: 100%">
						<tr>
							<td>
							&nbsp;</td>
						</tr>
						<tr >
							<td ><?php include $s1 . ".php"; ?>
							</td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td>
			<p align="center" style="margin-top: 0; margin-bottom: 0">
			<img border="0" height="21" src="images/bodybot.jpg" width="980"></p>
			</td>
		</tr>
	</table>
</div>
<p align="center" style="margin-top: 0; margin-bottom: 0; font-size: 12; font-face: 'Traditional Arabic'">
<font color="#00008B"><span lang="ar-sa">Ã„Ì⁄ «·ÕﬁÊﬁ „Õ›ÊŸ… ·”Êﬁ «·”Ì«—«  «·⁄—»Ì 
2010.</span></font></p>

</body>

</html>
