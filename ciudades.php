<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina = 'Ciudades';

$error = "";


try {

    # borrar esto despues 
    
    /* echo "<pre>";
    print_r($_POST);
    echo "</pre>";*/

    // verificar si le da clicl al boton 

    if (isset($_POST['save'])) {



        // variables
        $city = $_POST["city"];
        $country_id = $_POST["country_id"];

        // validaciones

        if (empty($city)) {
            throw new Exception("Field city can not be empty");
        }

        if (empty($country_id)) {
            throw new Exception("You have to choose a country");
        }

        // guardar 

        $query = "INSERT INTO city (city, country_id) VALUES ('$city', $country_id)";

        $resultado = $conexion->query($query) or die("Error en query");

        if ($resultado) {
            $_SESSION['mensaje'] = "Datos insertados correctamente";

            $script_alerta = alerta("Insertado", "Datos insertados correctamente", "success");
        } else {
            $script_alerta = alerta("Error", "No se pudo insertar", "error");

            throw new Exception("No se pudo insertar los datos");
        }
    }
} catch (Throwable $ex) {
    $error = $ex->getMessage();
}

# incluir la vista

require_once 'vistas/vista_ciudades.php';

# No debe haber codigo despues de esta linea