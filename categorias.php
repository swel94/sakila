<?php

use JetBrains\PhpStorm\ExpectedValues;

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

        // Guardar // Actualizar 

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

    // Delete

    if (isset($_GET['delete'])){
        $category_id = $_GET['delete'];

        $query = "DELETE FROM category WHERE category_id = '$category_id'";
        $resultado = $conexion->query($query) or die ("Error en query");

        if ($resultado){
            $script_alerta = alerta("Delete", "Data has been deleted", "Success");
        }

        else {
            $script_alerta = alerta("Error" , "Data could not be deleted", "Error");
            throw new Exception("Data could not be deleted");
        }
    }


} catch (Throwable $ex) {
    $error = $ex->getMessage();
}

# incluir la vista

require_once 'vistas/vista_categorias.php';

# No debe haber codigo despues de esta linea