<?php
// ####################### SET PHP ENVIRONMENT ###########################
error_reporting(E_ALL & ~E_NOTICE);

// #################### DEFINE IMPORTANT CONSTANTS #######################
import_request_variables("gPc");
define('REGISTER_GLOBALS', 1);
print "the g : " . $g . "<br>"; 

echo 10*10;

?>
