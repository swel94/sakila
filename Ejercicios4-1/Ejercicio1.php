<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ejercicios</title>
</head>

<body>
    <div class="container w-50">

        <h4>Ejercicio #1 Digitar la base y la altura de un triángulo y calcular e imprimir la hipotenusa. </h4>
        <br>
        <form action="" method="GET">
            <div class="mb-3">
                <label for="">Base</label>
                <input type="text" name="Base" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Altura</label>
                <input type="text" name="Altura" class="form-control">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Resultado</button>
            </div>

</body>

</html>

<?php

$base = $_GET["Base"];
$altura = $_GET["Altura"];

$base_al_cuadrado = pow($base, 2); // Representa la potencia de 2
$altura_al_cuadrado = pow($altura, 2); // Representa la potencia de 2 

$resultado = $base_al_cuadrado + $altura_al_cuadrado;

echo "La hipotenusa del triangulo es:" . round(sqrt($resultado)); //sqrt Devolvera la raiz cuadrada de resultado.
?>