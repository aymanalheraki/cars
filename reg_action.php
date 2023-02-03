<?php
session_start();
import_request_variables("gPc");

include "checkRG.php";



include "db/db.php";

$Country1 = $_SESSION['country'];
$City1 = $_SESSION['city'];
$username = $_SESSION['email'];

$active = 1;
$sql = "INSERT INTO main (Country,City,username,name,model,year,color,price,active,c_counter,note) VALUES
('$Country1', '$City1','$username','$name1','$model1', '$year1', '$color', '$price', '$active','$c_counter' ,'$note')";
$qr = mysql_query($sql);

$idd = mysql_insert_id();
$_SESSION['cid'] = $idd; 

//	echo mysql_errno() . "<br>";
//	echo mysql_error() . "<br>";

if (mysql_errno() == 0)
{
?>
<div align="center">
  <table border="1" cellpadding="0" style="border-collapse: collapse" width="442" dir="ltr" height="50" bordercolor="#C0C0C0">
    <tr>
      <td>
      <p align="center" dir="rtl" style="font-family:Tahoma;font-size:16px;color:navy"> „ ≈÷«›… «·”Ì«—… ·ﬁ«⁄œ… «·»Ì«‰« </p>
      	  </td>
    </tr>
  </table>
</div>
<p align="center" dir="rtl"><?php include "uploadimages.php"; ?></p>

<?php
}
else
{
echo " „ ≈œŒ«· —ﬁ„ „⁄—› √Ê «”„ ’Ê—… „ÊÃÊœ „”»ﬁ«";
}
?>