<?php
import_request_variables("gPc");

include "../db/db.php";
require "../db/fields.php";

carmain();

    $sql = "SELECT * FROM main";
	$qr = mysql_query($sql);
	$ccc = mysql_num_rows($qr);

    $sql = "SELECT * FROM main ORDER BY $f1 LIMIT $e,$s";
	$qr = mysql_query($sql);
	$cc = mysql_num_rows($qr);

?>

<html dir="rtl">

<head>
<meta http-equiv="Content-Language" content="ar-sa">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title>include</title>
<style type="text/css">
.style1 {
	color: #FFFF00;
}
</style>
</head>

<body>

<div align="center">
  <table border="0" width="100%" id="table2" dir="rtl">
	<tr>
		<td>
		<form method="POST" action="list.php" style="word-spacing: 0; margin: 0" name="form1">
			<p align="center">عرض 
			<input type="text" name="s" value="<?php echo $s; ?>" size="6">
			من <input type="text" name="e" value="<?php echo $e; ?>" size="6">
			<input type="submit" value="إرسال" name="B6">&nbsp;&nbsp;&nbsp;&nbsp; 
			عدد السجلات<span lang="en-us"> :</span>&nbsp; <?php echo $ccc; ?><span lang="en-us">
			</span></p>
		</form>
		</td>
	</tr>
	</table>
  <table border="0" cellpadding="0" style="border-collapse: collapse" width="1056" bgcolor="#FFFAF0" dir="rtl" id="table1" cellspacing="1">
    <tr>

      <td width="85" bgcolor="#000080" height="29">&nbsp;</td>

      <td width="43" bgcolor="#000080" height="29">
		<p align="center"><font color="#FFFF00">مفعل</font></td>

      <td width="108" bgcolor="#000080" height="29">
		<p align="center"><font color="#FFFF00">نوع السيارة</font></td>
      <td width="109" bgcolor="#000080" height="29">
		<p align="center"><font color="#FFFF00">طراز السيارة</font></td>
      <td width="65" bgcolor="#000080" height="29" class="style1">
		الدولة</td>
      <td width="65" bgcolor="#000080" height="29" class="style1">
		المدينة</td>
      <td width="65" bgcolor="#000080" height="29">
		<p align="center"><font color="#FFFF00">سنة التصنيع</font></td>
      <td width="88" bgcolor="#000080" height="29">
		<p align="center"><font color="#FFFF00">لون السيارة</font></td>
      <td width="82" bgcolor="#000080" height="29">
		<p align="center"><font color="#FFFF00">رقم العداد</font></td>
      <td width="85" bgcolor="#000080" height="29">
		<p align="center"><font color="#FFFF00">السعر المقترح</font></td>
      <td width="118" bgcolor="#000080" height="29">
		<p align="center"><font color="#FFFF00">اسم الصورة</font></td>

      <td width="239" bgcolor="#000080" height="29">
		<p align="center"><font color="#FFFF00">ملاحظات</font></td>

    </tr>
<?php
$a = 1;
for($i=0;$i<$cc;$i++)
{    
		$id = mysql_result($qr, $i, "id");
		$idb = $id;
		$name1 = mysql_result($qr, $i, "name");
		$model1 = mysql_result($qr, $i, "model");
		$country1 = mysql_result($qr, $i, "Country");
		$city1 = mysql_result($qr, $i, "City");				
		$year = mysql_result($qr, $i, "year");
		$color = mysql_result($qr, $i, "color");		
		$price = mysql_result($qr, $i, "price");		
		$picture = mysql_result($qr, $i, "picture");				
		$active = mysql_result($qr, $i, "active");				
		$c_counter = mysql_result($qr, $i, "c_counter");	
		$note = mysql_result($qr, $i, "note");
					

if ($a == 1) $a = 0;
else if ( a == 0) $a = 1;
if ($a == 1) $co = "#F5EED3";
elseif ($a == 0) $co = "";

?>
    <tr bgcolor="<?php echo $co ?>">
    
      <td width="85">
      <form style="word-spacing: 0; margin: 0" action="update.php" dir="rtl" method="POST" target="_self" name="form2">
      <span><input type="submit" value="حذف" name="B1" dir="rtl"><input type="submit" value="تعديل" name="B1"><input type="hidden" value="<?php echo $idb; ?>" name="B5">
        <input type="hidden" value="<?php echo $s; ?>" name="s">
		<input type="hidden" value="<?php echo $e; ?>" name="e">

      </span>
      
      </form>
      </td>
      <td width="43">
		<p align="center"><?php echo $active; ?></td>
      <td width="108"><?php echo $name1 ?></td>
      <td width="109"><?php echo $model1 ?></td>
      <td width="65"><?php echo $country1 ?></td>
      <td width="65"><?php echo $city1 ?></td>
      <td width="65"><?php echo $year ?></td>
      <td width="88"><?php echo $color ?></td>
      <td width="82"><?php echo $c_counter ?></td>
      <td width="85"><?php echo $price  ?></td>
      <td width="118"><?php echo $picture ?></td>
      <td width="239"><?php echo $note ?></td>
    </tr>
<?php
}
?>
  </table>
</div>

</body>

</html>