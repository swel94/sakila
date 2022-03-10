<?php require_once "parte_head.php" ?>

<body>
    <?php require_once "parte_menu.php" ?>

    <div class="container">
        <h3> <?php echo $pagina; ?> </h3>


        <div class="row">
            <form class="col-6" method="POST">
                <div class="mb-2">
                    <label for="">Manager Staff ID</label>
                    <select class="form-select" name="manager_staff_id" aria-label="Default select example">
                        <option value="" selected>Select</option>

                        <?php
                        $query = "SELECT * FROM store";

                        $resultado = mysqli_query($conexion, $query);

                        if ($resultado) {
                            while ($fila = mysqli_fetch_object($resultado)) {
                                echo "<option value='$fila->store_id'>$fila->manager_staff_id</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
        </div>


        <div class="mb-3">
            <label for="">Address Id</label>
            <select class="form-select" name="country_id">
                <option value="" selected>Select</option>
                <?php
                $query = "SELECT * FROM address";

                $resultado = mysqli_query($conexion, $query);

                if ($resultado) {
                    while ($fila = mysqli_fetch_object($resultado)) {
                        echo "<option value='$fila->address_id'>$fila->address</option>";
                    }
                }
                ?>
            </select>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" name="save">Save</button>
                </div>
        </div>
        </form>
        <?php if (!empty($error)); ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php echo $error ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>

    <div class="row">
        <form class="col-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Buscador" name="texto-buscador">
                <button class="btn btn-outline-secondary" type="submit" name="boton-buscar"><i class="bi bi-search"></i>Buscar</button>
            </div>

        </form>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Manager Staff ID</th>
                        <th scope="col">Address ID</th>
                        <th scope="col">Last Update</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM store";
                    $buscador = $_GET['texto-buscador'] ?? "";
                    if ($buscador != "") {
                        $query = "SELECT * FROM store WHERE manager_staff_id = '$buscador'";
                    }
                    $resultado = mysqli_query($conexion, $query);
                    if ($resultado) {
                        while ($fila = mysqli_fetch_object($resultado)) {
                            echo "
                            <tr>
                                <td>{$fila->store_id}</td>
                                <td>{$fila->manager_staff_id}</td>
                                <td>{$fila->address_id}</td>
                                <td>{$fila->last_update}</td>
                            </tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>

    <?php require_once "parte_footer.php" ?>
</body>

</html>
</div>

<?php require_once "parte_footer.php" ?>
</body>

</html>