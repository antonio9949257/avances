<?php 
class Persona {
	public $nom;
	public $edad;

	public function __construct ($nom , $edad){
		$this->nom = $nom;
		$this->edad = $edad;
	}

	public function saludar () {
		return "Hola, me llamo {$this->nom} y tengo {$this->edad} años. \n";
	}

}

$pers1 = new Persona ("Ana", 30);
echo $pers1->saludar ();
?>
