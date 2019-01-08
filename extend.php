<?php
// $value = "Hello, World!";
// echo $value;

class Human {
	private $name;

	public function __construct($name) {
		$this->name = $name;
	}

	public function say(){
		echo "Меня зовут ". $this->name . " и ";
	}
}

class Man extends Human {
	public function beard(){
		echo "у меня растет борода";
	}
}

class Woman extends Human {
	public function noBeard(){
		echo "у меня нет бороды";
	}
}

$man = new Man("Сергей");
$man->say();
$man->beard();

echo "<br>";

$woman = new Woman("Мария");
$woman->say();
$woman->noBeard();

?>