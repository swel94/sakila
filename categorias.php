<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

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

        if (empty($name)) {
            throw new Exception("This field can not be empty");
        }

        // guardar // actualizar 

        $id = $_POST['id'] ?? "";

        if (empty($id)){
            //Guardar
            $query = "INSERT INTO category (name) VALUES ('$name')";
        } else{
            // Actualizar
            $query = "UPDATE category SET name = '$name' WHERE category_id = $id";
        }

        

        $resultado = $conexion->query($query) or die("Error en query");

        if ($resultado) {
            $_SESSION['mensaje'] = "Datos procesados correctamente";

            $script_alerta = alerta("Insertado", "Datos procesados correctamente", "success");
        } else {
            $script_alerta = alerta("Error", "No se pudieron procesar los datos", "error");

            throw new Exception("No se pudieron procesar los datos");
        }
    }

    // Buscar info para editar

    if (isset($_GET['editar'])) {
        $id = $_GET['editar'];

        $query = "SELECT * FROM category WHERE category_id = '$id'";

        $resultado = mysqli_query($conexion, $query) or die ("Error en query");

        if ($resultado) {
            while ($fila = mysqli_fetch_object($resultado)) {
                    $category_id = $fila->category_id;
                    $category_name = $fila->name;
                    echo $category_name;
            }
        }
    }
} catch (Throwable $ex) {
    $error = $ex->getMessage();
}

# incluir la vista

require_once 'vistas/vista_categorias.php';

# No debe haber codigo despues de esta linea