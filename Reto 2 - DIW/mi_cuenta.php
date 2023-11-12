<!DOCTYPE html>
<html lang="es">

<?php
$titulo = "Mi cuenta :: ACNH Tracker";
require("views/head.php");
?>

<body>
    <?php
    require("views/header.php");
    ?>

    <main class="miCuenta">
        <section class="boxed">
            <h2>Pepe</h2>
            <h3>Modificar datos de cuenta</h3>
            <form action="#" method="post" id="modifyInfo">
                <fieldset>
                    <legend>Nuevos datos</legend>
                    <label for="modifyUsername">Usuario:</label>
                    <input type="text" name="newUsername" id="modifyUsername" value="Pepe331419">
                    <label for="modifyPassword">Contraseña:</label>
                    <input type="password" name="newPassword" id="modifyPassword" value="patata123">
                    <label for="modifyMail">Correo:</label>
                    <input type="mail" name="newMail" id="modifyMail" value="pepe331419@cesurformacion.com">
                </fieldset>
                <label for="currentPassword">Contraseña actual:</label>
                <input type="password" name="currentPassword" id="currentPassword">
                <input type="submit" value="Modificar datos">
            </form>
            <h3>Mis pedidos</h3>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Identificador</th>
                            <th>Objeto</th>
                            <th>Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th colspan="3">Pedido #00125628 - 12/10/2023<a href="#">Descargar PDF</a></th>
                        </tr>
                        <tr>
                            <td>0034</td>
                            <td>Cama antigua - Marrón</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>0081</td>
                            <td>Cesta de bambú - Verde</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>0131</td>
                            <td>Mesa de billar - Azul</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>0347</td>
                            <td>Mesa de té cosmopolita - Blanco</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>0420</td>
                            <td>Sillón de notario - Verde</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <th colspan="3">Pedido #00125748 - 23/10/2023<a href="">Descargar PDF</a></th>
                        </tr>
                        <tr>
                            <td>0021</td>
                            <td>Camiseta "annyegong"</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>0466</td>
                            <td>Camiseta bola 4</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>1017</td>
                            <td>Sudadera semiabierta - Coral</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <th colspan="3">Pedido #00125748 - 23/10/2023<a href="">Descargar PDF</a></th>
                        </tr>
                        <tr>
                            <td>0021</td>
                            <td>Camiseta "annyegong"</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>0466</td>
                            <td>Camiseta bola 4</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>1017</td>
                            <td>Sudadera semiabierta - Coral</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <th colspan="3">Pedido #00125748 - 23/10/2023<a href="">Descargar PDF</a></th>
                        </tr>
                        <tr>
                            <td>0021</td>
                            <td>Camiseta "annyegong"</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>0466</td>
                            <td>Camiseta bola 4</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>1017</td>
                            <td>Sudadera semiabierta - Coral</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <?php
    require("views/footer.php");
    ?>
</body>