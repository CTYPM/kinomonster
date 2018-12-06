<?php 

$arr = array("Рэмбо: Первая кровь", "Звездный путь", "Серенити", "Придорожная закусочная", "Книга Илая");

array_push($arr, "Ответный удар");

$arr2 = array("Исходный код", "Патруль времени");


$newArr = array_merge($arr, $arr2);

foreach ($newArr as $key => $value) {
	echo $value . "<br>";
}

// $str = implode(", ", $newArr);
// echo "<br>" . $str;

$str = "Яблоко, Груша, Тыква, Арбуз";
$strToArr = explode(", ", $str);
echo "<pre>";
print_r($strToArr);
echo "</pre><br><br>";


// $camera["market1"]["row1"][0] = "Яблоко";
// $camera["market1"]["row1"][1] = "Груша";
// $camera["market1"]["row2"][0] = "Тыква";
// $camera["market1"]["row2"][1] = "Ананас";
// $camera["market2"]["row1"][0] = "Слива";
// $camera["market2"]["row2"][0] = "Кокос";
// $camera["market1"]["row2"][1] = "Арбуз";

$camera = array(
	"market1" => array(
		"row1" => array("Яблоко", "Груша"),
		"row2" => array("Тыква", "Ананас")
	),
	"market2" => array(
		"row1" => array("Слива", "Колбаса"),
		"row2" => array("Сосиски", "Сыр")
	)	
);


echo "<pre>";
foreach ($camera as $key => $value) {
	foreach ($value as $key1 => $value1) {
		foreach ($value1 as $key2 => $value2) {
			echo $key . ">" . $key1 . ">" . $key2 . " = " . $value2 . "<br>";
		}
	}
}
echo "</pre><br><br>";


?>