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

<h4>Ejercicio #8 Digitar un número y mostrar qué mes del año es. Validar que no se pueda digitar un número que no sea mayor que 12 o menor que 1.</h4>
<br>
<form action="" method="GET">
    <div class="mb-3">
        <label for="">Digite un numero</label>
        <input type="text" name="numero" class="form-control">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Mes del año</button>
    </div>

</form>
</body>

<?php

$digite_numero = intval($_GET["numero"]);


    if ($digite_numero == 1){
        echo "Enero!";
    }

    elseif ($digite_numero == 2){
        echo "Febrero!";
    }

    elseif ($digite_numero == 3){
        echo "Marzo!";
    }

    elseif ($digite_numero == 4){
        echo "Abril!";
    }

    elseif ($digite_numero == 5){
        echo "Mayo!";
    }

    elseif ($digite_numero == 6){
        echo "Junio!";
    }

    elseif ($digite_numero == 7){
        echo "Julio!";
    }

    elseif ($digite_numero == 8){
        echo "Agosto!";
    }

    elseif ($digite_numero == 9){
        echo "Septiembre";
    }

    elseif ($digite_numero == 10){
        echo "Octubre!";
    }

    elseif ($digite_numero == 11){
        echo "Noviembre!";
    }

    elseif ($digite_numero == 12){
        echo "Diciembre!";
    }

    else{
        echo("Ingreso un valor no valido");
    }

?>
