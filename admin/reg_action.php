
<head>
<meta content="ar-sa" http-equiv="Content-Language">
<meta content="text/html; charset=windows-1256" http-equiv="Content-Type">
</head>

<?php
import_request_variables("gPc");

include "../db/db.php";

$sql = "INSERT INTO main (id,Country,City,name,model,year,color,price,picture,active,c_counter,note) VALUES
(id,'$Country1', '$City1','$name1', '$model1', '$year1', '$color', '$price', '$file', '$active','$c_counter' ,'$note')";
$qr = mysql_query($sql);


//	echo mysql_errno() . "<br>";
//	echo mysql_error() . "<br>";

if (mysql_errno() == 0)
{
?>
<p align="center">&nbsp;</p>
<div align="center">
  <table border="1" cellpadding="0" style="border-collapse: collapse" width="442" dir="ltr" id="table1" height="92" bordercolor="#C0C0C0">
    <tr>
      <td>
      <p align="center" dir="rtl">&nbsp;</p>
      <p align="center" dir="rtl">تم إضافة السيارة لقاعدة البيانات</p>
      <p align="center" dir="rtl">&nbsp;</td>
    </tr>
  </table>
</div>
<p align="center" dir="rtl">&nbsp;</p>
<?php
}
else
{
echo "تم إدخال رقم معرف أو اسم صورة موجود مسبقاً";
}
?>