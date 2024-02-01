<?php

require_once './Models/Conexion.php';
require_once("./Models/ProductoMO.php");
require_once "./View/Components/cartasProducto.php";

/*
//Lista debug
$arrayProductos = array(new ProductoMO("Fancy Product", "40.00 - 80.00", "0", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg"));

array_push($arrayProductos, new ProductoMO("Producto Piolin", "5", "https://w0.peakpx.com/wallpaper/278/612/HD-wallpaper-pepe-on-laptop-working-pepe-funny-cool.jpg",  "23.99", "1.00"));
array_push($arrayProductos, new ProductoMO("Special Item"   , "5", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg", "20.00",  "18.00"));
array_push($arrayProductos, new ProductoMO("Sale Item"      , "0", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg", "50.00",  "25.00"));
array_push($arrayProductos, new ProductoMO("Popular Item"   , "3", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg", "40.00"  ));
array_push($arrayProductos, new ProductoMO("Sale Item"      , "0", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg", "50.00",  "25.00"));
array_push($arrayProductos, new ProductoMO("Fancy Product"  , "0", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg", null, null, "120.00", "280.00"));
array_push($arrayProductos, new ProductoMO("Special Item"   , "5", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg", "20.00","18.00"));
array_push($arrayProductos, new ProductoMO("Popular Item"   , "3", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg", "40.00" ));

*/

//Iniciar una conexion con la BD
$conn = new Conexion();

//Crear un array de productos y llenarlo con la solicitud de la BD
$arrayProductos = array();
foreach ($conn->getListaProductos() as $producto) {
    array_push($arrayProductos, $producto);
}

// "INSERTA" la vista Principal
require("./View/PrincipalView.php");

?>