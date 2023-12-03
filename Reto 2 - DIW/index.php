<!DOCTYPE html>
<html lang="es">

<?php
$titulo = "Inicio :: ACNH Tracker";
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
                <a href="#seccionDestacados"><button>Ver productos destacados</button></a>
            </div>
            <img src="static/img/Imagen destacados.png" alt="Productos destacados">
        </section>

        <section class="bigBox">
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

        <section class="bigBox" id="seccionDestacados">
            <h1>Productos destacados</h1>
            <div class="conjuntoProductos">
                <div class="producto">
                    <h3><a href="producto.php">Buró antiguo</a></h3>
                    <p>Color Marrón</p>
                    <figure>
                        <div class="ribbon oferta">
                            <p>OFERTA</p>
                        </div>
                        <img src="static\img\Buro antiguo - Marron.png" alt="Buró antiguo">
                    </figure>
                    <div class="precio">
                        <h4> <span class="oferta">3.000</span> 2.500</h4>
                        <img src="static\img\materiales\Bayas.png" alt="Bayas">
                    </div>
                    <select>
                        <option value="0035/1" selected>Marrón</option>
                        <option value="0035/2">Natural</option>
                        <option value="0035/3">Negro</option>
                    </select>
                    <button class="addToCart">Añadir al carrito</button>
                </div>


                <div class="producto">
                    <div class="ribbon"></div>
                    <h3><a href="producto.php">Sillón de diseño</a></h3>
                    <p>Color Plata</p>
                    <figure>
                        <div class="ribbon tendencia">
                            <p>TENDENCIA</p>
                        </div>
                        <img src="static\img\Sillon de diseño - Plata.png" alt="Sillón de diseño">
                    </figure>
                    <div class="precio">
                        <h4>3.000</h4>
                        <img src="static\img\materiales\Bayas.png" alt="Bayas">
                    </div>
                    <select name="selectVar">
                        <option value="0065/1" selected>Plata</option>
                        <option value="0065/2">Negro</option>
                        <option value="0065/3">Naranja</option>
                        <option value="0065/4">Azul</option>
                        <option value="0065/5">Rojo</option>
                    </select>
                    <button class="addToCart">Añadir al carrito</button>
                </div>


                <div class="producto">
                    <div class="ribbon"></div>
                    <h3><a href="producto.php">Cómoda de madera</a></h3>
                    <p>Madera blanca</p>
                    <figure>
                        <div class="ribbon nuevo">
                            <p>NUEVO</p>
                        </div>
                        <img src="static\img\Comoda de madera - Madera blanca.png" alt="Cómoda de madera">
                    </figure>
                    <div class="precio">
                        <h4>2.000</h4>
                        <img src="static\img\materiales\Bayas.png" alt="Bayas">
                    </div>
                    <select name="selectVar">
                        <option value="1944/1">Madera clara</option>
                        <option value="1944/2" selected>Madera blanca</option>
                        <option value="1944/3">Madera cereza</option>
                        <option value="1944/4">Madera oscura</option>
                        <option value="1944/5">Madera negra</option>
                        <option value="1944/6">Madera verde</option>
                        <option value="1944/7">Madera azul</option>
                        <option value="1944/8">Madera rosa</option>
                    </select>
                    <button class="addToCart">Añadir al carrito</button>
                </div>
            </div>
        </section>

        <section class="bigBox">
            <h1>Últimas reseñas</h1>
            <div class="conjuntoReviews">
                <div class="review">
                    <h3><a href="producto.php">Sillón de diseño</a></h3>
                    <div>
                        <img src="static/img/iconos/ReviewOne.png" alt="Valoracion">
                        <img src="static/img/iconos/ReviewOne.png" alt="Valoracion">
                        <img src="static/img/iconos/ReviewOne.png" alt="Valoracion">
                        <img src="static/img/iconos/ReviewOne.png" alt="Valoracion">
                        <img src="static/img/iconos/ReviewHalf.png" alt="Valoracion">
                    </div>
                    <h4>Usuario: Pablito1998</h4>
                    <p>Increíblemente cómodo, superó mis expectativas. Una adición elegante a mi estudio.</p>
                </div>

                <div class="review">
                    <h3><a href="producto.php">Cama moderna</a></h3>
                    <div>
                        <img src="static/img/iconos/ReviewOne.png" alt="Valoracion">
                        <img src="static/img/iconos/ReviewOne.png" alt="Valoracion">
                        <img src="static/img/iconos/ReviewOne.png" alt="Valoracion">
                        <img src="static/img/iconos/ReviewOne.png" alt="Valoracion">
                        <img src="static/img/iconos/ReviewZero.png" alt="Valoracion">
                    </div>
                    <h4>Usuario: AntonioLorem</h4>
                    <p>La cama es perfecta para maximizar el espacio. Hermosa y funcional.</p>
                </div>

                <div class="review">
                    <h3><a href="producto.php">Mesa de notario</a></h3>
                    <div>
                        <img src="static/img/iconos/ReviewOne.png" alt="Valoracion">
                        <img src="static/img/iconos/ReviewOne.png" alt="Valoracion">
                        <img src="static/img/iconos/ReviewOne.png" alt="Valoracion">
                        <img src="static/img/iconos/ReviewOne.png" alt="Valoracion">
                        <img src="static/img/iconos/ReviewOne.png" alt="Valoracion">
                    </div>
                    <h4>Usuario: JaneDoe</h4>
                    <p>Mi nueva mesa hace que trabajar desde casa sea cómodo y eficiente. ¡Muy satisfecha!</p>
                </div>

                <div class="review">
                    <h3><a href="producto.php">Mesa de café</a></h3>
                    <div>
                        <img src="static/img/iconos/ReviewOne.png" alt="Valoracion">
                        <img src="static/img/iconos/ReviewOne.png" alt="Valoracion">
                        <img src="static/img/iconos/ReviewOne.png" alt="Valoracion">
                        <img src="static/img/iconos/ReviewOne.png" alt="Valoracion">
                        <img src="static/img/iconos/ReviewOne.png" alt="Valoracion">
                    </div>
                    <h4>Usuario: AnotherAustralian</h4>
                    <p>Diseño moderno y funcional, esta mesa realmente destaca en mi sala de estar</p>
                </div>
            </div>
        </section>

        <section class="bigBox">
            <h1>Nuestro compromiso</h1>
            <div class="infoMisc">
                <div>
                    <img src="static/img/iconos/Contact.png" alt="Contacto">
                    <h2><a href="contacto.php">Contáctanos</a></h2>
                </div>
                <div>
                    <img src="static/img/iconos/Documentacion.png" alt="Nota legal">
                    <h2><a href="#">Nota legal</a></h2>
                </div>
                <div>
                    <img src="static/img/iconos/Envio.png" alt="Política envío y devoluciones">
                    <h2><a href="#">Políticas de envío y devoluciones</a></h2>
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