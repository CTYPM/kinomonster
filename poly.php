<?php

interface Say {
	public function say();
}


abstract class Human implements Say {
	
	private $name;

	public function __construct($name){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}
}

class Russian extends Human {
	public function __construct($name) {
		parent::__construct($name);
	}

	public function rusLang(){
		echo " Я говорю по русски";
	}

	public function say(){
		echo "Меня зовут ".$this->getName(). ". ". "Я из России.";
	}
}

class English extends Human {
	public function __construct($name) {
		parent::__construct($name);
	}

	public function EngLang(){
		echo " Я говорю по английски";
	}

	public function say(){
		echo "Меня зовут ".$this->getName(). ". ". "Я из Англии.";
	}
}

$russian = new Russian("Саша");
$russian->say();
$russian->rusLang();

echo "<br>";

$english = new English("Карл");
$english->say();
$english->EngLang();

?>