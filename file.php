<?php
header('Content-Type: text/html; charset=utf-8');
// $file = fopen('test.txt', 'a');
// $str = "\r\nЕще одна строчка...";

// fwrite($file, $str);

// readfile('test.txt');

// fclose($file);

// if ($str) {
// 	while(($line=fgets($str)) !== false){
// 		echo $line;
// 	}
// }

$file = file_get_contents('https://yandex.ru');
echo $file;

?>