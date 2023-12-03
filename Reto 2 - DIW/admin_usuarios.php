<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/style.css">
    <title>Administración :: ACNH Tracker</title>
    <script src="static/js/admin.js"></script>
</head>

<body>
    <?php
    require("views/header_admin.php");
    ?>

    <dialog id="eliminateDialog">
        <form method="dialog">
            <p>¿Estás seguro que quieres eliminar el usuario Pablito1994?</p>
            <input type="submit" value="Eliminar">
            <input type="button" id="btnCancelElim" value="Cancelar">
        </form>
    </dialog>

    <dialog id="editDialog">
        <form method="dialog">
            <div>
                <label for="editName">Nombre: </label>
                <input id="editName" type="text" value="Pablito1994">
            </div>
            <div>
                <label for="editMail">Correo: </label>
                <input id="editMail" type="text" value="pablito1994@cesurformacion.com">
            </div>
            <div>
                <label for="editPassword">Contraseña: </label>
                <input type="password" id="editPassword" value="patatinpatatan">
            </div>
            <div>
                <input type="submit" value="Confirmar">
                <input type="button" id="btnCancelEdit" value="Cancelar">
            </div>
        </form>
    </dialog>

    <main class="adminMain">
        <table class="adminTable">
            <colgroup>
                <col class="nombre">
                <col class="mail">
                <col class="numPedidos">
                <col class="fecha">
                <col class="acciones">
            </colgroup>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Núm. pedidos</th>
                    <th>Fecha de alta</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Pablito1994</td>
                    <td>pablito1994@cesurformacion.com</td>
                    <td class="center">8</td>
                    <td class="center">02/12/2023</td>
                    <td>
                        <div class="centerContent">
                            <button class="editar">Editar</button>
                            <button class="eliminar">Eliminar</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Pablito1994</td>
                    <td>pablito1994@cesurformacion.com</td>
                    <td class="center">8</td>
                    <td class="center">02/12/2023</td>
                    <td>
                        <div class="centerContent">
                            <button class="editar">Editar</button>
                            <button class="eliminar">Eliminar</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Pablito1994</td>
                    <td>pablito1994@cesurformacion.com</td>
                    <td class="center">8</td>
                    <td class="center">02/12/2023</td>
                    <td>
                        <div class="centerContent">
                            <button class="editar">Editar</button>
                            <button class="eliminar">Eliminar</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Pablito1994</td>
                    <td>pablito1994@cesurformacion.com</td>
                    <td class="center">8</td>
                    <td class="center">02/12/2023</td>
                    <td>
                        <div class="centerContent">
                            <button class="editar">Editar</button>
                            <button class="eliminar">Eliminar</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Pablito1994</td>
                    <td>pablito1994@cesurformacion.com</td>
                    <td class="center">8</td>
                    <td class="center">02/12/2023</td>
                    <td>
                        <div class="centerContent">
                            <button class="editar">Editar</button>
                            <button class="eliminar">Eliminar</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Pablito1994</td>
                    <td>pablito1994@cesurformacion.com</td>
                    <td class="center">8</td>
                    <td class="center">02/12/2023</td>
                    <td>
                        <div class="centerContent">
                            <button class="editar">Editar</button>
                            <button class="eliminar">Eliminar</button>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </main>

    <?php
    require("views/footer.php");
    ?>
</body>

</html>