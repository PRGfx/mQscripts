<?php
$params = array_values(array_keys($_GET));
if (count($params) > 0) {
	$path = (array_key_exists(1, $params) && $params[1]=="min")?"min/":"";
	$lib = $params[0];
	if (file_exists($path . $lib . '.txt')) {
		echo '<script><!--/* ' . $lib.' */' . "\n";
		echo file_get_contents($lib . '.txt');
		echo '--></script>';
	} else {
		echo '<script><!-- /* ' . $lib.'.txt not found! */ --></script>';
	}
}
?>