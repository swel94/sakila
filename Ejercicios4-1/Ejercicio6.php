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

<h4>Ejercicio #6 Digitar el año de nacimiento e imprimir la edad actual</h4>
<br>
<form action="" method="GET">
    <div class="mb-3">
        <label for="">Digite su ano de nacimiento</label>
        <input type="text" name="edad" class="form-control">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Edad</button>
    </div>

</form>
</body>

<?php

$edad = $_GET["edad"];
$date = date("Y");

echo "Tu edad actual es: " . ($date - $edad);

?>

