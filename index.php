<?php 

$arr = array("Рэмбо: Первая кровь", "Звездный путь", "Серенити", "Придорожная закусочная", "Книга Илая");

array_push($arr, "Ответный удар");

array_unshift($arr, "Исходный код", "Патруль времени");

$arr = array_pad($arr, 20, "***");

foreach ($arr as $key => $value) {
	echo $value . "<br>";
}


?>