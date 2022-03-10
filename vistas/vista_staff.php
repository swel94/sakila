<?php require_once "parte_head.php" ?>

<body>
    <?php require_once "parte_menu.php" ?>

    <div class="container">
        <h3> <?php echo $pagina; ?> </h3>

        <div class="row">
            <form class="col-6" method="POST">
                <div class="mb-3">
                    <label for="" class="form-label" >First Name</label>
                    <input type="form" class="form-control" name="first_name">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label" >Last Name</label>
                    <input type="form" class="form-control" name="last_name">
                </div>
                <div class="mb-3">
                    <select class="form-select" name="address_id">
                        <option value="">Address</option>
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
                </div>
                <div class="mb-3">
                    <label for="" class="form-label" >Email</label>
                    <input type="form" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <select class="form-select" name="store_id">
                        <option value="">Store</option>
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
                <div class="mb-3">
                    <label for="" class="form-label" >Username</label>
                    <input type="form" class="form-control" name="username">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label" >Password</label>
                    <input type="form" class="form-control" name="password">
                </div>
                <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="save_button">Save</button>
                </div>
            </form>

        </div>

        <?php if (!empty($error)); ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php echo $error ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        </form>
    </div>

    <div class="row">
        <form class="col-6">
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
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Address ID</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Email</th>
                        <th scope="col">Store ID</th>
                        <th scope="col">Active</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Last Update</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM staff";
                    $buscador = $_GET['texto-buscador'] ?? "";
                    if ($buscador != "") {
                        $query = "SELECT * FROM staff WHERE first_name = '$buscador'";
                    }
                    $resultado = mysqli_query($conexion, $query);
                    if ($resultado) {
                        while ($fila = mysqli_fetch_object($resultado)) {
                            $imagen = 'data:image/jpeg;base64,' . base64_encode($fila->picture);
                            echo "
                            <tr>
                                <td>{$fila->staff_id}</td>
                                <td>{$fila->first_name}</td>
                                <td>{$fila->last_name}</td>
                                <td>{$fila->address_id}</td>
                                <td> <img src='{$imagen}'></td>
                                <td>{$fila->email}</td>
                                <td>{$fila->store_id}</td>
                                <td>{$fila->active}</td>
                                <td>{$fila->username}</td>
                                <td>{$fila->password}</td>
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