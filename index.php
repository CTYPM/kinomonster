<?php

// Функции

function insert($name, $desc, $year, $rating, $poster, $category_id) {
	$mysqli = new mysqli('localhost', 'root', '', 'kinomonster');

	if (mysqli_connect_errno()) {
		print_f('Connection Error');
		exit();
	}

	$mysqli ->set_charset('utf8');

	$query = "INSERT INTO movie VALUES(null, '$name', '$desc', '$year', '$rating', '$poster', Now(), '$category_id')";

	$mysqli->query($query);

	$mysqli->close();
}

function xmlProc($xml, $type){

$title = null;
$tittle_origin = null;
$year = null;
$rating = null;
$post = null;

foreach ($xml as $movie_key => $movie) {
	$title = $movie->title_russian;
	$title_origin = $movie ->title_original;
	$year = $movie->year;


	foreach ($movie->poster->big->attributes() as $poster_key => $poster) {
		$post = $poster;
	}

	if ($movie->imdb){
		$rating = $movie->imdb->attributes()['rating'];
	} else {
		$rating = null;
	}

	insert($title, $title_origin, $year, $rating, $post, $type);
}
}

function delSQL() {
	$mysqli = new mysqli('localhost', 'root', '', 'kinomonster');
	
	if (mysqli_connect_errno()) {
		print_f('Connection Error');
		exit();
	}		
	$mysqli ->query("truncate movie");
	$mysqli->close();
}

function drawTable() {
	$mysqli = new mysqli('localhost', 'root', '', 'kinomonster');

	if (mysqli_connect_errno()) {
		print_f('Connection Error');
		exit();
	}

	$mysqli ->set_charset('utf8');

	$query = $mysqli->query("SELECT * FROM movie INNER JOIN categories ON movie.category_id = categories.id");

	echo '<style type="text/css">table {border-collapse: collapse;}</style>';

	echo '<table border="1" cellpadding="7">';
	echo "<tr><b>";
	echo "<th>№</th><th>Наименование</th><th>Описание</th><th>Год</th><th>Рейтинг</th><th>Тип</th>";
	echo "</b></tr>";

	while ($row = mysqli_fetch_assoc($query)){
		echo '<tr align="center">';
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['description']."</td>";
		echo "<td>".$row['year']."</td>";
		echo "<td>".$row['raiting']."</td>";
		echo "<td>".$row['cat_name']."</td>";
		echo "</tr>";
	}

	echo "</table>";
	$mysqli -> close();
}

// Начало программы

delSQL();

$xmlFile = simplexml_load_file("xml_files\movies.xml") or die("Error: Cannot creat object");
xmlProc($xmlFile, 1);

$xmlFile = simplexml_load_file("xml_files\serials.xml") or die("Error: Cannot creat object");
xmlProc($xmlFile, 2);

drawTable();





// echo "<pre>";
// print_r($xmlFile);
// echo "</pre>";

?>