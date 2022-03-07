<?php

$pagina = 'Categorias';

$error = "";


try {

    # borrar esto despues 
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // verificar si le da clicl al boton 
    if (isset($_POST['boton-guardar'])) {


        // variables

        $name = $_POST['name'];
        
        // validaciones

        if (empty($name)){
            throw new Exception("This field can not be empty");
        }

        // guardar 

        $query = "INSERT INTO category (name) VALUES ('$name')";

        $resultado = $conexion->query($query) or die ()


        // refrezcar
    }

} catch(Throwable $ex) {
    $error = $ex->getMessage();
}

# incluir la vista

require_once 'vistas/vista_categorias.php';

# No debe haber codigo despues de esta linea