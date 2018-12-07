<?php 
//print_r($_POST);
if (isset($_POST['Name'])){
$nameFilter = htmlspecialchars(mb_strtolower(trim($_POST['Name'])),ENT_QUOTES, "UTF-8");
echo "Мое имя " . $nameFilter;
echo $_POST['text'];

$str = "<br>" . wordwrap($_POST['text'], 10, "<br>", true);
echo $str;
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