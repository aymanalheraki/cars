<?php
session_start(); 
?>
<html dir="rtl">

<?php
import_request_variables("gPc");

include "db/db.php";

//----------------------------------------------------------------------------

$table = "carsmembers";

$Country_cat = "country";
$City_cat = "city";

$query_Country = "SELECT DISTINCT " . $Country_cat . " FROM " . $table ;
$Countries = mysql_query($query_Country);

?>


<head>
<meta content="ar-qa" http-equiv="Content-Language" >
<meta content="text/html; charset=windows-1256" http-equiv="Content-Type" >
<title>Untitled 1</title>
</head>
<script type="text/javascript" language="javascript">
function CountryBodyLoad()
{
	var selectC = document.regForm.Country;
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
	var Country_select = document.regForm.Country;
	var City_select = document.regForm.City;
	
	
	if( Country_select.options[Country_select.selectedIndex].value != 0 )
	{
		City_select.length = 0;
	}
	<?PHP
	$query_Country = "SELECT DISTINCT $Country_cat FROM $table";
	$Countries = mysql_query($query_Country);

	while( $Row = mysql_fetch_array($Countries) )
	{
	?>
		if( Country_select.options[Country_select.selectedIndex].text == "<?php echo $Row[$Country_cat] ?>" )
		{
		<?PHP
		$query_recipe_typeC = "SELECT DISTINCT $City_cat FROM " . $table . " WHERE $Country_cat = '$Row[$Country_cat]'";
		$recipe_typeC = mysql_query($query_recipe_typeC);

		$ctrC = 0;
			While( $Row2 = mysql_fetch_array($recipe_typeC) )
			{
				echo "City_select.options[$ctrC] = new Option('$Row2[$City_cat]')" . "\n";
				echo "City_select.options[$ctrC].value = '$Row2[$City_cat]'" . "\n";

				echo "document.regForm.Country1.value = '$Row[$Country_cat]'" . "\n";	
				echo "document.regForm.City1.value = document.regForm.City.value" . "\n";	

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
	echo "document.regForm.City1.value = document.regForm.City.value" . "\n";	
	?>
}


</script>
<body  onload="CountryBodyLoad();Country_Fill_Sub()">
<div align="center" style="direction:rtl;width:100%; height:100%; height: 337px; text-align:center">
<br />
<form method="post" action="s.php?s1=regformaction" name="regForm">
<table style="width:400px;background-color:#F9F9F9">
	<tr>
		<td style="text-align:center;height:40px;background-color:#D9DAE8; font-family:Tahoma;color:navy">
		نموذج تسجيل عضو في سوق السيارات العربي</td>
	</tr>
	<tr>
		<td>
	<table style="width: 100%;margin:0px 0px 0px 0px;font-family:Tahoma;font-size:12px;color:navy">
		<tr>
			<td style="width: 110px">الاسم :</td>
			<td><input name="name" style="width: 204px" type="text" ></td>
		</tr>
		<tr>
			<td style="width: 110px">البريد الإلكتروني :</td>
			<td><input name="email" style="width: 204px" type="text" ></td>
		</tr>
		<tr>
			<td style="width: 110px">الدولة :</td>
			<td><font face="Arabic Transparent" size="1">
								<table style="width: 100%">
				<tr>
					<td>
								<font face="Arabic Transparent" size="1">
								<select name="Country" class="hp_long" width="197px" size="1" dir="rtl" onChange="Country_Fill_Sub();" style="background-color: #D9E1F0">
								</select></font></td>
					<td>
								<font face="Arabic Transparent" size="1">
								<input type="text" name="Country1" size="22" style="width: 108px" ></font></td>
				</tr>
			</table>
			</font></td>
		</tr>
		<tr>
			<td style="width: 110px">المدينة :</td>
			<td><font face="Arabic Transparent" size="1">
								<table style="width: 100%">
				<tr>
					<td>
								<font face="Arabic Transparent" size="1">
								<select name="City" class="hp_long" width="197px" size="1" dir="rtl" onChange="Fill_City();" style="background-color: #D9E1F0">
								</select></font></td>
					<td>
								<font face="Arabic Transparent" size="1">
								<input type="text" name="City1" size="22" style="width: 107px" ></font></td>
				</tr>
			</table>
			</font></td>
		</tr>
		<tr>
			<td style="width: 110px;vertical-align:top">العنوان :</td>
			<td>
			<textarea name="TextArea1" style="height: 76px; width: 243px" cols="20" rows="1"></textarea></td>
		</tr>
		<tr>
			<td style="width: 110px">&nbsp;</td>
			<td style="text-align:center">
			&nbsp;</td>
		</tr>
		<tr>
			<td style="width: 110px">الرمز التأكيدي :</td>
			<td><input name="txtNumber" type="text" id="txtNumber" value="">&nbsp;&nbsp;<img src="randomimage.php"></td>

		</tr>
		<tr>
			<td style="width: 110px">&nbsp;</td>
			<td style="text-align:center">&nbsp;</td>
		</tr>
		<tr>
			<td style="width: 110px">&nbsp;</td>
			<td style="text-align:center">
			&nbsp;</td>
		</tr>
		<tr>
			<td style="width: 110px">&nbsp;</td>
			<td style="text-align:center">
			<input name="Submit1" type="submit" value="تنفيذ" style="width: 58px" ></td>
		</tr>
		</table>
		</td>
	</tr>
</table>
</form>
</div>
</body>

</html>
