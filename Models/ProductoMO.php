<?php

class ProductoMO
{
    private $id;

    private $nombre;
    private int $puntuacion;
    private $imagen;
    
    private $precio;
    private $precioLiquidacion;
    private $precioMinimo;
    private $precioMaximo;
    
    public function __construct($nom, $punt, $img, $price = null, $priceliqui = null, $priceMin = null, $priceMax = null, $id = null)
    {
        $this->nombre = $nom;
        $this->setPuntuacion($punt); //Necesario esto porque hay una logica necesaria de ejecutar
        $this->imagen = $img;

        $this->precio = $price;
        $this->precioLiquidacion = $priceliqui;
        $this->precioMaximo = $priceMax;
        $this->precioMinimo = $priceMin;

        $this->id = $id;
    }

    public static function __construct_precioRango(){
        
    }

    // Getters
    public function getNombre()             { return $this->nombre; }
    public function getPuntuacion()         { return $this->puntuacion; }
    public function getImagen()             { return $this->imagen; }
    public function getPrecio()             { return $this->precio; }
    public function getPrecioLiquidacion()  { return $this->precioLiquidacion; }
    public function getPrecioMinimo()       { return $this->precioMinimo; }
    public function getPrecioMaximo()       { return $this->precioMaximo; }
    public function getId()       { return $this->id; }


    // Setters
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setPrecio($precio) {
        $this->precio = $precio;
    }
    public function setPuntuacion($puntuacion) {
        if ($puntuacion >= 5) {
            $this->puntuacion = 5;

        } elseif  ($puntuacion <= 0) {
            $this->puntuacion = 0;
            
        } else {
            $this->puntuacion = $puntuacion;
        }
    }
    public function setImagen($imagen) {
        $this->imagen = $imagen;
    }
    public function setPrecioLiquidacion($precioLiquidacion) {
        $this->precioLiquidacion = $precioLiquidacion;
    }
    public function setPrecioMinimo($precioMinimo) {
        if ($this->precioMinimo =! null) {
            $this->precioMinimo = $precioMinimo;
        }
    }
    public function setPrecioMaximo($precioMaximo) {
        if ($this->precioMaximo =! null) {
            $this->precioMaximo = $precioMaximo;
        }
    }

}

?>