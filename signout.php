<?php
session_start();
import_request_variables("gPc");

ini_set('session.bug_compat_warn',0);
					$_SESSION = array();
					session_unset();
					session_unregister("user1");
					session_destroy();
					session_write_close();
					
					echo "<script language='javascript'>document.location = 'http://cars.arabicwww.com'</script>";
?>
