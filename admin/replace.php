
<head>
<meta http-equiv="Content-Language" content="ar-sa">
<meta content="text/html; charset=windows-1256" http-equiv="Content-Type">
</head>

<?php
import_request_variables("gPc");
include "../db/db.php";

//require "fields.php";

$idb = $_POST['B5'];
$s = $_POST['s'];
$e = $_POST['e'];

if (mysql_errno()<>0)
{
 echo "أحد الحقول التي يجب أن لا تتكرر حدث تكرار لها -- أعد المحاولة من جديد";
 exit;
 }


	$sql = "UPDATE main SET	name='$name1',
							model='$model1',
							Country='$Country1',
							City='$City1',
							year='$year1',
							color='$color',
							price='$price',
							picture='$file',
							active='$active',
							c_counter='$c_counter',
							note='$note' WHERE id='$idb'";


	$qr = mysql_query($sql);
	
//	echo mysql_errno() . "<br>";
//	echo mysql_error() . "<br>";
if (mysql_errno()<>0)
{
 echo "الاسم المقترح تم تكراره ارجع بالمتصفح للنموذج و استبدل الاسم باسم آخر";
 exit;
 }

			echo " تمت عملية التعديل ... اضغط مفتاح العودة للقائمة للرجوع لسرد البيانات";

?>
<form method="POST" action="list.php">
	<p>
	<input type="submit" value="العودة للقائمة" name="B1">
	<input type="hidden" value="<?php echo $s; ?>" name="s">
	<input type="hidden" value="<?php echo $e; ?>" name="e">
	</p>
</form>

