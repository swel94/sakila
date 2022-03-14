<?php

use LDAP\Result;

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina = 'Clientes';

$error = "";


try {

    # borrar esto despues 
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // verificar si le da clicl al boton // ** INSERT **
    if (isset($_POST['save_button'])) {

        // variables

        $store_id = $_POST['store_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['first_name'];
        $email = $_POST['email'];
        $address_id = $_POST['address_id'];
        $active = $_POST['active'];
        $create_date = $_POST['create_date'];

        // validaciones

        if (empty($store_id)){
            throw new Exception("Store Id field can not be empty");
        }

        if (empty($first_name)){
            throw new Exception("First Name field can not be empty");
        }

        if (empty($last_name)){
            throw new Exception("Last name field can not be empty");
        }

        if (empty($email)){
            throw new Exception("Email field can not be empty");
        }

        if (empty($address_id)){
            throw new Exception("Address Id field can not be empty");
        }

        if (empty($active)){
            throw new Exception("Active field can not be empty");
        }

        if (empty($create_date)){
            throw new Exception("Create date field can not be empty");
        }

        // Guardar 

        $query = "INSERT INTO customer(store_id, first_name, last_name, email, address_id, active, create_date) VALUES ('$store_id','$first_name', '$last_name', '$email', '$address_id', '$active' , '$create_date')";

        $result = $conexion->query($query) or die ("Query Error");
        
        if ($result){
            $_SESSION['Message'] = "Data has been inserted correctly";

            $script_alerta = alerta("Insertado", "Datos insertados correctamente", "success");

        } else {
            $script_alerta = alerta("Error", "No se pudo insertar", "error");

            throw new Exception("No se pudo insertar los datos");
        }


        // refrezcar
    }

} 

catch(Throwable $ex) {
    $error = $ex->getMessage();
}

# incluir la vista

require_once 'vistas/vista_clientes.php';

# No debe haber codigo despues de esta linea