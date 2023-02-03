<?php
session_start();
import_request_variables("gPc");

$path = "/home/arabicww/carsupload/sug@astorm.net/";

header('Content-type: image/jpeg');
list($width, $height) = getimagesize($path.$imgfile);


if ($width > $height)
{
$nw = 400;
$nh = 300;
}
else
{
$nw = 400 ;
$nh = 300 ;
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
