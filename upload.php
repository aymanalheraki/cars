<?php 
session_start();
import_request_variables("gPc");

include "checkRG.php";

?>
<meta content="text/html; charset=windows-1256" http-equiv="Content-Type">
<?php 
echo "<div dir='rtl'>";
$uploaddir = "/home/arabicww/carsupload/" . trim($_SESSION['email']) . "/";

if (is_dir($uploaddir) == false)
{
	if(mkdir("/home/arabicww/carsupload/" . trim($_SESSION['email']) , 0777) == false) 
	{
		echo "خطأ في إنشاء المجلد"; 
		exit;
	}

}

$dh  = opendir($uploaddir); 

$uploadfile = $uploaddir . $_SESSION['cid'] . "_" . $_FILES['userfileb']['name']; 

print "<pre>"; 
if (move_uploaded_file($_FILES['userfileb']['tmp_name'], $uploadfile)) { 
  //echo "انتهى تحميل الملف بنجاح";
  // print "الملف تم تحميله على الموقع"; 
} else { 
  // print "هناك مشكلة في تحميل هذا الملف و هذه بعض المعلومات حول الخطأ\n"; 
  // print_r($_FILES); 
}

print "</pre>"; 

include "memfiles.php";
echo "</div>";
?>