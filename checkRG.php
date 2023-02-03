<?php
$ss = session_is_registered("user1");
if(!$ss)
{
	echo "<center>" . "Аг МЦъД гсйногЦ ЕпЕ гАущми оФД йслМА онФА гАцзжга" . "</center>";
	sleep(5);
	echo "<script language='javascript'>window.parent.document.location = 'cars'</script>";
	exit;
}
?>
