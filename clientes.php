<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina = 'Clientes';

$error = "";


try {

    # borrar esto despues 
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // verificar si le da clicl al boton 
    if (isset($_POST['boton-guardar'])) {

        echo "guardando....";

        // variables

        // validaciones

        // guardar 

        // refrezcar
    }

} catch(Throwable $ex) {
    $error = $ex->getMessage();
}

# incluir la vista

require_once 'vistas/vista_clientes.php';

# No debe haber codigo despues de esta linea