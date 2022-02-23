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

<h4>Ejercicio #3 Calcular la distancia recorrida (Buscar formula de la distancia)</h4>
<br>
<form action="" method="GET">
    <div class="mb-3">
        <label for="">Digite la velocidad</label>
        <input type="text" name="velocidad" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Digite el tiempo / Si son minutos utilice 0. cantidad de minutos Ej(0.25/ minutos)</label>
        <input type="text" name="tiempo" class="form-control">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Distancia</button>
    </div>

</form>
</body>


<?php

$velocidad = $_GET["velocidad"] ; 
$tiempo = $_GET["tiempo"] ;

$distancia = $velocidad * $tiempo;

echo "La distancia recorrida es: " . round($distancia);

?>