<?php
session_start();


include "checkRG.php";





echo "<div dir='ltr'>";

$uploaddir = "/home/arabicww/carsupload/" . trim($_SESSION['email']) . "/";

if (is_dir($uploaddir) == false)
{
	if(mkdir("/home/arabicww/carsupload/" . trim($_SESSION['email']) , 0777) == false) 
	{
		echo "ÎØÃ Ýí ÅäÔÇÁ ÇáãÌáÏ"; 
		exit;
	}

}





$dh  = opendir($uploaddir); 
while (false !== ($filename = readdir($dh))) { 
   $files[] = $filename; 
} 

sort($files); 
$x = 0;
?>
<table align="center" style="width: 640px">
	<tr >
		<td id="pno" style="width: 640px;text-align: center"></td>
	</tr>
</table>

<table align="center" style="width: 640px">
	<tr style="background-color:#F4F4F4">
		<td style="width: 40px;border:1px gray solid;text-align: center">sn</td>
		<td style="width: 400px;border:1px gray solid">Picture Name</td>
		<td style="width: 200px;border:1px gray solid">Operations</td>
	</tr>
</table>
<?php
for($i=0;$i<count($files);$i++)
{
	$ff = strlen($_SESSION['cid'] . "_");
	//echo substr($files[$i],0,$ff)  . "<br>";
	
	if(substr($files[$i],0,$ff) == ($_SESSION['cid'] . "_") )
	{
	$x++;
?>

<table align="center" style="width: 640px">
	<tr style="background-color:#F4F4F4">
		<td style="width: 40px;border:1px gray solid;text-align: center"><?php echo $x; ?></td>
		<td style="width: 400px;border:1px gray solid"><?php echo substr($files[$i],$ff,strlen($files[$i])); ?></td>
		<td style="width: 200px;border:1px gray solid">
		<form action="delfiles.php" method="post" style="margin:0px 0px 0px 0px">
			<input name="btnDel" type="hidden" value="<?php $files[$i]; ?>">
			<input name="submet" type="submit" value="Del" style="width: 45px">
		</form>
		</td>
	</tr>
</table>
<?php

	}
	
}
echo "</div>";


?>
<script language="javascript" type="text/javascript">
 pno.innerHTML = "<?php echo 'ÚÏÏ ÇáÕæÑ : ' . $x ?>"
</script>
