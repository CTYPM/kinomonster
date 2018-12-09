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

function checkSumm($sum) {
	$result = "";
	if ($sum > 30) {
		$result = "Сумма больше 30";
	} else {
		$result = "Сумма меньше 30";
	}
	return $result;
	}

echo checkSumm(summary(30, 5));


?>