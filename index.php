<?php 
print_r($_POST);
// if (isset($_POST['Name'])){
// echo "Мое имя " . $_POST['Name'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/" method="post">
		<input type="text" name="Name" placeholder="Ваше имя...">
		<br>
		<textarea name="text" id=""></textarea>
		<input type="hidden" name="ID_User" value="1111">
		<input type="submit" value = "Отправить">
		<br>
	</form>
</body>
</html>