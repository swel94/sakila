<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina = 'Tiendas';

$error = "";


try {

    # borrar esto despues 
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // verificar si le da clicl al boton 
    if (isset($_POST['save'])) {

            // variables
            $manager_staff_id = $_POST["manager_staff_id"];
            $address_id = $_POST["address_id"];
    
            // validaciones
    
            if (empty($manager_staff_id)) {
                throw new Exception("Field can not be empty");
            }
    
            if (empty($address_id)) {
                throw new Exception("Field can not be empty");
            }
    
            // guardar 
    
            $query = "INSERT INTO store (manager_staff_id, address_id) VALUES ('$manager_staff_id', $address_id)";
    
            $resultado = $conexion->query($query) or die("Error en query");
    
            if ($resultado) {
                $_SESSION['mensaje'] = "Datos insertados correctamente";
    
                $script_alerta = alerta("Insertado", "Datos insertados correctamente", "success");
            } else {
                $script_alerta = alerta("Error", "No se pudo insertar", "error");
    
                throw new Exception("No se pudo insertar los datos");
            }
        }
    } catch (Throwable $ex) {
        $error = $ex->getMessage();
    }
    
    # incluir la vista
    
    require_once 'vistas/vista_tiendas.php';
    
    # No debe haber codigo despues de esta linea