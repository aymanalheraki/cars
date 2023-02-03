
<head>
<meta http-equiv="Content-Language" content="en-us">
</head>

<table border="1" width="100%" id="table1">
	<tr>
		<td>
		
<?php 
//$dir = '/home/albarart/public_html/u_images/'; 
$dir = '../u_images/b'; 

// Open a known directory, and proceed to read its contents 
if (is_dir($dir)) { 
   if ($dh = opendir($dir)) { 
       while (($file = readdir($dh)) !== false) { 
		if ((strstr($file,'.jpg') == '.jpg') or (strstr($file,'.gif') == '.gif'))
		{
           print "<table>
         			<tr>
         				<td>
         					<a target='_blank' href='../u_images/b/$file'>$file</a>
         				</td>
         			</tr>
         		</table>"; 
	     }
       } 
       closedir($dh); 
   } 
} 
?>		
		
		
		</td>
		<td>
		
<?php 
//$dir = '/home/albarart/public_html/u_images/'; 
$dir = '../u_images/s'; 

// Open a known directory, and proceed to read its contents 
if (is_dir($dir)) { 
   if ($dh = opendir($dir)) { 
       while (($file = readdir($dh)) !== false) { 
		if ((strstr($file,'.jpg') == '.jpg') or (strstr($file,'.gif') == '.gif'))
		{
           print "<table>
         			<tr>
         				<td>
         					<a target='_blank' href='../u_images/s/$file'>$file</a>
         				</td>
         			</tr>
         		</table>"; 
	     }
       } 
       closedir($dh); 
   } 
} 
?>		
		
		
		
		
		</td>
	</tr>
</table>



