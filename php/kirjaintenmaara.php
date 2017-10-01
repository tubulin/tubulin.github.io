<?php
$sana = $_REQUEST['sana'];
$kaikki = str_split($sana);
sort($kaikki);

$kirjain = array_keys($kaikki, $kaikki[0]);
echo $kaikki[0] . " " . count($kirjain) . "<br>";

for ($i = 1; $i < count($kaikki); $i++) {
	if ($kaikki[$i] != $kaikki[$i - 1]) {
	$kirjain = array_keys($kaikki, $kaikki[$i]);
	echo $kaikki[$i] . " " . count($kirjain) . "<br>";
}
}
?>