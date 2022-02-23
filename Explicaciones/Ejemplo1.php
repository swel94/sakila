<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container w-50">

    <h5>Ejemplo </h5>
    <br>
    <form action="" method="GET">
        <div class="mb-3">
            <label for="">Correo</label>
            <input type="text" name="Correo" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Nombre</label>
            <input type="text" name="Nombre" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Apellido</label>
            <input type="text" name="Apellido" class="form-control">
        </div>
        <did class="mb-3">
            <label for="">Edad</label>
            <input type="text" name="Edad" class="form-control">
        </did>
        <div class="mb-3">
            <label for="">Pais</label>
            <input type="text" name="Pais" class="form-control">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Enviar</button>
        </div>

    </form>
    <?php
    
    print_r($_GET);

    ?>
    </div>

</body>
</html>