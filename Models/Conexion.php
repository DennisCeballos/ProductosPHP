<?php

require("./Models/ProductoMO.php");

class Conexion{

    private $conn;

    public function __construct()
    {
        //Obtener los datos necesarios del archivo de configuracion
        $config = include('./config.php');
        
        $host =     $config['db_host'];
        $username = $config['db_user'];
        $password = $config['db_password'];
        $database = $config['db_name'];

        //Crea la conexion
        $this->conn = new mysqli($host, $username, $password, $database);
    }

    public function __destruct()
    {
        $this->conn->close();
    }

    //Funcion para obtener una  lista de productos desde la BD
    public function getListaProductos(): array{
        //Query para obtener los productos
        $query = $this->conn->query(
            'SELECT * FROM paginadproductos.producto JOIN paginadproductos.precio ON paginadproductos.producto.ProductoId = paginadproductos.precio.IdProducto WHERE Imagen=\'https://dummyimage.com/450x300/dee2e6/6c757d.jpg\';'
        );
        $retorno = [];
        
        //"Pobla" un array con los elementos obtenidos del query CONVERTIDOS al obtejo
        $i = 0;
        while($fila = $query->fetch_assoc()){
            $retorno[$i] = new ProductoMO($fila["Nombre"], $fila["Puntuacion"], $fila["Imagen"], $fila["PrecioUnico"], $fila["PrecioLiquidacion"], $fila["PrecioInferior"], $fila["PrecioSuperior"], $fila["ProductoId"]);
            $i++;
            
        }

        return $retorno;
    }

    //Funcion para obtener una  lista de productos desde la BD SOLO PARA PREMIUM (o sea la pagina propia)
    public function getListaProductosPREMIUM(): array{
        //Query para obtener los productos
        $query = $this->conn->query(
            'SELECT * FROM paginadproductos.producto JOIN paginadproductos.precio ON paginadproductos.producto.ProductoId = paginadproductos.precio.IdProducto ORDER BY RAND();'
        );
        $retorno = [];
        
        //"Pobla" un array con los elementos obtenidos del query CONVERTIDOS al obtejo
        $i = 0;
        while($fila = $query->fetch_assoc()){
            $retorno[$i] = new ProductoMO($fila["Nombre"], $fila["Puntuacion"], $fila["Imagen"], $fila["PrecioUnico"], $fila["PrecioLiquidacion"], $fila["PrecioInferior"], $fila["PrecioSuperior"], $fila["ProductoId"]);
            $i++;
            
        }

        return $retorno;
    }
    
    public function getProducto(int $id): ?ProductoMO{
        $query = $this->conn->query(
            'SELECT * FROM paginadproductos.producto JOIN paginadproductos.precio ON paginadproductos.producto.ProductoId = paginadproductos.precio.IdProducto WHERE idProducto=' . $id . ';'
        );
        
        $producto = null;

        while($fila = $query->fetch_assoc()){
            $producto = new ProductoMO($fila["Nombre"], $fila["Puntuacion"], $fila["Imagen"], $fila["PrecioUnico"], $fila["PrecioLiquidacion"], $fila["PrecioInferior"], $fila["PrecioSuperior"], $fila["ProductoId"]);
        }

        return $producto;
    }

    public function getImagenesRandom(): array {
        $query = $this->conn->query(
            'SELECT paginadproductos.producto.Imagen FROM paginadproductos.producto WHERE ProductoId>8 ORDER BY RAND() limit 3;'
        );

        $retorno = [];
        
        $i = 0;
        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila['Imagen'];
            $i++;
        }

        return $retorno;
    }
        
}
