<?php

require_once './Models/Conexion.php';
require_once("./Models/ProductoMO.php");
require_once "./View/Components/propioCartasProducto.php";

$arrayProductos = array();

//Iniciar una conexion con la BD
$conn = new Conexion();

//Crear un array de productos y llenarlo con la solicitud de la BD
$arrayProductos = array();
foreach ($conn->getListaProductosPREMIUM() as $producto) {
    array_push($arrayProductos, $producto);
}

//Crear un array de imagenes
$arrayImagenes = array();
foreach ($conn->getImagenesRandom() as $img) {
    array_push($arrayImagenes, $img);
}

// "INSERTA" la vista Principal
require("./View/PropioPrincipalView.php");

?>