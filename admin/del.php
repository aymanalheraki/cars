<?php
include "../db/db.php";
$id = $_POST["B5"];

$s = $_POST['s'];
$e = $_POST['e'];


if ($_POST["B1"] == "�����")
{
	$sql = "DELETE FROM main WHERE id='$id'";
	$qr = mysql_query($sql);
	if(mysql_affected_rows()==0)
	{
	echo "�� ��� ��� �� ������ �� �������";
	exit;
	}
	echo "��� ����� �����";
}
elseif ($_POST["B1"] == "����� �����")
{
	echo "�� ��� �����";
}
?>
<form method="POST" action="list.php">
	<p>
	<input type="submit" value="������ �������" name="B1">
	<input type="hidden" value="<?php echo $s; ?>" name="s">
	<input type="hidden" value="<?php echo $e; ?>" name="e">
	</p>
</form>


