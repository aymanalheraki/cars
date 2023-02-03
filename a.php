<html dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<meta http-equiv="Content-Type" content="image/jpeg;">

<LINK href="style.css" type=text/css rel=STYLESHEET>
<title>معرض المدينة الإليكتروني لبيع السيارات</title>
<SCRIPT LANGUAGE="JavaScript1.1"> 

var childWin;
function OpenUrl(u,w,h) {
var iw,ih;
var w;
var h;
var aa = "width="+w+",height="+h+",left=0,top=0,toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=yes,resizable=no";
var	tt = "Show_Picture";
	childWin = window.open(u,'_blank',aa,true);
}
</SCRIPT>

<style type="text/css">
.style1 {
	border-left: 1px solid #C0C0C0;
	border-right-style: solid;
	border-right-width: 1px;
	border-top: 1px solid #C0C0C0;
	border-bottom-style: solid;
	border-bottom-width: 1px;
}
.style2 {
	border-left: 1px solid #C0C0C0;
	border-right-style: solid;
	border-right-width: 1px;
	border-top: 1px solid #C0C0C0;
	border-bottom-style: solid;
	border-bottom-width: 1px;
	text-align: center;
}
</style>

</head>

<?php
include "db/db.php";


$picdir = "/home/arabicww/carsupload/"; 


	if($f==1)
	{
		$sql = "SELECT * FROM main WHERE name='$name' AND model='$model' AND active=1 ORDER BY model";
		$_SESSION['name'] = $name;
		$_SESSION['model'] = $model;
		$ff = "&name=$name&model=$model&f=1";
	}

	if($f==2)
	{
			if($price == 2) $sr = "price <= 5000";
			if($price == 3) $sr = "price > 5000 AND price < 10000";
			if($price == 4) $sr = "price >= 10000 AND price < 20000";
			if($price == 5) $sr = "price >= 20000";

		$sql = "SELECT * FROM main WHERE $sr AND active=1 ORDER BY model";
		$ff = "&price=$price&f=2";
	}

	if($f==3)
	{
		$sql = "SELECT * FROM main WHERE name = '$n' AND active=1  ORDER BY name,model";	
		$ff = "&n=$n&f=3";
	}


	if($f==4)
	{
	    $sql = "SELECT * FROM main WHERE active = '1' ";
		$ff = "&f=4";
	}

	if($f==5)
	{
	    $sql = "SELECT * FROM main WHERE id='$id' AND active = '1' ";
		$ff = "&f=4";
	}


	$qr = mysql_query($sql);
	$cc = mysql_num_rows($qr);

$dd = ceil($cc/9); 



//if(!$cc)
//{
//	print "لا يوجد نتائج لاختيارك.....";
//}

?>

<body >

	<table cellpadding="0px"  align="center" style="width:800px;direction:rtl"  >
	          <tr>
	            <td>
	                &nbsp;
	<table  align="center" style="width:800px;direction:rtl" cellpadding="0px" cellspacing="0px"  >
		          <tr style="background-color:#CCCCCC">
	            <td style="width: 50px;text-align: center" class="style1">تسلسل&nbsp;</td>
	            <td style="width: 152px;text-align: center" class="style1">
				صورة السيارة</td>
	            <td style="width: 100px" class="style2">الماركة</td>
	            <td style="width: 100px" class="style2">الموديل</td>
	            <td style="width:100px" class="style2">سنة الصنع</td>
  	            <td style="width:100px" class="style2">اللون</td>
  	            <td style="width:100px" class="style2">السعر</td>
  	            <td style="width:100px" class="style2">رقم العداد</td>
  	            
	          </tr>

<?php
for($i=0;$i<$cc;$i++)
{    
		$id = mysql_result($qr, $i,"id");
		$name = mysql_result($qr, $i, "name");
		$username = mysql_result($qr, $i, "username");
		$model = mysql_result($qr, $i, "model");
		$year = mysql_result($qr, $i, "year");		
		$color = mysql_result($qr, $i, "color");		
		$price = mysql_result($qr, $i, "price");				
		$picture = mysql_result($qr, $i, "picture");
		$c_counter = mysql_result($qr, $i, "c_counter");		
		$note = mysql_result($qr, $i, "note");



?>
	          <tr>
	            <td style="width: 50px;text-align: center" class="style1"><?php echo $id ?></td>
	            <td style="width: 152px;text-align: center" class="style1">
				<?php 
				$dh  = opendir($picdir . $username . "/"); 
				while (false !== ($filename = readdir($dh))) 
				{ 
				   $files[] = $filename; 
				   sort($files);
				} 
				for($x = 0;$x<count($files);$x++)
				{
					if(substr($files[$x],0,strlen($id)) == $id)
					{
						$carimage = $files[$x];
						break;
					}
				}
				?>	            
				<a href="s.php?s1=show&id=<?php echo $id ?>">	            
				<img src="resizer1.php?imgfile=<?php echo $username . "/" . $carimage; ?>" border="1" hspace="2"
				  vspace="2" align="middle" style="CURSOR: hand"></a></td>
	            <td style="width: 100px" class="style2"><?php echo $name ?></td>
	            <td style="width: 100px" class="style2"><?php echo $model ?></td>
	            <td style="width:100px" class="style2"><?php echo $year ?></td>
  	            <td style="width:100px" class="style2"><?php echo $color ?></td>
  	            <td style="width:100px" class="style2"><?php echo $price ?></td>
  	            <td style="width:100px" class="style2"><?php echo $c_counter?></td>
  	            
	          </tr>
	          <?php
	          }
	          ?>
	</table>
	</td>
	          </tr>
	</table>
</body>
</html>