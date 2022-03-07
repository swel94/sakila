<?php

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

        // refrezcar
    }

} catch(Throwable $ex) {
    $error = $ex->getMessage();
}

# incluir la vista

require_once 'vistas/vista_paises.php';

# No debe haber codigo despues de esta linea