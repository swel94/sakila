<?php

use LDAP\Result;

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina = 'Staff';

$error = "";


try {

    # borrar esto despues 
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // verificar si le da clicl al boton 
    if (isset($_POST['save_button'])) {

        echo "guardando....";

        // variables

        $first_name = $_POST['first_name'];
        $last_name = $_POST['first_name'];
        $address_id = $_POST['address_id'];
        $email = $_POST['email'];
        $store_id = $_POST['store_id'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // validaciones

        if (empty($first_name)){
            throw new Exception("First Name field can not be empty");
        }

        if (empty($last_name)){
            throw new Exception("Last Name field can not be empty");
        }

        if (empty($address_id)){
            throw new Exception("Address field can not be empty");
        }

        if (empty($email)){
            throw new Exception("Email field can not be empty");
        }

        if (empty($store_id)){
            throw new Exception("Store field can not be empty");
        }

        if (empty($username)){
            throw new Exception("Username field can not be empty");
        }

        if (empty($password)){
            throw new Exception("Password field can not be empty");
        }

        // guardar 

        $query = "INSERT INTO staff(first_name, last_name, address_id, email, store_id,username, password) VALUES ('$first_name', '$last_name', '$address_id', '$email', '$store_id', '$username' , '$password')";

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

} catch(Throwable $ex) {
    $error = $ex->getMessage();
}

# incluir la vista

require_once 'vistas/vista_staff.php';

# No debe haber codigo despues de esta linea