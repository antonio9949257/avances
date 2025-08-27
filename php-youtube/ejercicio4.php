<?php
header('Content-Type: text/plain');

class Usuario {
    public $nom;
    public $email;

    // --- Constructor ---
    // Es un método especial que se ejecuta automáticamente cuando se crea un objeto.
    // Es ideal para inicializar las propiedades del objeto.
    public function __construct($nom, $email) {
        echo "--- Creando nueva instancia de Usuario ---
";
        $this->nom = $nom;
        $this->email = $email;
        echo "Usuario '$this->nom' creado.
";
    }

    public function presentarse() {
        echo "Hola, soy $this->nom y mi email es $this->email.
";
    }

    // --- Destructor ---
    // Es un método especial que se ejecuta automáticamente cuando un objeto va a ser destruido
    // (por ejemplo, al final del script o cuando se elimina la referencia a él).
    // Es útil para liberar recursos, como cerrar una conexión a base de datos.
    public function __destruct() {
        echo "--- Destruyendo instancia de Usuario ---
";
        echo "Usuario '$this->nom' destruido. Adiós.

";
    }
}

$user1 = new Usuario("Juan", "juan@example.com");
$user1->presentarse();

$user2 = new Usuario("Maria", "maria@example.com");
$user2->presentarse();

// El destructor se llamará automáticamente para cada objeto al final del script.

?>