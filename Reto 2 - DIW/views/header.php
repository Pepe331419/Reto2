<header>
    <img src="static/img/Logo.svg" alt="Logotipo de la web">
    <nav>
        <ul>
            <li>
                <a href="producto.php">Muebles</a>
                <ul class="subMenu">
                    <li><a href="producto.php">Art. del hogar</a></li>
                    <li><a href="producto.php">Enseres</a></li>
                    <li><a href="producto.php">Para colgar</a></li>
                    <li><a href="producto.php">De techo</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Moda</a>
                <ul class="subMenu">
                    <li><a href="producto.php">Partes de arriba</a></li>
                    <li><a href="producto.php">Partes de abajo</a></li>
                    <li><a href="producto.php">Cuerpo entero</a></li>
                    <li><a href="producto.php">Sombrerería</a></li>
                    <li><a href="producto.php">Accesorios</a></li>
                    <li><a href="producto.php">Complementos</a></li>
                    <li><a href="producto.php">Calcetines</a></li>
                    <li><a href="producto.php">Calzados</a></li>
                    <li><a href="producto.php">Paraguas</a></li>
                    <li><a href="producto.php">Otros</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Interior</a>
                <ul class="subMenu">
                    <li><a href="producto.php">Papel de pared</a></li>
                    <li><a href="producto.php">Suelos</a></li>
                    <li><a href="producto.php">Alfombras</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Otros</a>
            </li>
        </ul>
    </nav>
    <nav>
        <ul>
            <li><a href="#" id="btnBusqueda">Búsqueda</a></li>
            <li><a href="#">Mi cuenta</a></li>
        </ul>
    </nav>
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