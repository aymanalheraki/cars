<?php 
import_request_variables("gPc");

$uploaddir = '../carimages/'; 

$uploadfile = $uploaddir. $_FILES['userfile']['name']; 

print "<pre>"; 
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) { 
   print "����� �� ������ ��� ������"; 
} else { 
   print "���� ����� �� ����� ��� ����� � ��� ��� ��������� ��� �����\n"; 
   print_r($_FILES); 
}
print "</pre>"; 

?>
