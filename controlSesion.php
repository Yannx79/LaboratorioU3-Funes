<?php

session_start();

$pagina = "index.php";

if(isset($_REQUEST["accion"])) {
    $accion = $_REQUEST["accion"];
    if($accion == "login") {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        if(!empty($nombre) && !empty($apellido)) {
            $_SESSION["nombre"] = $nombre;
            $_SESSION["apellido"] = $apellido;
            $_SESSION["carrito"] = array();

            $pagina = "controlCarrito.php?accion=verCatalogo";
        }
        echo "Mensaje con campos vacios";
    } else if ($accion = "cerrarSesion") {
        require_once './cerrarSesion.php';
    }
}
header("location: $pagina");
?>