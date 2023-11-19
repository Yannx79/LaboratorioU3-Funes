<?php
session_start();

if (!isset($_SESSION["carrito"])) {
    header("location: index.php");
}

if ($_REQUEST["accion"]) {
    $accion = $_REQUEST["accion"];

    if ($accion == "add") {
        $producto["nombre"] = $_POST["articulo"];
        $producto["precio"] = $_POST["precio"];
        $producto["cantidad"] = $_POST["cantidad"];
        $producto["subtotal"] = round($_POST["precio"] * $_POST["cantidad"], 2, PHP_ROUND_HALF_UP);

        $_SESSION["carrito"][$producto["nombre"]] = $producto;
        header("location: verCarrito.php");
    } else if ($accion == "borrar") {
        $IdProducto = $_REQUEST["idProducto"];
        unset($_SESSION["carrito"][$IdProducto]);
    } else if ($accion == "verCatalogo") {
        header("location: catalogo.php");
    }
}
