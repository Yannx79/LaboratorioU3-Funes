<?php
// header('Location: /Funes-Laboratorio-8/formProductoControl.php?accion=getList');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="resources/css/style.css" />
</head>

<body class="bg-success">

    <div class="d-flex justify-content-center vh-100 align-items-center">
        <div class="bg-white bg-opacity-75 rounded-3 p-5 border border-3 border-dark shadow-lg">
            
        <form action="controlSesion.php" method="post">
            
                <h2 class="mb-3">Inicio de Sesion</h2>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bolder">Nombre</label>
                    <input name="nombre" type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bolder">Apellido</label>
                    <input name="apellido" type="text" class="form-control" id="exampleInputPassword1">
                </div>

                <input type="hidden" name="accion" value="login">

                <div class="mb-3">
                    <input class="btn btn-primary w-100" type="submit" name="enviar" value="Ingresar" id="enviar">
                </div>
            </form>

        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>