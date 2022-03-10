<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina = 'Paises';

$error = "";

try {

    # borrar esto despues 
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // verificar si le da clicl al boton 
    if (isset($_POST['boton-guardar'])) {

        // variables

        $country = $_POST['country'];

        // validaciones

        if (empty($country)){
            throw new Exception("This fiel can not be empty");
        }

        // guardar 

        $query = "INSERT INTO country (country) VALUES ('$country')";

        $resultado = $conexion->query($query) or die ("Error en query");

        if ($resultado) {
            $_SESSION['mensaje'] = "Datos insertados correctamente";

            $script_alerta = alerta("Insertado", "Datos insertados correctamente","success");

        } else {
            $script_alerta = alerta("Error" , "No se pudo insertar" , "error");

            throw new Exception("No se pudo insertar los datos");

        }

    }   

        // refrezcar

} catch(Throwable $ex) {
    $error = $ex->getMessage();
}

# incluir la vista

require_once 'vistas/vista_paises.php';

# No debe haber codigo despues de esta linea