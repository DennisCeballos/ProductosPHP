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

<?php
echo 'Hola mundillo';
?>

<body>

    <!-- NavegacionBarraXD -->
    <?php include "./View/navbar.php" ?>

    <!-- Presentacion para comprar -->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Compra con <i>estilo</i></h1>
                <p class="lead fw-normal text-white-50 mb-0">Esta pagina fue creada por </p>
            </div>
        </div>
    </header>

    <!-- CARTAS DE PRODUCTOS -->
    <section id="listaProductos" class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                
                <?php
                //Trabajo con la lista de roductos  que se define en el controlador
                $arrayProductos;

                foreach ($arrayProductos as $producto) {
                    insertarCartaProducto($producto);
                }

                ?>

            </div>
        </div>
    </section>

    <!-- El Footer -->
    <?php require "./View/footer.php" ?>

</body>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</html>