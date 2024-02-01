<?php
require_once "./Models/ProductoMO.php";

function insertarCartaProducto(ProductoMO $producto)
{
    //ob_start(); //funcion que indica que se empiece a "contener" lo que vaya generar el script en un buffer interno
?>
    <div class="">
        <div class="card col mb-5">
            <div class="card h-100" style="max-height: 380;">

                <!-- Simbolo de LIQUIDACION -->
                <?php if ($producto->getPrecioLiquidacion() != null) {
                    echo
                    <<<HTML
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">LIQUIDACION</div>
                HTML;
                } ?>

                <!-- Imagen del Producto ESE SIZE DE IMAGEN BIEN BIEN RARO -->
                <img class="card-img-top" src=<?php echo $producto->getImagen() ?> alt="https://upload.wikimedia.org/wikipedia/commons/thumb/0/01/BS_Icon_-_Question.svg/1024px-BS_Icon_-_Question.svg.png" />
                <a href="<?php echo "./producto.php?producto=" . $producto->getId() ?>" style="color: inherit;" class="card-link"></a>

                <!-- Detalles de producto -->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Nombre -->
                        <h5 class="fw-bolder"> <?php echo $producto->getNombre() ?> </h5>
                        <!-- Reviews -->
                        <div class="d-flex justify-content-center small text-warning mb-2">
                            <?php
                            if ($producto->getPuntuacion() != null) {
                                for ($i = 0; $i < 5; $i++) {
                                    if ($producto->getPuntuacion() > $i) {
                                        echo
                                        <<<HTML
                                    <div class="bi-star-fill"></div>
                                    HTML;
                                    } else {
                                        echo
                                        <<<HTML
                                    <div class="bi-star"></div>
                                    HTML;
                                    }
                                }
                            }
                            ?>
                        </div>
                        <!-- PRECIO -->
                        <?php if ($producto->getPrecio() != null) {
                            //Esto significa que es un producto que solo tiene UN precio

                            if ($producto->getPrecioLiquidacion() != null) {
                                //En caso tenga un precio de Liquidacion
                                echo
                                <<<HTML
                            <span class="text-muted text-decoration-line-through"> S/. {$producto->getPrecio()} </span>
                            S/. {$producto->getPrecioLiquidacion()}
                            HTML;
                            } else {
                                //En caso tenga solo un precio
                                echo
                                <<<HTML
                            S/. {$producto->getPrecio()}
                            HTML;
                            }
                        } else {
                            //Aqui significa que el producto tiene un RANGO de precios
                            echo
                            <<<HTML
                        S/. {$producto->getPrecioMinimo()} - S/. {$producto->getPrecioMaximo()}
                        HTML;
                        }
                        ?>
                    </div>
                </div>
                <!-- Boton de agregar -->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto card__cta" >Agregar al Carrito</a></div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Estilo que se encuentra aca metido puesto que no queria que se mostrara esto en la vista principal*/
        .card {
            min-height: 380px;
            border-radius: 4px;
            background: #fff;
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 18px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }

        .card-link {
            /*Stretched-link class ya hace lo mismo que esto*/
            color: inherit;
            text-decoration: none;

            &::after {
                content: "";
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
            }
        }

        .card__cta {
            position: relative;
            width: 80%;
            padding: 0.5rem;
        }
    </style>
<?php
    //return ob_get_clean(); //obtiene en una variable todo lo que se estuvo conteniendo en el buffer
} ?>