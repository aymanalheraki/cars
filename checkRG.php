<?php
$ss = session_is_registered("user1");
if(!$ss)
{
	echo "<center>" . "�� ���� ������� ��� ������ ��� ����� ���� �������" . "</center>";
	sleep(5);
	echo "<script language='javascript'>window.parent.document.location = 'http://cars.arabicwww.com'</script>";
	exit;
}
?>
