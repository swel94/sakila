<?php require_once "parte_head.php" ?>

<body>
    <?php require_once "parte_menu.php" ?>

    <div class="container">
        <h3> <?php echo $pagina; ?> </h3>

        <div class="row">
            <form class="col-6" method="POST">
            
            <div class="mb-3">
                <label for="">Country</label>
                <input type="text" name="country" class="form-control">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" name="boton-guardar">Guardar</button>
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
                            <th scope="col">Country</th>
                            <th scope="col">Last Update</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                
                    $query = "SELECT * FROM country";
                    $buscador = $_GET['texto-buscador'] ?? "";
                        if ($buscador != "") {
                            $query = "SELECT * FROM country WHERE country = '$buscador'";
                        }
                    $resultado = mysqli_query($conexion, $query);
                    if ($resultado){
                        while ($fila = mysqli_fetch_object($resultado)){
                            echo "
                            <tr>
                                <td>{$fila->country_id}</td>
                                <td>{$fila->country}</td>
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