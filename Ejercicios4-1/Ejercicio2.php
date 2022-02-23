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

<h4>Ejercicio #2 Digitar 4 notas y calcular e imprimir el promedio.</h4>
<br>
<form action="" method="GET">
    <div class="mb-3">
        <label for="">Valor1</label>
        <input type="text" name="Valor1" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Valor2</label>
        <input type="text" name="Valor2" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Valor3</label>
        <input type="text" name="Valor3" class="form-control">
    </div>
    <did class="mb-3">
        <label for="">Valor4</label>
        <input type="text" name="Valor4" class="form-control">
    </did>
    <div class="mb-3">
        <button class="btn btn-primary">Promedio</button>
    </div>

</form>
</body>


<?php

$Valor1 = $_GET["Valor1"];
$Valor2 = $_GET["Valor2"];
$Valor3 = $_GET["Valor3"];
$Valor4 = $_GET["Valor4"];

$resultado = $Valor1 + $Valor2 + $Valor3 + $Valor4;

echo "Tu promedio es: " . round($resultado / 4);

?>
