<?php
session_start();
import_request_variables("gPc");

include "checkRG.php";

include "db/db.php";

//----------------------------------------------------------------------------

$main_cat = "name";
$sub_cat = "model";
$table = "main";

$query_occasions = "SELECT DISTINCT " . $main_cat . " FROM " . $table . " WHERE active=1";
$occasions = mysql_query($query_occasions);

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


function Fill_Sub1()
{
	<?php
	echo "document.FormName.model1.value = document.FormName.model.value" . "\n";	
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
<meta content="ar-sa" http-equiv="Content-Language">
<meta content="Microsoft FrontPage 12.0" name="GENERATOR">
<meta content="FrontPage.Editor.Document" name="ProgId">
<meta content="text/html; charset=windows-1256" http-equiv="Content-Type">
<title>’›Õ… ÃœÌœ… 1</title>
</head>

<body onload="BodyLoad(); Fill_Sub()">

<form action="u.php?s1=reg_action" method="post" name="FormName" style="margin-top: 0; margin-bottom: 0">
	<div align="center">
&nbsp;<table border="1" bordercolor="#5F6EAA" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 459px;">
			<tr>
				<td>
				<div align="center">
					<table id="table15" border="0" cellpadding="0" cellspacing="0" dir="rtl" height="139" style="padding: 1px 4px; border-collapse: collapse; border-style: solid; border-width: 0; width: 100%;">
						<tr>
							<td style="background-color: #D5DCEC; height: 45px; font-family: Tahoma; font-size: 14px; text-align: center; color: navy">
							≈÷«›… ⁄—÷ ÃœÌœ</td>
						</tr>
						<tr>
							<td>
							<div align="center">
								<table border="0" cellpadding="2" cellspacing="2" dir="rtl" style="background-color: #EFEFEF;width:100%; font-family:Tahoma;font-size:12px">
									<tr>
										<td style="width: 72px; height: 48px;">‰Ê⁄ «·”Ì«—… </td>
										<td style="width: 323px; height: 48px;">
										
										&nbsp;
										<table style="width: 100%">
											<tr>
												<td>
										
										<select class="hp_long" dir="rtl" name="name" onchange="Fill_Sub()" size="1" style="background-color: #D9E1F0;width:110px">
										</select></td>
												<td>
										
										<input name="name1" size="22" type="text" style="width: 100px"></td>
											</tr>
										</table>
										</td>
	
									</tr>
									<tr>
										<td style="width: 72px; height: 20px;">„ÊœÌ· «·”Ì«—…</td>
										<td style="width: 323px; height: 20px;">
										
										<table style="width: 100%">
											<tr>
												<td>
										<select class="hp_long" dir="rtl" name="model" onchange="Fill_Sub1();" size="1" style="background-color: #D9E1F0;width:110px">
										</select></td>
												<td>
												<input name="model1" size="22" type="text" style="width: 100px"></td>
											</tr>
										</table>
										</td>
									</tr>
									<tr>
										<td style="width: 72px">”‰… «·’‰⁄</td>
										<td style="width: 323px">
										&nbsp;<table style="width: 100%">
											<tr>
												<td>
										<select class="hp_short" dir="ltr" name="year1" onchange="Fill_Subyear()" size="1" width="99px">
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
										</select></td>
												<td><input name="year" size="15" type="text"></td>
											</tr>
										</table>
										</td>
									</tr>
									<tr>
										<td style="width: 72px">·Ê‰ «·”Ì«—…</td>
										<td style="width: 323px">
										<font face="Arabic Transparent">
										<input name="color" size="22" type="text"></font></td>

									</tr>
									<tr>
										<td style="width: 72px">«·”⁄— «·„ﬁ —Õ</td>
										<td style="width: 323px">
										<input name="price" size="14" type="text">
										</td>

									</tr>
									<tr>
										<td style="width: 72px">—ﬁ„ «·⁄œ«œ</td>
										<td style="width: 323px">

										<input dir="ltr" name="c_counter" size="22" type="text"></td>
									</tr>
									<tr>
										<td style="width: 72px;vertical-align:top">»Ì«‰«  «·”Ì«—…&nbsp;</td>
										<td style="width: 323px">

										<textarea name="note" rows="7" style="width: 312px" cols="20"></textarea></td>
									</tr>
									</table>
							</div>
							</td>
						</tr>
					</table>
				</div>
				<table id="table11" border="0" cellpadding="2" width="100%">
					<tr>
						<td>
						<input dir="rtl" name="B1" style="float: left" type="submit" value="≈—”«·"></td>
					</tr>
				</table>
				</td>
			</tr>
		</table>
	</div>
</form>

<p>
										&nbsp;</p>

</body>

</html>
