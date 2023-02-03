<?php
import_request_variables("gPc");

include "../db/db.php";
require "../db/fields.php";
include "markfunction.php";

carmain();

//----------------------------------------------------------------------------

$main_cat = "name";
$sub_cat = "model";
$table = "main";

$Country_cat = "Country";
$City_cat = "City";

$query_occasions = "SELECT DISTINCT " . $main_cat . " FROM " . $table . " WHERE active=1";
$occasions = mysql_query($query_occasions);

$query_Country = "SELECT DISTINCT " . $Country_cat . " FROM " . $table . " WHERE active=1";
$Countries = mysql_query($query_Country);

?>
<script language="javascript">

var childWin;
function OpenUrl(url) {
	childWin = window.open(url,"AdWin","toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=yes,resizable=no,width=700,height=500");
}


function BodyLoad()
{
	var select = document.FormName.name;
	<?PHP
	$ctr = 0;
	While( $Row = mysql_fetch_array($occasions) )
	{
	echo "select.options[$ctr] = new Option('$Row[$main_cat]')" . "\n";
	echo "select.options[$ctr].value = '$Row[$main_cat]'" . "\n";
	$ctr++;
	}
	?>
}

function Fill_Sub() 
{
	var main_select = document.FormName.name;
	var sub_select = document.FormName.model;
	
	
	if( main_select.options[main_select.selectedIndex].value != 0 )
	{
		sub_select.length = 0;
	}
	<?PHP
	$query_occasions = "SELECT DISTINCT $main_cat FROM $table WHERE active=1";
	$occasions = mysql_query($query_occasions);

	while( $Row = mysql_fetch_array($occasions) )
	{
	?>
		if( main_select.options[main_select.selectedIndex].text == "<?php echo $Row[$main_cat] ?>" )
		{
		<?PHP
		$query_recipe_type = "SELECT DISTINCT $sub_cat FROM " . $table . " WHERE $main_cat = '$Row[$main_cat]' AND active=1";
		$recipe_type = mysql_query($query_recipe_type);

		$ctr = 0;
			While( $Row2 = mysql_fetch_array($recipe_type) )
			{
				echo "sub_select.options[$ctr] = new Option('$Row2[$sub_cat]')" . "\n";
				echo "sub_select.options[$ctr].value = '$Row2[$sub_cat]'" . "\n";

				echo "document.FormName.name1.value = '$Row[$main_cat]'" . "\n";	
				echo "document.FormName.model1.value = document.FormName.model.value" . "\n";	

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
	var selectC = document.FormName.Country;
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
	var Country_select = document.FormName.Country;
	var City_select = document.FormName.City;
	
	
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

				echo "document.FormName.Country1.value = '$Row[$Country_cat]'" . "\n";	
				echo "document.FormName.City1.value = document.FormName.City.value" . "\n";	

				$ctrC++;
			}
		?>
		}
		
	<?PHP
	}
	?>
}



function Fill_Sub1()
{
	<?php
	echo "document.FormName.model1.value = document.FormName.model.value" . "\n";	
	?>
}

function Fill_City()
{
	<?php
	echo "document.FormName.City1.value = document.FormName.City.value" . "\n";	
	?>
}


function Fill_Subyear()
{
	<?php
	echo "document.FormName.year.value = document.FormName.year1.value" . "\n";	
	?>
}

</script>

<?php
//----------------------------------------------------------------------------
?>
<html dir="rtl">

<head>
<meta http-equiv="Content-Language" content="ar-sa">
<meta name="GENERATOR" content="Microsoft FrontPage 12.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title>’›Õ… ÃœÌœ… 1</title>
</head>

<body onLoad="BodyLoad(); Fill_Sub();CountryBodyLoad();Country_Fill_Sub()">

<form name="FormName" method="POST" action="reg_action.php" style="margin-top: 0; margin-bottom: 0">
	<div align="center">
