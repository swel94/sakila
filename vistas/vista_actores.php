<?php require_once "parte_head.php" ?>

<body>

    <?php require_once "parte_menu.php" ?>

    <div class="container">
        <h3><?php echo $pagina; ?></h3> 


        <div class="row">
            <form class="col-6">
                Aqui va el formulario!

            </form>
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
            <div class="col-12"></div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Last Update</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                
                    $query = "SELECT * FROM actor";

                    $resultado = mysqli_query($conexion, $query);

                    if ($resultado){
                        while ($fila = mysqli_fetch_assoc($resultado)){
                            echo "
                            <tr>
                                <td>${fila['actor_id']}</td>
                                <td>${fila['first_name']}</td>
                                <td>${fila['last_name']}</td>
                                <td>${fila['last_update']}</td>
                            </tr>";
                        }
                    }

                
                ?>


                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    <i class="bi bi-star"></i>

    <?php require_once "parte_footer.php" ?>
</body>

</html> 