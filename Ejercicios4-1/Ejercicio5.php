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

<h4>Ejercicio #5  Imprimir los números del 1 al 100</h4>
<br>
<form action="" method="GET">
    <div class="mb-3">
        <button class="btn btn-primary">Obtener rango</button>
    </div>
</form>
</body>


<?php

for ($inicio = 1; $inicio <= 100; $inicio = $inicio +1) {
    echo $inicio . "<br>";

}

?>