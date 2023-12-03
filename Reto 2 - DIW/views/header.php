<header>
    <div class="desktop">
        <a id="goToIndex" href="index.php"><img src="static/img/Logo.svg" alt="Logotipo de la web"></a>
        <nav>
            <ul>
                <li>
                    <a href="#">Muebles</a>
                    <ul class="subMenu">
                        <li><a href="categoria_productos.php">Art. del hogar</a></li>
                        <li><a href="categoria_productos.php">Enseres</a></li>
                        <li><a href="categoria_productos.php">Para colgar</a></li>
                        <li><a href="categoria_productos.php">De techo</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Moda</a>
                    <ul class="subMenu">
                        <li><a href="categoria_productos.php">Partes de arriba</a></li>
                        <li><a href="categoria_productos.php">Partes de abajo</a></li>
                        <li><a href="categoria_productos.php">Cuerpo entero</a></li>
                        <li><a href="categoria_productos.php">Sombrerería</a></li>
                        <li><a href="categoria_productos.php">Accesorios</a></li>
                        <li><a href="categoria_productos.php">Complementos</a></li>
                        <li><a href="categoria_productos.php">Calcetines</a></li>
                        <li><a href="categoria_productos.php">Calzados</a></li>
                        <li><a href="categoria_productos.php">Paraguas</a></li>
                        <li><a href="categoria_productos.php">Otros</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Interior</a>
                    <ul class="subMenu">
                        <li><a href="categoria_productos.php">Papel de pared</a></li>
                        <li><a href="categoria_productos.php">Suelos</a></li>
                        <li><a href="categoria_productos.php">Alfombras</a></li>
                    </ul>
                </li>
                <li>
                    <a href="categoria_productos.php">Otros</a>
                </li>
            </ul>
        </nav>
        <nav>
            <ul>
                <li><a href="#" id="btnBusqueda">Búsqueda</a></li>
                <li><a href="login.php">Mi cuenta</a></li>
            </ul>
        </nav>
    </div>
</header>

<header>
    <div class="mobile">
        <a href="#"><img src="static/img/Logo.svg" alt="Logotipo de la web"></a>

        <a href="#" class="mobileNav"><img class="elementMenu" src="static/img/iconos/Productos.png" alt="Productos"></a>

        <a href="#" class="mobileNav" id="imgBusqueda"><img class="elementMenu" src="static/img/iconos/Busqueda.png" alt="Productos"></a>
        <a href="login.php" class="mobileNav"><img class="elementMenu" src="static/img/iconos/MiCuenta.png" alt="Productos"></a>
    </div>
</header>

<nav id="menuBusqueda" class="">
    <div class="innerDiv">
        <h3>Búsqueda:</h3>
        <form action="#">
            <input type="text" name="inputNombreArt" id="inputNombreArt" placeholder="Nombre del artículo">
            <fieldset id="fldstMuebles">
                <legend id="lgndMuebles">Muebles ▶</legend>
                <div class="hidden divMuebles">
                    <input type="checkbox" name="chkArtHogar" id="chkArtHogar">
                    <label for="chkArtHogar">Artículos del hogar</label>
                </div>
                <div class="hidden divMuebles">
                    <input type="checkbox" name="chkEnseres" id="chkEnseres">
                    <label for="chkEnseres">Enseres</label>
                </div>
                <div class="hidden divMuebles">
                    <input type="checkbox" name="chkParaColgar" id="chkParaColgar">
                    <label for="chkParaColgar">Para colgar</label>
                </div>
                <div class="hidden divMuebles">
                    <input type="checkbox" name="chkDeTecho" id="chkDeTecho">
                    <label for="chkDeTecho">De techo</label>
                </div>
            </fieldset>
            <fieldset id="fldstModa">
                <legend id="lgndModa">Moda ▶</legend>
                <div class="hidden divModa">
                    <input type="checkbox" name="chkRopaSuperior" id="chkRopaSuperior">
                    <label for="chkRopaSuperior">Partes de arriba</label>
                </div>
                <div class="hidden divModa">
                    <input type="checkbox" name="chkRopaInferior" id="chkRopaInferior">
                    <label for="chkRopaInferior">Partes de abajo</label>
                </div>
                <div class="hidden divModa">
                    <input type="checkbox" name="chkCuerpoEntero" id="chkCuerpoEntero">
                    <label for="chkCuerpoEntero">Cuerpo entero</label>
                </div>
                <div class="hidden divModa">
                    <input type="checkbox" name="chkSombero" id="chkSombero">
                    <label for="chkSombero">Sombrerería</label>
                </div>
                <div class="hidden divModa">
                    <input type="checkbox" name="chkAccesorios" id="chkAccesorios">
                    <label for="chkAccesorios">Accesorios</label>
                </div>
                <div class="hidden divModa">
                    <input type="checkbox" name="chkComplementos" id="chkComplementos">
                    <label for="chkComplementos">Complementos</label>
                </div>
                <div class="hidden divModa">
                    <input type="checkbox" name="chkCalcetines" id="chkCalcetines">
                    <label for="chkCalcetines">Calcetines</label>
                </div>
                <div class="hidden divModa">
                    <input type="checkbox" name="chkCalzado" id="chkCalzado">
                    <label for="chkCalzado">Calzado</label>
                </div>
                <div class="hidden divModa">
                    <input type="checkbox" name="chkParaguas" id="chkParaguas">
                    <label for="chkParaguas">Paraguas</label>
                </div>
                <div class="hidden divModa">
                    <input type="checkbox" name="chkRopaOtros" id="chkRopaOtros">
                    <label for="chkRopaOtros">Otros</label>
                </div>
            </fieldset>

            <fieldset id="fldstInterior">
                <legend id="lgndInterior">Interior ▶</legend>
                <div class="hidden divInterior">
                    <input type="checkbox" name="chkPapelPared" id="chkPapelPared">
                    <label for="chkPapelPared">Papel de pared</label>
                </div>
                <div class="hidden divInterior">
                    <input type="checkbox" name="chkSuelos" id="chkSuelos">
                    <label for="chkSuelos">Suelos</label>
                </div>
                <div class="hidden divInterior">
                    <input type="checkbox" name="chkAlfombra" id="chkAlfombra">
                    <label for="chkAlfombra">Artículos del hogar</label>
                </div>
            </fieldset>
            <fieldset id="fldstPrecio">
                <legend id="lgndPrecio">Precio ▶</legend>
                <div class="hidden divPrecio" id="inputPrecio">
                    <label for="inputMinPrecio">Mínimo:</label>
                    <input type="number" name="minPrecio" id="inputMinPrecio">
                    <label for="inputMaxPrecio">Maximo: </label>
                    <input type="number" name="maxPrecio" id="inputMaxPrecio">
                </div>

                <div class="hidden divPrecio" id="radioCurrency">
                    <input type="radio" name="moneda" id="monedaBaya" value="baya">
                    <label for="monedaBaya">Bayas</label>
                    <input type="radio" name="moneda" id="monedaPoki" value="poki">
                    <label for="monedaPoki">Poki</label>
                </div>
            </fieldset>
            <input type="submit" value="Buscar">
        </form>
    </div>
</nav>