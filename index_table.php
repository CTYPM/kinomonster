<?php 

$mysqli = new mysqli('localhost', 'root', '', 'kinomonster');

if (mysqli_connect_errno()){
	printf('Соединение не установлено, ошибка: ' . mysqli_connect_error());
	exit();
}

$mysqli -> set_charset('utf8');


// if (isset($_POST['name'])){

// $query = "INSERT INTO movie VALUES(null, '" . $_POST['name'] . "', '" . $_POST['description'] . "', '" . $_POST['year'] . "', Now())";

// $mysqli ->query($query);
// }

// $mysqli ->query("UPDATE movie SET year = '2006' WHERE id = '4'");



$query = $mysqli -> query("SELECT * FROM `movie` LEFT JOIN categories ON movie.category_id = categories.id");

while($row = mysqli_fetch_assoc($query)) {
	echo $row['name'] . " " . $row['year'] . " " . $row['cat_name'] . "<br>";
}





$mysqli -> close();



?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/" method="post">
		<input type="text" name="name" placeholder="Название фильма">
		<br>
		<textarea style = "width: 167px" name="description" placeholder="Описание фильма"></textarea>
		<br>
		<input type="number" name="year" placeholder="Год выпуска">
		<br>
		<input type="submit" value="Отправить">
	</form>



</body>
</html> -->