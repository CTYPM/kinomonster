<?php

$file = fopen("http://ya123ya.ru/","r");


if ($file) {
	echo 'Доступен';
} else {
	echo 'Недоступен';
}


?>