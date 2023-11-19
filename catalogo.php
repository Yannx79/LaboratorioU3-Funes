<?php
session_start();
if (!isset($_SESSION["carrito"])) {
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="resources/css/style.css" />
</head>

<body class="bg-dark">

    <!--  
    <a class="btn btn-danger" href="controlSesion.php?accion=cerrarCarrito">Cerrar Carrito</a>
    <hr />
    <a class="btn btn-success" href="verCarrito.php">Ver carrito</a>
    -->
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="bg-light bg-opacity-75 col-sm-6 col-lg-3 p-5 border border-dark border-3 shadow-lg rounded-3">

            <form method="post" action="controlCarrito.php">
                <h2 class="text-dark text-center mb-3">Bienvenido <?php echo $_SESSION["nombre"] . " " . $_SESSION["apellido"]; ?></h2>
                <h3 class="text-center mb-3">Ingresar Productos</h3>
                <hr>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fw-bolder">Articulo</label>
                    <input class="form-control" type="text" name="articulo" size="10">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fw-bolder">Precio</label>
                    <input class="form-control" type="text" name="precio" size="10">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fw-bolder">Cantidad</label>
                    <input class="form-control" type="text" name="cantidad" size="10">
                </div>

                <input type="hidden" name="accion" value="add" />

                <div class="mb-3">
                    <input class="btn btn-primary w-100 border-dark border-2" type="submit" name="enviar" value="ENVIAR" />
                </div>

                <hr>

                <div class="d-flex gap-1">
                    <a class="btn btn-danger w-50 border-dark border-2" href="controlSesion.php?accion=cerrarCarrito">Cerrar Carrito</a>
                    <a class="btn btn-success w-50 border-dark border-2" href="verCarrito.php">Ver carrito</a>
                </div>

            </form>



        </div>
    </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</html>