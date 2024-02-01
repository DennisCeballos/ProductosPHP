<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ahora si mio</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/on-hold.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<?php
echo 'Hola MUNDILLO 😎🤙';

/*$dirPath = '../Models';
$files = scandir($dirPath);  
foreach ($files as $file) {
    $filePath = $dirPath . '/' . $file;
    if (is_file($filePath)) {
        echo $file . "<br>";
    }
}*/

?>

<body>

    <!-- NavegacionBarraXD -->
    <?php include "./View/navbar.php" ?>

    <!-- Presentacion para comprar -->
    <header id="miHeader" class="py-4 bg-dark">
        <div id="carouselHeader" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Primer slide -->
                <div class="carousel-item active">
                    <img src="../assets/compracompra.png" class="d-block mx-auto" style="opacity: 0.6; object-fit: contain; height: 300px;" alt="Imagen COMPRA sugestion">
                </div>
                <!-- Siguientes slides de imagenes -->
                <?php
                foreach ($arrayImagenes as $imgLink) {
                ?>
                    <div class="carousel-item">
                        <img src=<?php echo $imgLink ?> class="d-block mx-auto" style="opacity: 0.6; object-fit: contain; height: 300px;">
                    </div>
                <?php
                }
                ?>
                <!-- Agrega más slides según sea necesario -->
            </div>
            <!-- Controles de carrusel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHeader" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselHeader" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
            <!-- Título en medio del carrusel -->
            <div class="carousel-caption d-md-block">
                <div class="container px-4 px-lg-5 my-5 text-center text-grey">
                    <h1 class="display-4 fw-bolder">Compra con <i>estilo</i></h1>
                    <p class="lead fw-normal text-white-70 mb-0">Esta pagina fue creada por <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="Dennis Andre Ceballos Manrique" style="color: inherit;" class="text-decoration-underline" href="https://www.linkedin.com/in/dennis-andre-ceballos-manrique-69ba7324b/"> mi </a></p>
                </div>
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
    <?php include "./View/PropioFooter.php" ?>

</body>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    //Script que permite el tooltip del Header
    $(document).ready(function() {
        // Inicializa los tooltips
        $('[data-bs-toggle="tooltip"]').tooltip();
    });
</script>

</html>