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

<h4>Ejercicio #9 Digitar un número y decir si es par impar</h4>
<br>
<form action="" method="GET">
    <div class="mb-3">
        <label for="">Digite un numero</label>
        <input type="text" name="numero" class="form-control">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Resultado</button>
    </div>

</form>
</body>

<?php

$numero = intval($_GET["numero"]);

if ($numero %2 == 0){
    
    echo "El numero es par";
    
}
    
else{
    echo "El numero es impar";

}

?>
