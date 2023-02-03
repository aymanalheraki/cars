
<head>
<meta http-equiv="Content-Language" content="ar-sa">
</head>

<?php
import_request_variables("gPc");

$message = $sname . "\n" . $email . "\n" . $note . "\n" . "http://" . "www.astorm.net" . "/" . "s.php?s1=a&p=1&f=5&id=$id";

 $headers .= "MIME-Version: 1.0\n";
 $headers .= "Content-type: text/plain; charset=windows-1256\n";
 $headers .= "From: $sname <$email>\r\n"; 

mail("tta225@hotmail.com;support@astorm.net" , "ׁ׃ַבֹ דה דװÊׁם דה ַֿ־ב ַבדזÞÚ", $message, $headers);

?><p align="center"><b><font color="#000080">װßַׁנ</font></b></p>
<p align="center" dir="rtl"><b><font color="#000080">ÊדÊ Úדבםֹ ַבֵׁ׃ַב ָהַּֽ</font></b></p>
