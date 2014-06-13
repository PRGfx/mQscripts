<?php
$params = array_values(array_keys($_GET));
if (count($params) > 0) {
	$lib = $params[0];
	if (array_key_exists(1, $params) && $params[1]=="min" && file_exists('min/' . $lib . '.min.txt')) {
		echo '<script><!--/* ' . $lib.' */' . "\n";
		echo file_get_contents($lib . '.txt');
		echo '--></script>';
	}
	if (file_exists($lib . '.txt')) {
		echo '<script><!--/* ' . $lib.' */' . "\n";
		echo file_get_contents($lib . '.txt');
		echo '--></script>';
	} else {
		echo '<script><!-- /* ' . $lib.'.txt not found! */ --></script>';
	}
}
?>