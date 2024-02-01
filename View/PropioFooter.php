<!-- Pie de pagina -->
<section id="piePagina" class="">
    <!-- Footer -->
    <footer class="bg-body-tertiary text-center bg-light">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Página de productos con PHP y Bootstrap</h5>
                    <p style="text-align: justify;">

                        Esta pagina fue elaborada y diseñada con mucho cariño, dedicación
                        trabajo, sacrificio y sudor.
                        La pagina esta conectada con una Base de datos con MySQL y todos los diseños
                        están relacionados con el uso de Bootstrap.
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-0 mb-md-0 offset-lg-3 d-flex flex-column align-items-center">
                    <h5 class="text-uppercase">Enlaces</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="/propioIndex.php#navegacion" class="text-body">Casita</a>
                        </li>
                        <li>
                            <a href="/propioIndex.php#miHeader" class="text-body">COMPRA</a>
                        </li>
                        <li>
                            <a href="#listaProductos" class="text-body">Todos los Productos</a>
                        </li>
                        <li>
                            <a href="#piePagina" class="text-body">Acerca Nosotros</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3 bg-dark text-white">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            
            <p class="m-0 text-center text-white">
                Mi pagina con <b>PHP</b> 2023
            </p>

            Completamente inspirado en
            <a class="text-white" href="https://startbootstrap.com/previews/shop-homepage#google_vignette">Shop Homepage Template</a>


            <div class="d-flex flex-row-reverse">
                <?php
                //Codigo para que sea "TOOGLE" visitar entre la pagina index principal y la pagina indexPropia
                $paginaActual = $_SERVER['SCRIPT_NAME'];
                $otraPagina = "";
                if ($paginaActual == "/index.php") {
                    $otraPagina = "./propioIndex.php";
                } elseif ($paginaActual == "/propioIndex.php") {
                    $otraPagina = "./index.php";
                } else {
                    $otraPagina = "NI PINCHO";
                }
                ?>
                <a href="<?php echo $otraPagina ?>" class="p-1 btn btn-link">Cambiar pagina</a>
            </div>

        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</section>

<script>
    function elIncludeDePhpINCRUSTAotroContenido() {
        var a = 10;
        console.log(a);
    }
</script>