<?php
import_request_variables("gPc");
define('REGISTER_GLOBALS', 'on');


include "db.php";
$id = $_POST["B5"];

if ($_POST["B1"] == "ãæÇÝÞ")
{
	$sql = "DELETE FROM data WHERE id='$id'";
	$qr = mysql_query($sql);
	if(mysql_affected_rows()==0)
	{
	echo "Warning, No rows deleted from co_data.";
	exit;
	}
			echo "ÊãÊ ÚãáíÉ ÇáãÓÍ ÈäÌÇÍ ... ÓíÚæÏ ÇáãÊÕÝÍ áÓÑÏ ÈíÇäÇÊ ÇáÕæÑ.";
			echo "<script language='javascript'>document.location = 'list.php'</script>";


}
elseif ($_POST["B1"] == "ÅáÛÇÁ ÇáÃãÑ")
{
	echo "áã íÊã ÇáãÓÍ";
	exit;
}
?>