&nbsp;<table border="1" width="66%" id="table4" cellspacing="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#5F6EAA">
		<tr>
			<td>
			<div align="center">
				<table border="0" width="100%" id="table15" dir="rtl" cellspacing="0" cellpadding="0" style="border-collapse: collapse; border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" height="139">
					<tr>
						<td bgcolor="#91A5CD" height="35">
						<p align="center"><b>
						<font color="#000080" size="4" face="Tahoma">«·»Ì«‰«  
						«·—∆Ì”Ì…</font></b></td>
					</tr>
					<tr>
						<td>
						<div align="center">
						<table border="0" width="100%" id="table16" cellspacing="2" dir="rtl" cellpadding="2">
							<tr>
								<td width="92" bgcolor="#D9E1F0">
								<b>
								<font color="#000080" size="2" face="Arabic Transparent">&nbsp;‰Ê⁄ 
								«·”Ì«—… </font></b></td>
								<td bgcolor="#D9E1F0">
								<p style="margin-top: 0; margin-bottom: 0">
								<font face="Arabic Transparent" size="1">
								<select name="name" class="hp_long" width="197px" size="1" dir="rtl" onChange="Fill_Sub()" style="background-color: #D9E1F0">
								</select></font></p>
								<p style="margin-top: 0; margin-bottom: 0">
								<font face="Arabic Transparent">
								<input type="text" name="name1" size="22"></font></td>
								<td width="97" bgcolor="#D9E1F0">
								<font face="Arabic Transparent"><b>
								<font size="2" color="#000080">&nbsp;„ÊœÌ· 
								«·”Ì«—… </font></b></font></td>
								<td width="176" bgcolor="#D9E1F0">
								<p style="margin-top: 0; margin-bottom: 0">
								<font face="Arabic Transparent" size="1">
								<select name="model" class="hp_long" width="197px" size="1" dir="rtl" onchange="Fill_Sub1();" style="background-color: #D9E1F0">
								</select></font></p>
								<p style="margin-top: 0; margin-bottom: 0">
								<font face="Arabic Transparent">
								<input type="text" name="model1" size="22"></font></td>
							</tr>
							<tr>
								<td width="92" bgcolor="#D9E1F0">
								«·œÊ·…</td>
								<td bgcolor="#D9E1F0">
								<font face="Arabic Transparent" size="1">
								<select name="Country" class="hp_long" width="197px" size="1" dir="rtl" onChange="Country_Fill_Sub();" style="background-color: #D9E1F0">
								</select><br>
								<font face="Arabic Transparent">
								<input type="text" name="Country1" size="22"></font></font></td>
								<td width="97" bgcolor="#D9E1F0">
								«·„œÌ‰…</td>
								<td width="176" bgcolor="#D9E1F0">
								<font face="Arabic Transparent" size="1">
								<select name="City" class="hp_long" width="197px" size="1" dir="rtl" onChange="Fill_City();" style="background-color: #D9E1F0">
								</select><br>
								<font face="Arabic Transparent">
								<input type="text" name="City1" size="22"></font></font></td>
							</tr>
							<tr>
								<td width="92" bgcolor="#D9E1F0">
								<font face="Arabic Transparent"><font size="2">&nbsp;</font><b><font size="2" color="#000080">”‰… 
								«·’‰⁄ </font></b></font></td>
								<td bgcolor="#D9E1F0">
								<p style="margin-top: 0; margin-bottom: 0">
								<font face="Arabic Transparent" size="1">
								<select name="year1"  class="hp_short" width="99px" dir="ltr" size="1" onchange="Fill_Subyear()">
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select></font></p>
								<p style="margin-top: 0; margin-bottom: 0">
								<font face="Arabic Transparent" size="1">
								<input type="text" name="year" size="15"></font></td>
								<td width="97" bgcolor="#D9E1F0">
								<font face="Arabic Transparent"><b>
								<font size="2" color="#000080">&nbsp;·Ê‰ 
								«·”Ì«—…</font></b></font></td>
								<td width="176" bgcolor="#D9E1F0">
								<font face="Arabic Transparent">
								<input type="text" name="color" size="22"></font></td>
							</tr>
							<tr>
								<td width="92" bgcolor="#D9E1F0">
								<b>
								<font color="#000080" size="2" face="Arabic Transparent">&nbsp;«·”⁄— 
								«·„ﬁ —Õ</font></b></td>
								<td bgcolor="#D9E1F0">
								<font face="Arabic Transparent" size="1">
								<input type="text" name="price" size="14"></font><b><font color="#000080" size="2" face="Arabic Transparent"> 
								—.”</font></b></td>
								<td width="97" bgcolor="#D9E1F0">
								<font color="#000080" size="2" face="Arabic Transparent">&nbsp;—ﬁ„ 
								«·⁄œ«œ</font></td>
								<td width="176" bgcolor="#D9E1F0">
								<font face="Arabic Transparent">
								<input type="text" name="c_counter" size="22" dir="ltr"></font></td>
							</tr>
							<tr>
								<td width="92" bgcolor="#D9E1F0">
								<b>
								<font color="#000080" size="2" face="Arabic Transparent">
								 ›⁄Ì·</font></b></td>
								<td bgcolor="#D9E1F0">
								<font face="Arabic Transparent" size="1">
								<input type="text" name="active" size="3" value="1"></font></td>
								<td width="97" bgcolor="#D9E1F0"><b>
								<font color="#000080" size="2" face="Arabic Transparent">&nbsp;</font></b></td>
								<td width="176" bgcolor="#D9E1F0">
								&nbsp;</td>
							</tr>
							<tr>
								<td width="92" bgcolor="#D9E1F0">
								<b>
								<font color="#000080" size="2" face="Arabic Transparent">
								«·’Ê—… </font></b></td>
								<td bgcolor="#D9E1F0" colspan="3">
								<font face="Arabic Transparent">
								<input type="file" name="picture" size="22" dir="rtl" style="display:none">
								<input type="text" name="file" value="<?php echo $d8 ?>">
							<input type="button" 	onClick="file.value=picture.value; OpenUrl('dir.php');" value="«” ⁄—«÷" name="B50">
								</font></td>
							</tr>
							<tr>
								<td width="92" bgcolor="#D9E1F0" valign="top">
								<b>
								<font size="2" color="#000080" face="Arabic Transparent">&nbsp;Õ«·… 
								«·”Ì«—…</font></b></td>
								<td bgcolor="#D9E1F0" colspan="3">
								&nbsp;<textarea rows="7" name="note" cols="41"></textarea></td>
							</tr>
							</table>
						</div>
						</td>
					</tr>
				</table>
			</div>
			<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
			<table border="0" width="100%" id="table11" cellpadding="2">
				<tr>
					<td>
					<input type="submit" value="≈—”«·" name="B1" style="float: left" dir="rtl"></td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
	</div>
	<p>&nbsp;</p>
</form>

</body>

</html>