<?php
header('Content-Type: text/plain');
echo "EJERCICIO 10: PROGRAMACIÓN ORIENTADA A OBJETOS (POO)\n\n";
echo "--- Clases y Objetos ---\n";
class Vehiculo {
    public $marca;
    public $modelo;
    public function __construct($marca, $modelo) {
        echo "Se ha creado un nuevo vehículo.\n";
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    public function mostInfo() {
        return "Vehículo: " . $this->marca . " " . $this->modelo;
    }
}
$miCoche = new Vehiculo("Toyota", "Corolla");
echo $miCoche->mostInfo() . "\n\n";
echo "--- Herencia y Visibilidad ---\n";
class Coche extends Vehiculo {
    private $numPuertas;
    protected $tipoMotor;
    public function __construct($marca, $modelo, $puertas, $motor) {
        parent::__construct($marca, $modelo);
        $this->numPuertas = $puertas;
        $this->tipoMotor = $motor;
    }
    public function mostInfo() {
        return "Coche: " . $this->marca . " " . $this->modelo . " con " . $this->numPuertas . " puertas y motor " . $this->tipoMotor;
    }
    
    public function getNumPuertas(){
        return $this->numPuertas;
    }
}
$miSegCoche = new Coche("Honda", "Civic", 4, "Gasolina");
echo $miSegCoche->mostInfo() . "\n";
echo "El coche tiene " . $miSegCoche->getNumPuertas() . " puertas.\n\n";
echo "--- Métodos Estáticos ---\n";
class Calculadora {
    public static function sumar($a, $b) {
        return $a + $b;
    }
}
$resSuma = Calculadora::sumar(10, 5);
echo "Resultado de la suma estática: " . $resSuma . "\n";
?>
