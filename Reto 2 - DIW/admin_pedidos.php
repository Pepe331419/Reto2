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

    <main class="adminMain">
        <table class="adminTable">
            <colgroup>
                <col class="numPedido">
                <col class="productos">
                <col class="importe">
                <col class="estadoPago">
                <col class="estadoEnvio">
                <col class="usuario">
                <col class="fecha">
            </colgroup>
            <thead>
                <tr>
                    <th colspan="7">Pedidos activos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Num. pedido</th>
                    <th>Productos</th>
                    <th>Importe total</th>
                    <th>Estado pago</th>
                    <th>Estado envío</th>
                    <th>Usuario</th>
                    <th>Fecha pedido</th>
                </tr>
                <tr>
                    <td class="center" rowspan="5">0056</td>
                    <td>#0001 - Mesa de madera x1</td>
                    <td class="center" rowspan="5">64000</td>
                    <td rowspan="5">Pagado</td>
                    <td rowspan="5">En camino</td>
                    <td rowspan="5">AntonioLorem</td>
                    <td class="center" rowspan="5">03/12/2023</td>
                </tr>
                <tr>
                    <td>#0002 - Silla de madera x4</td>
                </tr>
                <tr>
                    <td>#0004 - Escritorio de madera x1</td>
                </tr>
                <tr>
                    <td>#0020 - Sillón reclinable</td>
                </tr>
                <tr>
                    <td>#0025 - Lámpara de oficina</td>
                </tr>
                <tr>
                    <td class="center" rowspan="5">0056</td>
                    <td>#0001 - Mesa de madera x1</td>
                    <td class="center" rowspan="5">64000</td>
                    <td rowspan="5">Pagado</td>
                    <td rowspan="5">En camino</td>
                    <td rowspan="5">AntonioLorem</td>
                    <td class="center" rowspan="5">03/12/2023</td>
                </tr>
                <tr>
                    <td>#0002 - Silla de madera x4</td>
                </tr>
                <tr>
                    <td>#0004 - Escritorio de madera x1</td>
                </tr>
                <tr>
                    <td>#0020 - Sillón reclinable</td>
                </tr>
                <tr>
                    <td>#0025 - Lámpara de oficina</td>
                </tr>
                <tr>
                    <td class="center" rowspan="5">0056</td>
                    <td>#0001 - Mesa de madera x1</td>
                    <td class="center" rowspan="5">64000</td>
                    <td rowspan="5">Pagado</td>
                    <td rowspan="5">En camino</td>
                    <td rowspan="5">AntonioLorem</td>
                    <td class="center" rowspan="5">03/12/2023</td>
                </tr>
                <tr>
                    <td>#0002 - Silla de madera x4</td>
                </tr>
                <tr>
                    <td>#0004 - Escritorio de madera x1</td>
                </tr>
                <tr>
                    <td>#0020 - Sillón reclinable</td>
                </tr>
                <tr>
                    <td>#0025 - Lámpara de oficina</td>
                </tr>
                <tr>
                    <td class="center" rowspan="5">0056</td>
                    <td>#0001 - Mesa de madera x1</td>
                    <td class="center" rowspan="5">64000</td>
                    <td rowspan="5">Pagado</td>
                    <td rowspan="5">En camino</td>
                    <td rowspan="5">AntonioLorem</td>
                    <td class="center" rowspan="5">03/12/2023</td>
                </tr>
                <tr>
                    <td>#0002 - Silla de madera x4</td>
                </tr>
                <tr>
                    <td>#0004 - Escritorio de madera x1</td>
                </tr>
                <tr>
                    <td>#0020 - Sillón reclinable</td>
                </tr>
                <tr>
                    <td>#0025 - Lámpara de oficina</td>
                </tr>
                <tr>
                    <td class="center" rowspan="5">0056</td>
                    <td>#0001 - Mesa de madera x1</td>
                    <td class="center" rowspan="5">64000</td>
                    <td rowspan="5">Pagado</td>
                    <td rowspan="5">En camino</td>
                    <td rowspan="5">AntonioLorem</td>
                    <td class="center" rowspan="5">03/12/2023</td>
                </tr>
                <tr>
                    <td>#0002 - Silla de madera x4</td>
                </tr>
                <tr>
                    <td>#0004 - Escritorio de madera x1</td>
                </tr>
                <tr>
                    <td>#0020 - Sillón reclinable</td>
                </tr>
                <tr>
                    <td>#0025 - Lámpara de oficina</td>
                </tr>
                <tr>
                    <td class="center" rowspan="5">0056</td>
                    <td>#0001 - Mesa de madera x1</td>
                    <td class="center" rowspan="5">64000</td>
                    <td rowspan="5">Pagado</td>
                    <td rowspan="5">En camino</td>
                    <td rowspan="5">AntonioLorem</td>
                    <td class="center" rowspan="5">03/12/2023</td>
                </tr>
                <tr>
                    <td>#0002 - Silla de madera x4</td>
                </tr>
                <tr>
                    <td>#0004 - Escritorio de madera x1</td>
                </tr>
                <tr>
                    <td>#0020 - Sillón reclinable</td>
                </tr>
                <tr>
                    <td>#0025 - Lámpara de oficina</td>
                </tr>
            </tbody>
        </table>

        <table class="adminTable">
            <colgroup>
                <col class="numPedido">
                <col class="productos">
                <col class="importe">
                <col class="estadoPago">
                <col class="estadoEnvio">
                <col class="usuario">
                <col class="fecha">
            </colgroup>
            <thead>
                <tr>
                    <th colspan="7">Pedidos finalizados</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Num. pedido</th>
                    <th>Productos</th>
                    <th>Importe total</th>
                    <th>Estado pago</th>
                    <th>Estado envío</th>
                    <th>Usuario</th>
                    <th>Fecha pedido</th>
                </tr>
                <tr>
                    <td class="center" rowspan="5">0056</td>
                    <td>#0001 - Mesa de madera x1</td>
                    <td class="center" rowspan="5">64000</td>
                    <td rowspan="5">Pagado</td>
                    <td rowspan="5">Entregado</td>
                    <td rowspan="5">AntonioLorem</td>
                    <td class="center" rowspan="5">03/12/2023</td>
                </tr>
                <tr>
                    <td>#0002 - Silla de madera x4</td>
                </tr>
                <tr>
                    <td>#0004 - Escritorio de madera x1</td>
                </tr>
                <tr>
                    <td>#0020 - Sillón reclinable</td>
                </tr>
                <tr>
                    <td>#0025 - Lámpara de oficina</td>
                </tr>
                <tr>
                    <td class="center" rowspan="5">0056</td>
                    <td>#0001 - Mesa de madera x1</td>
                    <td class="center" rowspan="5">64000</td>
                    <td rowspan="5">Pagado</td>
                    <td rowspan="5">Cancelado</td>
                    <td rowspan="5">AntonioLorem</td>
                    <td class="center" rowspan="5">03/12/2023</td>
                </tr>
                <tr>
                    <td>#0002 - Silla de madera x4</td>
                </tr>
                <tr>
                    <td>#0004 - Escritorio de madera x1</td>
                </tr>
                <tr>
                    <td>#0020 - Sillón reclinable</td>
                </tr>
                <tr>
                    <td>#0025 - Lámpara de oficina</td>
                </tr>
                <tr>
                    <td class="center" rowspan="5">0056</td>
                    <td>#0001 - Mesa de madera x1</td>
                    <td class="center" rowspan="5">64000</td>
                    <td rowspan="5">Pagado</td>
                    <td rowspan="5">Entregado</td>
                    <td rowspan="5">AntonioLorem</td>
                    <td class="center" rowspan="5">03/12/2023</td>
                </tr>
                <tr>
                    <td>#0002 - Silla de madera x4</td>
                </tr>
                <tr>
                    <td>#0004 - Escritorio de madera x1</td>
                </tr>
                <tr>
                    <td>#0020 - Sillón reclinable</td>
                </tr>
                <tr>
                    <td>#0025 - Lámpara de oficina</td>
                </tr>
                <tr>
                    <td class="center" rowspan="5">0056</td>
                    <td>#0001 - Mesa de madera x1</td>
                    <td class="center" rowspan="5">64000</td>
                    <td rowspan="5">Pagado</td>
                    <td rowspan="5">Entregado</td>
                    <td rowspan="5">AntonioLorem</td>
                    <td class="center" rowspan="5">03/12/2023</td>
                </tr>
                <tr>
                    <td>#0002 - Silla de madera x4</td>
                </tr>
                <tr>
                    <td>#0004 - Escritorio de madera x1</td>
                </tr>
                <tr>
                    <td>#0020 - Sillón reclinable</td>
                </tr>
                <tr>
                    <td>#0025 - Lámpara de oficina</td>
                </tr>
                <tr>
                    <td class="center" rowspan="5">0056</td>
                    <td>#0001 - Mesa de madera x1</td>
                    <td class="center" rowspan="5">64000</td>
                    <td rowspan="5">Pagado</td>
                    <td rowspan="5">Entregado</td>
                    <td rowspan="5">AntonioLorem</td>
                    <td class="center" rowspan="5">03/12/2023</td>
                </tr>
                <tr>
                    <td>#0002 - Silla de madera x4</td>
                </tr>
                <tr>
                    <td>#0004 - Escritorio de madera x1</td>
                </tr>
                <tr>
                    <td>#0020 - Sillón reclinable</td>
                </tr>
                <tr>
                    <td>#0025 - Lámpara de oficina</td>
                </tr>
                <tr>
                    <td class="center" rowspan="5">0056</td>
                    <td>#0001 - Mesa de madera x1</td>
                    <td class="center" rowspan="5">64000</td>
                    <td rowspan="5">Pagado</td>
                    <td rowspan="5">Entregado</td>
                    <td rowspan="5">AntonioLorem</td>
                    <td class="center" rowspan="5">03/12/2023</td>
                </tr>
                <tr>
                    <td>#0002 - Silla de madera x4</td>
                </tr>
                <tr>
                    <td>#0004 - Escritorio de madera x1</td>
                </tr>
                <tr>
                    <td>#0020 - Sillón reclinable</td>
                </tr>
                <tr>
                    <td>#0025 - Lámpara de oficina</td>
                </tr>
            </tbody>
        </table>
    </main>

    <?php
    require("views/footer.php");
    ?>
</body>

</html>