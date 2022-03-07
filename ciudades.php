<?php

$pagina = 'Ciudades';

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

require_once 'vistas/vista_ciudades.php';

# No debe haber codigo despues de esta linea