<?php
$numRand = rand(1,10);
echo "$numRand 
";
$nombre = "Oscar Uh";
$nomMayus = strtoupper($nombre);
echo "$nomMayus 
";
$frutas = array("nieve","pera","Hola");
echo "$frutas[1] 
";
$arreglos = array("f"=>"fresa", "m"=>"manzana", "p"=>"pera");
echo "$arreglos[f] 
";
print_r($arreglos);
print_r($frutas);
foreach($arreglos as $ind=>&$val){
	echo "$val 
";	
}
foreach($arreglos as $ind=>&$val){
        echo "$arreglos[$ind] 
";
}
array_push($arreglos, "añadido ahora");
foreach($arreglos as $ind=>&$val){
        echo "$arreglos[$ind] 
";
}

?>