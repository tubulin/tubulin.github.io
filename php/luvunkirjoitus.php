<?php
$luku = $_REQUEST['luku'];
$jaannos = 0;

$taulu = array("", "yksi", "kaksi", "kolme", "nelja", "viisi", "kuusi", "seitseman", "kahdeksan", "yhdeksan", "kymmenen", 
"toista", "kymmenta", "sata", "sataa", "tuhat", "tuhatta", "miljoona", "miljoonaa");

if (strlen($luku) % 3 > 0) {
	$luvut[] = substr($luku, 0, strlen($luku) % 3);
	$luku = substr($luku, strlen($luku) % 3);
}
while (strlen($luku) > 0) {
	$luvut[] = substr($luku, 0, 3);
	$luku = substr($luku, 3);
}

$maara = count($luvut);

for ($i=0;$i<count($luvut);$i++) {
	$luku = $luvut[$i];
	$jaannos = $luvut[$i];

if ($jaannos > 199) {
	echo $taulu[substr($jaannos, 0, 1)] . $taulu[14]; 
	$jaannos = substr($jaannos, 1);
} else if ($jaannos > 99) {
	echo $taulu[13]; 
	$jaannos = substr($jaannos, 1);
}
if (substr($jaannos, 0, 1) == 0) {
	$jaannos = substr($jaannos, 1);
}
if (substr($jaannos, 0, 1) == 0) {
	$jaannos = substr($jaannos, 1);
}
if ($jaannos > 19) {
	echo $taulu[substr($jaannos, 0, 1)] . $taulu[12]; 
	$jaannos = substr($jaannos, 1);
} 
if ($jaannos > 10) {
	echo $taulu[substr($jaannos, 1, 1)] . $taulu[11]; 
	$jaannos = substr($jaannos, 2);
} 
if ($jaannos == 10) {
	echo $taulu[10]; 
	$jaannos = substr($jaannos, 1);
} 
if ($jaannos > 1) {
	echo $taulu[substr($jaannos, 0, 1)];
}

if ($luku == 1 && $maara == 3) {
	echo $taulu[17];
	$maara--;
} else if ($luku == 1 && $maara == 2) {
	echo $taulu[15];
	$maara--;
} else if ($jaannos == 1) {
	echo $taulu[1];
}


if ($maara == 3 && $luku > 1) {
	echo $taulu[18];
	$maara--;
} else if ($maara == 2 && $luku > 1) {
	echo $taulu[16];
	$maara--;
} else if ($luku == 0) {
	$maara--;
}
}