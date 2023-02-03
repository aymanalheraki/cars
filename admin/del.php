<?php
include "../db/db.php";
$id = $_POST["B5"];

$s = $_POST['s'];
$e = $_POST['e'];


if ($_POST["B1"] == "ãæÇÝÞ")
{
	$sql = "DELETE FROM main WHERE id='$id'";
	$qr = mysql_query($sql);
	if(mysql_affected_rows()==0)
	{
	echo "áã íÊã ãÓÍ Ãí ÈíÇäÇÊ ãä ÇáÓÌáÇÊ";
	exit;
	}
	echo "ÊãÊ ÚãáíÉ ÇáãÓÍ";
}
elseif ($_POST["B1"] == "ÅáÛÇÁ ÇáÃãÑ")
{
	echo "áã íÊã ÇáãÓÍ";
}
?>
<form method="POST" action="list.php">
	<p>
	<input type="submit" value="ÇáÚæÏÉ ááÞÇÆãÉ" name="B1">
	<input type="hidden" value="<?php echo $s; ?>" name="s">
	<input type="hidden" value="<?php echo $e; ?>" name="e">
	</p>
</form>


