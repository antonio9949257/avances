<?php
class  persona{
	public $nom; 
	public function asigNom($nuevoNom){
		$this->nom= $nuevoNom;
	}
	public function impNom(){
		echo "Hola soy $this->nom \n";
	}
}

$objAlum = new persona();
$objAlum->asigNom("Armin");
$objAlum->impNom();


class trabajador extends persona{
	public $puesto;
	public function presentarse(){
		echo "Hola soy $this->nom y soy un $this->puesto \n";
	}
}

$objTrab = new trabajador();
$objTrab->asigNom("Daneil");
$objTrab->puesto = "profesor";
$objTrab -> presentarse();
?>