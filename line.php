<?php
######################################################################## 
# Copyright © 2001 Wanja Hemmerich                                     # 
# © October 2001                                                       # 
######################################################################## 
# COPYRIGHT NOTICE                                                     # 
# Copyright 2001 Wanja Hemmerich.  All rights reserved.                # 
#                                                                      # 
# This program may be used and modified, as long as this copyright     # 
# notice stays intact.                                                 # 
#                                                                      # 
# Wanja Hemmerich is not responsible for damage, which is possibly     # 
# caused by his program.                                               # 
#                                                                      # 
# This program code may not be sold, nor auctioneered, nor be used in  # 
# any other commercial way in order to make money.                     # 
#                                                                      # 
# This Programm may not be distributed to download neither by          # 
# Internet, nor by another medium.                                     # 
######################################################################## 
#     By using this programm, you agree with these conditions.         # 
#                                                                      # 
######################################################################## 
#     The text above must be kept intact under all circumstances.      # 
######################################################################## 

include ("config.php3");

if (!$datei) $datei = dirname(__FILE__)."/$filename";
$time = @time();
$ip = $REMOTE_ADDR;
$location = urlencode($PHP_SELF);
$string = "$ip|$time|$location\n";
$a = fopen("$filename", "a+");
fputs($a, $string);
fclose($a);

$timeout = time()-(60*$timer);

function search_array($string, $array) {
	for ($array_count = 0; $array_count < count($array); $array_count++) {
		if(eregi($string, $array[$array_count])) {
			return true;
		} else {
			return false;
		}
	}
}


$all = "";
$datei = file($filename);
rsort ($datei);
reset ($datei);
array_reverse($datei);

for ($num = 0; $num < count($datei); $num++) {
	$pieces = explode("|",$datei[$num]);
		if ($pieces[1] > $timeout) {
			$all .= $pieces[0];
			$all .= "|";
			$all .= $pieces[2];
			$all .= ",";
		}
}

$all = substr($all,0,strlen($all)-1);
$arraypieces = explode(",",$all);

$onlineip = array();
$onlinelocation = array();
$useronline = 0;
for ($values = 0; $values < count($arraypieces); $values++) {
	$userip = explode("|", $arraypieces[$values]);
	if($values == 0) {
		$onlineip[] = $userip[0];
		$onlinelocation[] = $userip[1];
		$useronline++;
	} else {
		if (!in_array("$userip[0]", $onlineip)) {
			$useronline++;
			$onlineip[] = $userip[0];
			$onlinelocation[] = $userip[1];
		}
	}
}


$group = array_count_values($onlinelocation);
arsort($group);
reset ($group);

// echo
echo "<!-- USER ONLINE START -->\n<table border=\"0\" dir=rtl cellspacing=\"0\">\n<tr>\n<td><p align=\"center\"><font face=\"Verdana\" size=\"4\"><b>".count($onlinelocation)."</b></font</p></td>\n</tr>\n";
while (list($key, $value) = each ($group)) {
}
echo "</table>\n<!-- USER ONLINE END -->\n";


// Delete
$dell = "";
for ($numm = 0; $numm < count($datei); $numm++) {
	$tiles = explode("|",$datei[$numm]);
		if ($tiles[1] > $timeout) {
			$dell .= "$tiles[0]|$tiles[1]|$tiles[2]";
		}
}

if (!$datei) $datei = dirname(__FILE__)."/$filename";
$string = "$dell";
$a = fopen("$filename", "w+");
fputs($a, $string);
fclose($a);
?>