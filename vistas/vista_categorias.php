<?php require_once "parte_head.php" ?>

<body>
    <?php require_once "parte_menu.php" ?>

    <div class="container">
        <h3> <?php echo $pagina; ?> </h3>
        <?php require_once "parte_head.php" ?>

        <div class="row">

            <form class="col-6" method="POST">

                <input type="text" name="id" value="<?php echo $category_id ?? ""; ?>">

                <div class="mb-3">
                    <label for="">Nombre</label>
                    <input value= "<?php echo $category_name ?? "";?>" type="text" name="name" class="form-control">

                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" name="boton-guardar">Guardar</button>
                </div>

            </form>
            <?php if (!empty($error)) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php echo $error ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <?php if (!empty($_SESSION['mensaje'])) : ?>
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <?php echo ($_SESSION['mensaje']) ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

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
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Last Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = "SELECT * FROM category";
                        $buscador = $_GET['texto-buscador'] ?? "";
                        if ($buscador != "") {
                            $query = "SELECT * FROM category WHERE name = '$buscador'";
                        }
                        $resultado = mysqli_query($conexion, $query);
                        if ($resultado) {
                            while ($fila = mysqli_fetch_object($resultado)) {
                                echo "
                            <tr>
                                <td>{$fila->category_id}</td>
                                <td>{$fila->name}</td>
                                <td>{$fila->last_update}</td>
                                <td>
                                <a class='btn btn-info' href='{$_SERVER['PHP_SELF']}?editar=$fila->category_id'>Edit</a>
                                <a class='btn btn-danger' href='{$_SERVER['PHP_SELF']}?eliminar=$fila->category_id'>Delete</a>
                                </td>
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