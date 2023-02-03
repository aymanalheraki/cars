<?php
import_request_variables("gPc");

header('Content-type: image/jpeg');
list($width, $height) = getimagesize($imgfile);


if ($width > $height)
{
$nw = $width / ($width / 130);
$nh = $height / ($width / 130);
}
else
{
$nh = $height / ($height / 130);
$nw = $width / ($height / 130);
}

$newwidth = $nw;
$newheight = $nh;

$thumb = ImageCreateTrueColor($newwidth,$newheight);
$source = imagecreatefromjpeg($imgfile);

//imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
imagecopyresampled($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);


imagejpeg($thumb);

imagedestroy ($thumb); 

?>