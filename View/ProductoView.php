<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Pagina de Compras hecha por mi</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/on-hold.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <?php

    //Cargar el navbar

    include("./View/navbar.php");

    ?>


    <div class="container marketing">

        <hr class="featurette-divider">


        <section class="py-0">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center" style="height: 500px;">
                    <div class="col-md-6">

                        <!--Nombre del producto-->
                        <h1 class="display-5 fw-bolder"> <?php echo $producto->getNombre() ?> </h1>

                        <!--Precio producto-->
                        <div class="fs-5 mb-2">

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

                        <!--ZONA DE ESTRELLITAS-->
                        <div class="d-flex text-warning mb-3">
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

                        <!-- Agregar al carro -->
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1 mb-5"></i>
                                Agregar al carrito
                            </button>
                        </div>
                    </div>

                    <!-- Imagen -->
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <div style="position: relative;">
                            <img class="card-img-top mb-5 mb-md-0" style="max-width: 600px; max-height: 700px;" src=<?php echo $producto->getImagen() ?> alt="https://dummyimage.com/600x700/dee2e6/6c757d.jpg">
                            <!-- Simbolo de LIQUIDACION -->
                            <?php if ($producto->getPrecioLiquidacion() != null) {
                                echo
                                <<<HTML
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">LIQUIDACION</div>
                                HTML;
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="featurette-divider">

    </div>

    <?php

    include("./View/PropioFooter.php");

    ?>


</body>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>