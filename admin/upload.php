<?php 
import_request_variables("gPc");

$uploaddir = '../carimages/'; 

$uploadfile = $uploaddir. $_FILES['userfile']['name']; 

print "<pre>"; 
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) { 
   print "Чсусн Ъу ЪЭуэсх ксь Чсуцок"; 
} else { 
   print "хфЧп удпсЩ нэ ЪЭуэс хаЧ Чсусн ц хах Шкж ЧсуксцуЧЪ Эцс ЧсЮиУ\n"; 
   print_r($_FILES); 
}
print "</pre>"; 

?>
