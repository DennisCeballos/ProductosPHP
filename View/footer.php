<!-- Pie de pagina -->
<footer class="py-3 bg-dark">
    <div class="text-center p-1 bg-dark text-white">
        <p class="m-0 text-center text-white">Copyright &copy;
        Mi pagina con <b>PHP</b> 2023</p>

        Completamente inspirado en
        <a class="text-white" href="https://startbootstrap.com/previews/shop-homepage#google_vignette">Shop Homepage Template</a>
    </div>
    <div class="d-flex flex-row-reverse">
        <?php 
        //Codigo para que sea "TOOGLE" visitar entre la pagina index principal y la pagina indexPropia
        $paginaActual = $_SERVER['SCRIPT_NAME'];
        $otraPagina = "";
        if ($paginaActual == "/index.php"){
            $otraPagina = "./propioIndex.php";
        } elseif ($paginaActual == "/propioIndex.php") {
            $otraPagina = "./index.php";
        } else {
            $otraPagina = "NI PINCHO";
        }
        ?>
        <a href="<?php echo $otraPagina ?>" class="p-1 btn btn-link" >Cambiar pagina</a>
    </div>
</footer>
<script>
    function elIncludeDePhpINCRUSTAotroContenido (){
        var a = 10;
        console.log(a);
    }
</script>