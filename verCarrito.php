<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="resources/css/style.css">
</head>
</head>

<body>
    <?php

    session_start();

    if (!isset($_SESSION["carrito"])) {
        header("location:index.php");
    }

    ?>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?= $_SESSION["nombre"] ?></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2">
                    <li class="nav-item">
                        <a class='btn btn-danger mt-2' href='controlSesion.php?accion=cerrarSesion'>Cerrar Sesion</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary mt-2" href="catalogo.php">Agregar Producto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    if (count($_SESSION["carrito"]) == 0) {
        echo "carrito vacio";
        echo "<a href='catalogo.php'>Catalogo</a><br/>";
    } else {
        echo "<div class='d-flex justify-content-center gap-3 mt-5'>";
        foreach ($_SESSION["carrito"] as $fila) {
    ?>
            <div class='col-2 bg-light bg-opacity-75 mb-3 border border-dark rounded-3 border-2 shadow-lg p-3'>
                <div class="mb-1 text-center fw-bolder fs-5">Nombre: <?= $fila["nombre"] ?><br></div>
                <hr>
                <div class="mb-1"><span class="fw-bolder">Precio: </span><?= $fila["precio"] ?><br></div>
                <div class="mb-1"><span class="fw-bolder">Cantidad: </span><?= $fila["cantidad"] ?><br></div>
                <div class="mb-1"><span class="fw-bolder">Subtotal: </span><?= $fila["subtotal"] ?><br></div>
                <hr>
                <div class="mb-1">
                    <a class='btn btn-danger w-100' href='controlCarrito.php?accion=borrar&idProducto=" . $fila["nombre"] . "'>Borrar</a><br />
                </div>
            </div>
    <?php

        }
        echo "</div>";
    }
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>