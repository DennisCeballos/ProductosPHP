<?php

require("./Models/Conexion.php");

$idProducto = $_GET["producto"];

if (is_null($idProducto) || !is_numeric($idProducto)){
    header("Location: propioIndex.php");
    exit;
}

$conn = new Conexion();

$producto = $conn->getProducto($idProducto);

//En caso sea un producto que no existe, que se redireccione a la pagina index principal
if (is_null($producto)){
    header("Location: propioIndex.php");
    exit;
}

//Carga la pagina de ProductoView
require("./View/ProductoView.php");

?>