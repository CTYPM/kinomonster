<?php 
function summary($a, $b){
	$result = "";
	if(!is_numeric($a) || !is_numeric($b)) {
		$result = "Заданы неверные данные";
	} else {
		$result = $a + $b;
	}
	return $result;

	}
echo summary(3, 5);


?>