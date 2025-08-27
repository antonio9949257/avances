def saludar(nom):
  return "Hola, " + nom + "!"
saludo_pers = saludar("Carlos")
print(saludo_pers)
edad = 20
if edad >= 18:
  print("Eres mayor de edad.")
else:
  print("Eres menor de edad.")
for i in range(5):
  print("Número:", i)