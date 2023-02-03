<?php
import_request_variables("gPc");
//ini_set('session.bug_compat_warn',0);



$img1 = "resizer2.php?imgfile=" . $imgfile;

echo "<img alt='' src=" .  $img1  . " style='border: 2px gray solid'>"; 
?>