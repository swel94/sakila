<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container w-25">
        <h4>Idiomas</h4>
        <br>
        <form action="" method= "GET">
            <div class="mb-3">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="mb-3">
                <button class="btb btn-primary">Guardar</button>
            </div>
        </form>    
    </div>
    
    
</body>
</html>

<?php

print_r($_GET);

$conexion = mysqli_connect("localhost","root","","sakila");

// Verifcar conexion 

if ($conexion === false){
    die("ERROR: No se pudo conectar. " . mysqli_connect_error());
}

$nombre = $_GET["nombre"];


$sql = "INSERT INTO language(name) VALUES ('$nombre')";

if (mysqli_query($conexion, $sql)){
        echo "Records se agregaron satisfactoriamente";
}
else {
    echo "Error : No se pudo ejecutar la conexion $sql. " . mysqli_error($conexion);    
}

// Cerrar conexion 

// mysqli_close($conexion);

// Query #2 SELECT datos from tabla

$sql_2 = "SELECT language_id, name FROM language";

$resulatdo = $conexion->query($sql_2);

if ($resulatdo->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";

    while ($row = $resulatdo->fetch_assoc()){
        echo "<tr><td>". $row["language_id"] . "</td><td>" . $row["name"];
        echo "</table>";
    }
    echo "</table>";

}

else {
    echo "0 results";
}

?> 


