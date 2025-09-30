<?php
class Persona {
    public $id;
    public $name;
    public $age;
    public function misDatos($id, $name, $age) {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;

    }

    public function getMisDatos() {
        return "ID: " . $this->id . ", Name: " . $this->name . ", Age: " . $this->age;
    }
    public function presentar() {
        return "Hola, mi nombre es " . $this->name . " y tengo " . $this->age . " años.";
    }


}

$persona1 = new Persona();
$persona1->misDatos(1, "Juan", 30);
echo $persona1->getMisDatos() . "\n";
echo $persona1->presentar() . "\n";
$persona2 = new Persona();
$persona2->misDatos(2, "María", 25);
echo $persona2->getMisDatos() . "\n";
echo $persona2->presentar() . "\n";

?>