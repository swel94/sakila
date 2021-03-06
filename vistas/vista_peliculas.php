<?php require_once "parte_head.php" ?>

<body>
    <?php require_once "parte_menu.php" ?>

    <div class="container">
        <h3> <?php echo $pagina; ?> </h3>

        <!-- Formulario Insert -->

        <div class="row">
            <form class="col-6" method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input type="form" class="form-control" name="title">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Description</label>
                    <input type="form" class="form-control" name="description">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Release Year</label>
                    <input type="form" class="form-control" name="release_year">
                </div>
                <div class="mb-3">
                    <select class="form-select" name="language_id">
                        <option value="">Language</option>
                        <?php
                        $query = "SELECT * FROM language";

                        $resultado = mysqli_query($conexion, $query);

                        if ($resultado) {
                            while ($fila = mysqli_fetch_object($resultado)) {
                                echo "<option value='$fila->language_id'>$fila->language_id</option>";
                            }
                        }
                        ?>    
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" name="original_language_id">
                        <option value="">Original Language</option>    
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Rental Duration</label>
                    <input type="form" class="form-control" name="rental_duration">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Rental Rate</label>
                    <input type="form" class="form-control" name="rental_rate">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Lenght</label>
                    <input type="form" class="form-control" name="lenght">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Replacement Cost</label>
                    <input type="form" class="form-control" name="replacement_cost">
                </div>
                <div class="mb-3">
                    <select class="form-select" name="rating">
                        <option selected>Rating</option>
                        <?php
                        $query = "SELECT DISTINCT rating FROM film WHERE rating != ''";
                        $resultado = mysqli_query($conexion, $query);

                        if ($resultado) {
                            while ($fila = mysqli_fetch_object($resultado)){
                                echo "<option value = '$fila->rating'>$fila->rating</option>";
                            }
                        }
                        ?>    
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" name="special_features">
                        <option selected>Special Features</option>
                        <?php
                        $query = "SELECT DISTINCT rating FROM film WHERE special_features != ''";
                        $resultado = mysqli_query($conexion, $query);

                        if ($resultado) {
                            while ($fila = mysqli_fetch_object($resultado)) {
                                echo "<option value = '$fila->special_features'>$fila->special_features</option>";
                            }
                        }
                        ?>    
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" name="save_button">Save</button>
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
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover container-sm">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Release Year</th>
                        <th scope="col">Language ID</th>
                        <th scope="col">Original Language ID</th>
                        <th scope="col">Rental Durantion</th>
                        <th scope="col">Rental Rate</th>
                        <th scope="col">Lengh</th>
                        <th scope="col">Replacement Cost</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Special Features</th>
                        <th scope="col">Last Update</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM film";
                    $buscador = $_GET['texto-buscador'] ?? "";
                    if ($buscador != "") {
                        $query = "SELECT * FROM film WHERE title = '$buscador'";
                    }
                    $resultado = mysqli_query($conexion, $query);
                    if ($resultado) {
                        while ($fila = mysqli_fetch_object($resultado)) {
                            echo "
                            <tr>
                                <td>{$fila->film_id}</td>
                                <td>{$fila->title}</td>
                                <td>{$fila->description}</td>
                                <td>{$fila->release_year}</td>
                                <td>{$fila->language_id}</td>
                                <td>{$fila->original_language_id}</td>
                                <td>{$fila->rental_duration}</td>
                                <td>{$fila->rental_rate}</td>
                                <td>{$fila->length}</td>
                                <td>{$fila->replacement_cost}</td>
                                <td>{$fila->rating}</td>
                                <td>{$fila->special_features}</td>
                                <td>{$fila->last_update}</td>
                            </tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php require_once "parte_footer.php" ?>
</body>

</html>
</div>

<?php require_once "parte_footer.php" ?>
</body>

</html>