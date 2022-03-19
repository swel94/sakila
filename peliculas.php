<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina = 'Peliculas';

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

        $title = $_POST['title'];
        $description = $_POST['description'];
        $release_year = $_POST['release_year'];
        $language = $_POST['language'];
        $original_language = $_POST['original_language'];
        $rental_duration = $_POST['rental_duration'];
        $rental_rate = $_POST['rental_rate'];
        $lenght = $_POST['lenght'];
        $replacement_cost = $_POST['replacement_cost'];
        $rating = $_POST['rating'];
        $special_features = $_POST['special_features'];

        // validaciones

        if (empty($title)){
            throw new Exception("Title field can not be empty");
        }

        if (empty($description)){
            throw new Exception("Description field can not be empty");
        }

        if (empty($release_year)){
            throw new Exception("Release Year field can not be empty");
        }

        if (empty($language)){
            throw new Exception("Language field can not be empty");
        }

        if (empty($original_language)){
            throw new Exception("Original Language field can not be empty");
        }

        if (empty($rental_duration)){
            throw new Exception("Rental Durantion field can not be empty");
        }

        if (empty($rental_rate)){
            throw new Exception("Rental Rate field can not be empty");
        }

        if (empty($lenght)){
            throw new Exception("Lenght field can not be empty");
        }

        if (empty($replacement_cost)){
            throw new Exception("Replacement Cost field can not be empty");
        }

        if (empty($rating)){
            throw new Exception("Rating field can not be empty");
        }

        if (empty($special_features)){
            throw new Exception("Special features field can not be empty");
        }

        // guardar 

        $query = "INSERT INTO film (title, description, release_year, language_id, original_language_id, rental_duration, rental_rate, length, replacement_cost, rating, special_features) VALUES ('$title', '$description', '$release_year', '$language', '$original_language', '$rental_duration', '$rental_rate', '$lenght', '$replacement_cost', '$rating', '$special_features')";

        $resultado = $conexion->query($query) or die("Error en query");

        if ($resultado){
            $_SESSION['mensaje'] = "Data has been processed correctly";
        } 
        
        else {
            throw new Exception("Data could not been inserted");
        }


        // refrezcar

        refrezcar('peliculas.php');
    }

} catch(Throwable $ex) {
    $error = $ex->getMessage();
}

# incluir la vista

require_once 'vistas/vista_peliculas.php';

# No debe haber codigo despues de esta linea