<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina = 'Actores';

$error = '';

try {

    #borrar esto despues

    echo "<pre>";
    print_r($_POST);
    echo "</pre>"; 

    // Verificar si le da clicl al boton 

    if (isset($_POST['save_button'])){

        // variables

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];

        // validaciones

        if (empty($first_name)){
            throw new Exception("First Name field can not be empty");
        }

        if (empty($last_name)){
            throw new Exception("Last Name field can not be empty");
        }

        // guardar

        $query = "INSERT INTO actor(first_name, last_name) VALUES('$first_name', '$last_name')";

        $result = $conexion->query($query) or die ("Query Error");

        if ($result){
            $_SESSION['Message'] = "Data has been inserted correctly";

            $script_alerta = alerta("Insertado", "Datos insertados correctamente", "success");
        }

        else {

            $script_alerta = alerta("Error", "No se pudo insertar", "error");

            throw new Exception("No se pudo insertar los datos");
        }

    }
} 
    // Refrescar

catch(Throwable $ex) {
    $error = $ex->getMessage();
}

    // incluir la vista

require_once 'vistas/vista_actores.php';

  // No debe haber codigo despues de esta linea