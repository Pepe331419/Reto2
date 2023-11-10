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
        <section class="boxed">
            <h1>Cómoda de madera</h1>
            <div class="col2">
                <div class="variantSelected">
                    <img id="mainImg" src="static/img/Comoda de madera - Madera clara.png" alt="Cómoda de madera - Madera clara">
                </div>
                <div class="productInfo">
                    <p>#1944 - Muebles</p>
                    <h4>Variantes:</h4>
                    <div class="variantSelector">
                        <button id="btnVar1" type="button" class="varAmarillo"></button>
                        <button id="btnVar2" type="button" class="varBeige"></button>
                        <button id="btnVar3" type="button" class="varNaranja"></button>
                        <button id="btnVar4" type="button" class="varMarron"></button>
                        <button id="btnVar5" type="button" class="varNegro"></button>
                        <button id="btnVar6" type="button" class="varVerde"></button>
                        <button id="btnVar7" type="button" class="varAzul"></button>
                        <button id="btnVar8" type="button" class="varRosa"></button>
                    </div>
                    <h2>1.920 bayas</h2>
                    <form action="#" method="get">
                        <input type="submit" value="Añadir">
                    </form>
                </div>
            </div>
        </section>
    </main>


    <?php
    require("views/footer.php");
    ?>
</body>

</html>