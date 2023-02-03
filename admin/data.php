<html>
<head>
<meta content="ar-sa" http-equiv="Content-Language">
<meta content="text/html; charset=windows-1256" http-equiv="Content-Type">
<?php
import_request_variables("gPc");

include "../db/db.php";

include "markfunction.php";

//----------------------------------------------------------------------------


$s = $_POST['s'];
$e = $_POST['e'];
$idb = $_POST['B5'];


    $sql = "SELECT * FROM main WHERE id='$idb'";
	$qr = mysql_query($sql);
	$cc = mysql_num_rows($qr);



		//$id = mysql_result($qr, 0, "id");

		$name1 = mysql_result($qr, 0, "name");
		$model1 = mysql_result($qr, 0, "model");
		$country1 = mysql_result($qr, 0, "Country");
		$city1 = mysql_result($qr, 0, "City");				
		$year = mysql_result($qr, 0, "year");
		$color = mysql_result($qr, 0, "color");		
		$price = mysql_result($qr, 0, "price");		
		$picture = mysql_result($qr, 0, "picture");				
		$active = mysql_result($qr, 0, "active");				
		$c_counter = mysql_result($qr, 0, "c_counter");	
		$note = mysql_result($qr, 0, "note");
		
					
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

			if ("<?php echo $Row[$main_cat] ?>" == "<?php echo $d3 ?>")
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
	
	
	if( main_select.options[main_select.selectedIndex].value != 0 )
	{
		sub_select.length = 0;
	}
	<?PHP
	$query_occasions = "SELECT DISTINCT $main_cat FROM $table";
	$occasions = mysql_query($query_occasions);

	while( $Row = mysql_fetch_array($occasions) )
	{
	?>
		if( main_select.options[main_select.selectedIndex].text == "<?php echo $Row[$main_cat] ?>" )
		{
		<?PHP
		$query_recipe_type = "SELECT DISTINCT $sub_cat FROM " . $table . " WHERE $main_cat = '$Row[$main_cat]'";
		$recipe_type = mysql_query($query_recipe_type);

		$ctr = 0;
			While( $Row2 = mysql_fetch_array($recipe_type) )
			{
				echo "sub_select.options[$ctr] = new Option('$Row2[$sub_cat]')" . "\n";
				echo "sub_select.options[$ctr].value = '$Row2[$sub_cat]'" . "\n";

					
			if ("<?php echo $Row2[$sub_cat] ?>" == "<?php echo $d4 ?>")
				{
					echo "sub_select.options[$ctr].selected = '$Row2[$sub_cat]'" . "\n";
				}

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
	echo "document.FormName.year1.value = document.FormName.year.value" . "\n";	
	?>
}

</script>

</head>

<body >
<form name="FormName" method="POST" action="replace.php" style="margin-top: 0; margin-bottom: 0">
	<div align="center">
		&nbsp;<table border="1" width="66%" id="table12" cellspacing="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#5F6EAA">
		<tr>
			<td>
			<div align="center">
				<table border="0" width="100%" id="table13" dir="rtl" cellspacing="0" cellpadding="0" style="border-collapse: collapse; border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" height="139">
					<tr>
						<td bgcolor="#91A5CD" height="35">
						<p align="center"><b>
						<font color="#000080" size="4" face="Tahoma">البيانات 
						الرئيسية</font></b></td>
					</tr>
					<tr>
						<td>
						<div align="center">
						<table border="0" width="100%" id="table14" cellspacing="2" dir="rtl" cellpadding="2">
							<tr>
								<td width="92" bgcolor="#D9E1F0">
								<b>
								<font color="#000080" size="2" face="Arabic Transparent">
								&nbsp;نوع السيارة </font></b></td>
								<td bgcolor="#D9E1F0">
								<p style="margin-top: 0; margin-bottom: 0">
								<font face="Arabic Transparent">
								<input type="text" name="name1" size="22" value="<?php echo $name1 ?>"></font></td>
								<td width="97" bgcolor="#D9E1F0">
								<font face="Arabic Transparent"><b>
								<font size="2" color="#000080">&nbsp;موديل السيارة </font></b></font></td>
								<td width="176" bgcolor="#D9E1F0">
								<p style="margin-top: 0; margin-bottom: 0">
								<font face="Arabic Transparent">
								<input type="text" name="model1" size="22" value="<?php echo $model1 ?>"></font></td>
							</tr>
							<tr>
								<td width="92" bgcolor="#D9E1F0">
								الدولة</td>
								<td bgcolor="#D9E1F0">
								<font face="Arabic Transparent" size="1">
								<input type="text" name="Country1" size="22" value="<?php echo $country1 ?>"></font></td>
								<td width="97" bgcolor="#D9E1F0">
								المدينة</td>
								<td width="176" bgcolor="#D9E1F0">
								<font face="Arabic Transparent" size="1">
								<input type="text" name="City1" size="22" value="<?php echo $city1 ?>"></font></td>
							</tr>
							<tr>
								<td width="92" bgcolor="#D9E1F0">
								<font face="Arabic Transparent"><font size="2">&nbsp;</font><b><font size="2" color="#000080">سنة 
								الصنع </font></b></font></td>
								<td bgcolor="#D9E1F0">
								<p style="margin-top: 0; margin-bottom: 0">
								<font face="Arabic Transparent" size="1">
								<input type="text" name="year1" size="15" value="<?php echo $year ?>"></font></td>
								<td width="97" bgcolor="#D9E1F0">
								<font face="Arabic Transparent"><b>
								<font size="2" color="#000080">&nbsp;لون السيارة</font></b></font></td>
								<td width="176" bgcolor="#D9E1F0">
								<font face="Arabic Transparent">
								<input type="text" name="color" size="22" value="<?php echo $color ?>"></font></td>
							</tr>
							<tr>
								<td width="92" bgcolor="#D9E1F0">
								<b>
								<font color="#000080" size="2" face="Arabic Transparent">
								&nbsp;السعر المقترح</font></b></td>
								<td bgcolor="#D9E1F0">
								<font face="Arabic Transparent" size="1">
								<input type="text" name="price" size="14" value="<?php echo $price ?>"></font><b><font color="#000080" size="2" face="Arabic Transparent"> 
								ر.س</font></b></td>
								<td width="97" bgcolor="#D9E1F0">
								<font color="#000080" size="2" face="Arabic Transparent">
								&nbsp;رقم العداد</font></td>
								<td width="176" bgcolor="#D9E1F0">
								<font face="Arabic Transparent">
								<input type="text" name="c_counter" size="22" dir="ltr" value="<?php echo $c_counter ?>"></font></td>
							</tr>
							<tr>
								<td width="92" bgcolor="#D9E1F0">
								<b>
								<font color="#000080" size="2" face="Arabic Transparent">
								تفعيل</font></b></td>
								<td bgcolor="#D9E1F0">
								<font face="Arabic Transparent" size="1">
								<input type="text" name="active" size="3" value="<?php echo $active ?>"></font></td>
								<td width="97" bgcolor="#D9E1F0"><b>
								<font color="#000080" size="2" face="Arabic Transparent">
								&nbsp;</font></b></td>
								<td width="176" bgcolor="#D9E1F0">
								&nbsp;</td>
							</tr>
							<tr>
								<td width="92" bgcolor="#D9E1F0">
								<b>
								<font color="#000080" size="2" face="Arabic Transparent">
								الصورة </font></b></td>
								<td bgcolor="#D9E1F0" colspan="3">
								<font face="Arabic Transparent">
								<input type="file" name="picture"  size="22" dir="rtl" style="display:none"></font>
							<input type="text" name="file" value="<?php echo $picture ?>">
							<input type="button" 	onClick="file.value=picture.value; OpenUrl('dir.php');" value="استعراض" name="B50">
							</td>
							</tr>
							<tr>
								<td width="92" bgcolor="#D9E1F0" valign="top">
								<b>
								<font size="2" color="#000080" face="Arabic Transparent">
								&nbsp;حالة السيارة</font></b></td>
								<td bgcolor="#D9E1F0" colspan="3">
								&nbsp;<textarea rows="7" name="note" cols="41"><?php echo $note ?></textarea></td>
							</tr>
							</table>
						</div>
						</td>
					</tr>
				</table>
			</div>
			<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
			<table border="0" width="100%" id="table19" cellpadding="2">
				<tr>
					<td>
					<input type="submit" value="إرسال" name="B1" style="float: left" dir="rtl">
					<input type="hidden" value="<?php echo $idb; ?>" name="B5">
					<input type="hidden" value="<?php echo $s; ?>" name="s">
					<input type="hidden" value="<?php echo $e; ?>" name="e">

					</td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
	</div>
	<p>&nbsp;</p>
</form>
</body>
<script type="text/javascript" language="javascript">

document.FormName.model1.value = <?php echo $model1 ?>;
document.FormName.name1.value = <?php echo $name1 ?>;


</script>

</html>
