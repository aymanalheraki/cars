<?php
session_start();
import_request_variables("gPc");
echo "<br><br>" . $imgfile;$path = "/home/arabicww/carsupload/";

header('Content-type: image/jpeg');
list($width, $height) = getimagesize($path.$imgfile);
echo $path.$imgfile;

if ($width > $height)
{
$nw = 120;
$nh = 80;
}
else
{
$nh = 120;
$nw = 80;
}

$newwidth = $nw;
$newheight = $nh;

$thumb = ImageCreateTrueColor($newwidth,$newheight);
$source = imagecreatefromjpeg($path.$imgfile);

//imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
imagecopyresampled($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);


imagejpeg($thumb);

imagedestroy ($thumb); 


?>