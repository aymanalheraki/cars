<head>
<script language="javascript">
document.write("sdfsdfsd");

function Fill()
{
	<?php
		echo "opener.document.FormName.model1.value = 'aa'" . "\n";	
	?>
}


opener.document.FormName.model1.value);
</script>


<meta http-equiv="Content-Language" content="en-us">
</head>

<table border="0" width="100%" id="table1">
	<tr>
		<td>
		
<?php
import_request_variables("gPc");


$dir = '../carimages'; 

$dh  = opendir($dir); 
while (false !== ($filename = readdir($dh))) { 
   $files[] = $filename; 
} 

sort($files); 

       for($i=2;$i<count($files);$i++)
		{
			$fff = "../carimages/$file/$files[$i]";
           ?>
           <table style="border-collapse: collapse" border="1" bordercolor="#EBEBEB" width="243">
         			<tr>
         				<td width="224">
         					<a target='_blank' href="<?php echo $fff ?>"><?php echo $files[$i] ?></a>
         				</td>
						<td width="11">
								<img src='../images/bull1.jpg' style="CURSOR: hand" onClick="opener.document.FormName.file.value='<?php echo $files[$i] ?>'" width="25" height="22" alt="äÞá ÇÓã ÇáãáÝ áäãæÐÌ ÇáÊÚÏíá Ãæ ÇáÅÖÇÝÉ.">
						</td>         				
						<td width="11">
								<a href="confirm.php?dd=<?php echo $files[$i]; ?>">
								<img src='../images/delbull.gif' style="CURSOR: hand" alt="ãÓÍ ÇáãáÝ"></a>
						</td>         				

         			</tr>
         		</table>
         		<?php
         		
	     }

       closedir($dh); 

?>		
		
		
		</td>
		
</table>