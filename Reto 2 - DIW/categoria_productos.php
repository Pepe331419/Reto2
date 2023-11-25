<!DOCTYPE html>
<html lang="es">

<?php
$titulo = "Categoría de productos :: ACNH Tracker";
$linkJS = "product";
require("views/head.php");
?>

<body>
    <?php
    require("views/header.php");
    ?>
    <main>
        <section class="boxed">
            <h1>Muebles</h1>
            <h2>Artículos del hogar</h2>
            <form action="#">
                <input type="search" name="searchProduct" id="searchProduct">
                <input type="submit" value="Buscar">
            </form>
            <div class="conjuntoProductos">
                <div class="producto">
                    <h3>Buró antiguo</h3>
                    <p>Color Marrón</p>
                    <img src="static\img\Buro antiguo - Marron.png" alt="Cómoda de madera">
                    <div class="precio">
                        <h4>3.000</h4>
                        <img src="static\img\materiales\Bayas.png" alt="Bayas">
                    </div>
                    <select name="selectVar">
                        <option value="0035/1">Marrón</option>
                        <option value="0035/2">Natural</option>
                        <option value="0035/3">Negro</option>
                    </select>
                    <button>Añadir al carrito</button>
                </div>

                <div class="producto">
                    <h3>Sillón de diseño</h3>
                    <p>Color Plata</p>
                    <img src="static\img\Sillon de diseño - Plata.png" alt="Cómoda de madera">
                    <div class="precio">
                        <h4>3.000</h4>
                        <img src="static\img\materiales\Bayas.png" alt="Bayas">
                    </div>
                    <select name="selectVar">
                        <option value="0065/1">Plata</option>
                        <option value="0065/2">Negro</option>
                        <option value="0065/3">Naranja</option>
                        <option value="0065/4">Azul</option>
                        <option value="0065/5">Rojo</option>
                    </select>
                    <button>Añadir al carrito</button>
                </div>
            </div>
        </section>
    </main>

    <?php
    require("views/carrito.php");
    ?>

    <?php
    require("views/footer.php");
    ?>
</body>

</html>