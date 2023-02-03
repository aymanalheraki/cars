<?php 
import_request_variables("gPc");
define('REGISTER_GLOBALS', 'on');

$path_to_file = '';
$files = $HTTP_POST_FILES['files'];
if (!ereg("/$", $path_to_file))
        $path_to_file = $path_to_file."/";
foreach ($files['name'] as $key=>$name) {
  if ($files['size'][$key]) {
     // clean up file name
     $name = ereg_replace("[^a-z0-9._]", "",
       str_replace(" ", "_",
           str_replace("%20", "_", strtolower($name)
           )
       )
     );
     $location = $path_to_file.$name;
          while (file_exists($location))
        $location .= ".copy"; 
     copy($files['tmp_name'][$key],$location);
     unlink($files['tmp_name'][$key]);
     echo "\n
Successfully uploaded file: $name.";
  }
}

?>
