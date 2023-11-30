<!DOCTYPE html>
<html lang="es">

<?php
$titulo = "Cómoda de madera :: ACNH Tracker";
$linkJS = "product";
require("views/head.php");
?>

<body>
    <?php
    require("views/header.php");
    ?>

    <main>
        <section id="hero">
            <div>
                <h1>Échale un vistazo a nuestros productos destacados</h1>
                <p>Te ofrecemos una selección de productos destacados que está triunfando entre nuestros usuarios. ¡No dejes que se te escapen!</p>
                <a href="#destacados"><button>Ver productos destacados</button></a>
            </div>
            <img src="static/img/Imagen destacados.png" alt="Productos destacados">
        </section>

        <section class="mainBox">
            <h1>Categorías</h1>
            <ul class="cat1">
                <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat1Muebles.png" alt="Muebles">Muebles</a>
                    <ul class="cat2">
                        <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat2ArtHogar.png" alt="Artículos del hogar">Artículos del hogar</a></li>
                        <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat2Enseres.png" alt="Enseres">Enseres</a></li>
                        <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat2ParaColgar.png" alt="Para colgar">Para colgar</a></li>
                        <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat2DeTecho.png" alt="De techo">De techo</a></li>
                    </ul>
                </li>
                <li><a href="categoria_productos.php"><img class="icoCat" img src="static/img/iconos/Cat1Moda.png" alt="Moda">Moda</a>
                    <ul class="cat2">
                        <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat2PartArriba.png" alt="Partes de arriba">Partes de arriba</a></li>
                        <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat2PartAbajo.png" alt="Partes de abajo">Partes de abajo</a></li>
                        <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat2CuerpoEntero.png" alt="Cuerpo entero">Cuerpo entero</a></li>
                        <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat2Sombrereria.png" alt="Sombrerería">Sombrerería</a></li>
                        <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat2Accesorios.png" alt="Accesorios">Accesorios</a></li>
                        <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat2Complementos.png" alt="Accesorios">Complementos</a></li>
                        <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat2Calcetines.png" alt="Calcetines">Calcetines</a></li>
                        <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat2Calzado.png" alt="Calzados">Calzados</a></li>
                        <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat2Paraguas.png" alt="Paraguas">Paraguas</a></li>
                        <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat2Otros.png" alt="Otros">Otros</a></li>
                    </ul>
                </li>
                <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat1Interior.png" alt="Interior">Interior</a>
                    <ul class="cat2">
                        <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat2PapelPared.png" alt="Papel de pared">Papel de pared</a></li>
                        <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat2Suelos.png" alt="Suelos">Suelos</a></li>
                        <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat2Alfombras.png" alt="Alfombras">Alfombras</a></li>
                    </ul>
                </li>
                <li><a href="categoria_productos.php"><img class="icoCat" src="static/img/iconos/Cat1Otros.png" alt="Otros">Otros</a></li>
            </ul>
        </section>

        <section class="mainBox">
            <h1>Productos destacados</h1>
            <div class="conjuntoProductos">
                <div class="producto">
                    <h3>Buró antiguo</h3>
                    <p>Color Marrón</p>
                    <img src="static\img\Buro antiguo - Marron.png" alt="Cómoda de madera">
                    <div class="precio">
                        <h4> <span class="oferta">3.000</span> 2.500</h4>
                        <img src="static\img\materiales\Bayas.png" alt="Bayas">
                    </div>
                    <select>
                        <option value="0035/1">Marrón</option>
                        <option value="0035/2">Natural</option>
                        <option value="0035/3">Negro</option>
                    </select>
                    <button>Añadir al carrito</button>
                </div>

                
                <div class="producto">
                    <div class="ribbon"></div>
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