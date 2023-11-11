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

    <dialog id="chooseDialog">
        <form method="dialog">
            <h1>Añadido a tu lista.</h1>
            <p>¿Qué deseas hacer?</p>
            <input type="submit" value="Seguir comprando">
            <input type="button" id="btnGoToList" value="Ir a mi lista">
        </form>
    </dialog>

    <main>
        <section class="boxed">
            <h1>Cómoda de madera</h1>
            <div class="col2">
                <div class="variantSelected">
                    <img id="mainImg" src="static/img/Comoda de madera - Madera clara.png" alt="Cómoda de madera - Madera clara">
                </div>
                <div class="productInfo">
                    <p>#1944 - Muebles / Artículos del hogar</p>
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

                    <div class="cost">
                        <div>
                            <img class="material" src="static/img/materiales/Madera Normal.png" alt="Madera normal">
                            <h2>16x Madera normal</h2>
                        </div>
                        <div id="customCost" class="hidden">
                            <img class="material" src="static/img/materiales/Kit Personalizacion.png" alt="Madera normal">
                            <h2>3x Kit de personalización</h2>
                        </div>
                    </div>

                    <form action="#" method="get">
                        <input type="hidden" id="variantInput" name="variant" value="var1">
                        <input type="button" value="Añadir" id="btnAddItem">
                    </form>
                </div>
            </div>
            <div class="tecnicalData">
                <table>
                    <tr>
                        <th>Precio de venta</th>
                        <th>Tamaño</th>
                        <th>Temática AAD</th>
                        <th>Puntuación AAD</th>
                    </tr>
                    <tr>
                        <td>1.920 bayas</td>
                        <td>2x1</td>
                        <td>Infantil / Sala de estar</td>
                        <td>103</td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th>Personalizable</th>
                        <th>Coste personalización</th>
                        <th>Serie</th>
                        <th>Obtención</th>
                    </tr>
                    <tr>
                        <td>Si</td>
                        <td>2.400 bayas / 3 kits</td>
                        <td>Madera</td>
                        <td>Receta (aldeano vago)</td>
                    </tr>
                </table>
            </div>
            <div class="description">
                <p>La cómoda de madera es un mueble personalizable, que forma parte de la serie de madera. Como armario permite al jugador cambiarse de ropa y personalizar los conjuntos que tengan almacenados en su varita. La superficie del mueble puede ser usado para depositar objetos más pequeños.</p>
                <p>Este objeto forma parte del mobiliario de las casas de Alderia, Antonio, Ava, Brisa, Cana, Chipi, Chuchi, Clorinda, Coni, Croaldo, Deira, Draco, Fardilla, Felina, Félix, Flopi, Franela, Gus, Hugo, Jeremías, Jones, Lizi, Lluvia, Lola, Luisa, Merina, Miki, Misi, Nana, Natacha, Orestes, Osalina, Pablo, Parches, Pinta, Praliné, Rodeo, Rosi y Rufino. En Happy Home Paradise se desbloquea para usar en diseños cuando se cumplan pedidos de Alderia, Azabache, Bayo, Charo, Eloísa, Gus, Orestes, Merina, Moe y Teddy.</p>
            </div>
        </section>
    </main>


    <?php
    require("views/footer.php");
    ?>

</body>

</html>