<html>
<head><title>Kivikuvio</title>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>		
<?php
$n = $_REQUEST['n'];
$lista = array();
$rivi = "";
$kirjaimet = "ABCDEFGHIJKLMNO";

for ($i = 1; $i <= $n; $i++) {
	for ($j = 0; $j < $n; $j++) {
		if ($j > $i - 1) {
			$rivi = $rivi . substr($kirjaimet, $n - $i, 1);
		} else {
			$rivi = $rivi . substr($kirjaimet, $n - $j - 1, 1);
		}
		}
	$lista[] = $rivi . substr(strrev($rivi), 1);
	$rivi = "";
	}	

for ($k = 0; $k < count($lista); $k++) {
	echo $lista[$k] . "<br>";
}
for ($l = count($lista) - 2; $l >= 0; $l--) {
	echo $lista[$l] . "<br>";
}
?>
</body>
</html>