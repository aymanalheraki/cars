<?php
import_request_variables("gPc");


if ($_POST['B1'] == '���')
{
$ff = unlink('../carimages/' . $dd );
echo "<script language='javascript'>document.location = 'dir.php'</script>";
}
else
{
echo "<script language='javascript'>document.location = 'dir.php'</script>";
}

?>
