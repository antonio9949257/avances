function saludar(nom) {
  return "Hola, " + nom + "!";
}
var saludoPers = saludar("Maria");
console.log(saludoPers);
var edad = 18;
if (edad >= 18) {
  console.log("Eres mayor de edad.");
} else {
  console.log("Eres menor de edad.");
}
for (var i = 0; i < 5; i++) {
  console.log("Número:", i);
}