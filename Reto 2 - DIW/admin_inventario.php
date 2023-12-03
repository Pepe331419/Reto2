<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/style.css">  
    <link rel="stylesheet" href="static/css/normalize.css">
    <title>Administración :: ACNH Tracker</title>
    <script src="static/js/admin.js"></script>
</head>

<body>
    <?php
    require("views/header_admin.php");
    ?>

    <dialog id="eliminateDialog">
        <form method="dialog">
            <p>¿Estás seguro que quieres eliminar el producto #1944 - Cómoda de madera?</p>
            <input type="submit" value="Eliminar">
            <input type="button" id="btnCancelElim" value="Cancelar">
        </form>
    </dialog>

    <dialog id="editDialog">
        <form method="dialog">
            <div>
                <label for="editID">ID: </label>
                <input id="editID" type="number" value="1944" disabled>
            </div>
            <div>
                <label for="editNombre">Nombre: </label>
                <input id="editNombre" type="text" value="Cómoda de madera">
            </div>
            <div>
                <label for="editDescripcion">Descripción: </label>
                <textarea id="editDescripcion" rows="5" cols="150">La cómoda de madera es un mueble personalizable, que forma parte de la serie de madera. Como armario permite al jugador cambiarse de ropa y personalizar los conjuntos que tengan almacenados en su varita. La superficie del mueble puede ser usado para depositar objetos más pequeños.</textarea>
            </div>
            <div>
                <fieldset>
                    <legend>Variantes</legend>
                    <label for="editVar1">Variante 1:</label>
                    <input id="editVar1" type="text" value="Madera clara">
                    <label for="editVar2">Variante 2:</label>
                    <input id="editVar2" type="text" value="Madera blanca">
                    <label for="editVar3">Variante 3:</label>
                    <input id="editVar3" type="text" value="Madera cerezo">
                    <label for="editVar4">Variante 4:</label>
                    <input id="editVar4" type="text" value="Madera oscura">
                    <label for="editVar5">Variante 5:</label>
                    <input id="editVar5" type="text" value="Madera negra">
                    <label for="editVar6">Variante 6:</label>
                    <input id="editVar6" type="text" value="Madera verde">
                    <label for="editVar7">Variante 7:</label>
                    <input id="editVar7" type="text" value="Madera azul">
                    <label for="editVar8">Variante 8:</label>
                    <input id="editVar8" type="text" value="Madera rosa">
                </fieldset>
            </div>
            <div>
                <label>Galería:</label>
                <div class="imgSelector">
                    <button class="deleteImg">X</button>
                    <button class="imgEditContainer"><img src="static/img/Comoda de madera - Madera clara.png" alt="Cómoda de madera - Madera clara"></button>
                </div>
                <div class="imgSelector">
                    <button class="deleteImg">X</button>
                    <button class="imgEditContainer"><img src="static/img/Comoda de madera - Madera blanca.png" alt="Cómoda de madera - Madera blanca"></button>
                </div>
                <div class="imgSelector">
                    <button class="deleteImg">X</button>
                    <button class="imgEditContainer"><img src="static/img/Comoda de madera - Madera cerezo.png" alt="Cómoda de madera - Madera cerezo"></button>
                </div>
                <div class="imgSelector">
                    <button class="deleteImg">X</button>
                    <button class="imgEditContainer"><img src="static/img/Comoda de madera - Madera oscura.png" alt="Cómoda de madera - Madera oscura"></button>
                </div>
                <div class="imgSelector">
                    <button class="deleteImg">X</button>
                    <button class="imgEditContainer"><img src="static/img/Comoda de madera - Madera negra.png" alt="Cómoda de madera - Madera negra"></button>
                </div>
                <div class="imgSelector">
                    <button class="deleteImg">X</button>
                    <button class="imgEditContainer"><img src="static/img/Comoda de madera - Madera verde.png" alt="Cómoda de madera - Madera verde"></button>
                </div>
                <div class="imgSelector">
                    <button class="deleteImg">X</button>
                    <button class="imgEditContainer"><img src="static/img/Comoda de madera - Madera azul.png" alt="Cómoda de madera - Madera azul"></button>
                </div>
                <div class="imgSelector">
                    <button class="deleteImg">X</button>
                    <button class="imgEditContainer"><img src="static/img/Comoda de madera - Madera rosa.png" alt="Cómoda de madera - Madera rosa"></button>
                </div>
                <div class="imgSelector">
                    <button class="newImgEdit">Nueva</button>
                </div>
            </div>
            <div>
                <label for="editPrecio">Precio: </label>
                <input id="editPrecio" type="number" value="2000">
            </div>
            <div>
                <label for="editStock">Stock: </label>
                <input id="editStock" type="number" value="120">
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
                <col class="id">
                <col class="nombre">
                <col class="descripcion">
                <col class="variantes">
                <col class="galeria">
                <col class="precio">
                <col class="stock">
                <col class="fecha">
                <col class="acciones">
            </colgroup>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Variantes</th>
                    <th>Galeria</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Fecha de creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <td class="center">1944</td>
                    <td>Cómoda de madera</td>
                    <td>La cómoda de madera es un mueble personalizable, que forma parte de la serie de madera. Como armario permite al jugador cambiarse de ropa y personalizar los conjuntos que tengan almacenados en su varita. La superficie del mueble puede ser usado para depositar objetos más pequeños.</td>
                    <td>
                        <ul>
                            <li>Madera clara</li>
                            <li>Madera blanca</li>
                            <li>Madera cerezo</li>
                            <li>Madera oscura</li>
                            <li>Madera negra</li>
                            <li>Madera verde</li>
                            <li>Madera azul</li>
                            <li>Madera rosa</li>
                        </ul>
                    </td>
                    <td>
                        <div class="centerContent">
                            <img src="static/img/Comoda de madera - Madera clara.png" alt="Cómoda de madera - Madera clara">
                            <img src="static/img/Comoda de madera - Madera blanca.png" alt="Cómoda de madera - Madera blanca">
                            <img src="static/img/Comoda de madera - Madera cerezo.png" alt="Cómoda de madera - Madera cerezo">
                            <img src="static/img/Comoda de madera - Madera oscura.png" alt="Cómoda de madera - Madera oscura">
                            <img src="static/img/Comoda de madera - Madera negra.png" alt="Cómoda de madera - Madera negra">
                            <img src="static/img/Comoda de madera - Madera verde.png" alt="Cómoda de madera - Madera verde">
                            <img src="static/img/Comoda de madera - Madera azul.png" alt="Cómoda de madera - Madera azul">
                            <img src="static/img/Comoda de madera - Madera rosa.png" alt="Cómoda de madera - Madera rosa">
                        </div>
                    </td>
                    <td class="center">2000</td>
                    <td class="center">120</td>
                    <td class="center">02/12/2023</td>
                    <td>
                        <div class="centerContent">
                            <button class="editar">Editar</button>
                            <button class="eliminar">Eliminar</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="center">1944</td>
                    <td>Cómoda de madera</td>
                    <td>La cómoda de madera es un mueble personalizable, que forma parte de la serie de madera. Como armario permite al jugador cambiarse de ropa y personalizar los conjuntos que tengan almacenados en su varita. La superficie del mueble puede ser usado para depositar objetos más pequeños.</td>
                    <td>
                        <ul>
                            <li>Madera clara</li>
                            <li>Madera blanca</li>
                            <li>Madera cerezo</li>
                            <li>Madera oscura</li>
                            <li>Madera negra</li>
                            <li>Madera verde</li>
                            <li>Madera azul</li>
                            <li>Madera rosa</li>
                        </ul>
                    </td>
                    <td>
                        <div class="centerContent">
                            <img src="static/img/Comoda de madera - Madera clara.png" alt="Cómoda de madera - Madera clara">
                            <img src="static/img/Comoda de madera - Madera blanca.png" alt="Cómoda de madera - Madera blanca">
                            <img src="static/img/Comoda de madera - Madera cerezo.png" alt="Cómoda de madera - Madera cerezo">
                            <img src="static/img/Comoda de madera - Madera oscura.png" alt="Cómoda de madera - Madera oscura">
                            <img src="static/img/Comoda de madera - Madera negra.png" alt="Cómoda de madera - Madera negra">
                            <img src="static/img/Comoda de madera - Madera verde.png" alt="Cómoda de madera - Madera verde">
                            <img src="static/img/Comoda de madera - Madera azul.png" alt="Cómoda de madera - Madera azul">
                            <img src="static/img/Comoda de madera - Madera rosa.png" alt="Cómoda de madera - Madera rosa">
                        </div>
                    </td>
                    <td class="center">2000</td>
                    <td class="center">120</td>
                    <td class="center">02/12/2023</td>
                    <td>
                        <div class="centerContent">
                            <button class="editar">Editar</button>
                            <button class="eliminar">Eliminar</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="center">1944</td>
                    <td>Cómoda de madera</td>
                    <td>La cómoda de madera es un mueble personalizable, que forma parte de la serie de madera. Como armario permite al jugador cambiarse de ropa y personalizar los conjuntos que tengan almacenados en su varita. La superficie del mueble puede ser usado para depositar objetos más pequeños.</td>
                    <td>
                        <ul>
                            <li>Madera clara</li>
                            <li>Madera blanca</li>
                            <li>Madera cerezo</li>
                            <li>Madera oscura</li>
                            <li>Madera negra</li>
                            <li>Madera verde</li>
                            <li>Madera azul</li>
                            <li>Madera rosa</li>
                        </ul>
                    </td>
                    <td>
                        <div class="centerContent">
                            <img src="static/img/Comoda de madera - Madera clara.png" alt="Cómoda de madera - Madera clara">
                            <img src="static/img/Comoda de madera - Madera blanca.png" alt="Cómoda de madera - Madera blanca">
                            <img src="static/img/Comoda de madera - Madera cerezo.png" alt="Cómoda de madera - Madera cerezo">
                            <img src="static/img/Comoda de madera - Madera oscura.png" alt="Cómoda de madera - Madera oscura">
                            <img src="static/img/Comoda de madera - Madera negra.png" alt="Cómoda de madera - Madera negra">
                            <img src="static/img/Comoda de madera - Madera verde.png" alt="Cómoda de madera - Madera verde">
                            <img src="static/img/Comoda de madera - Madera azul.png" alt="Cómoda de madera - Madera azul">
                            <img src="static/img/Comoda de madera - Madera rosa.png" alt="Cómoda de madera - Madera rosa">
                        </div>
                    </td>
                    <td class="center">2000</td>
                    <td class="center">120</td>
                    <td class="center">02/12/2023</td>
                    <td>
                        <div class="centerContent">
                            <button class="editar">Editar</button>
                            <button class="eliminar">Eliminar</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="center">1944</td>
                    <td>Cómoda de madera</td>
                    <td>La cómoda de madera es un mueble personalizable, que forma parte de la serie de madera. Como armario permite al jugador cambiarse de ropa y personalizar los conjuntos que tengan almacenados en su varita. La superficie del mueble puede ser usado para depositar objetos más pequeños.</td>
                    <td>
                        <ul>
                            <li>Madera clara</li>
                            <li>Madera blanca</li>
                            <li>Madera cerezo</li>
                            <li>Madera oscura</li>
                            <li>Madera negra</li>
                            <li>Madera verde</li>
                            <li>Madera azul</li>
                            <li>Madera rosa</li>
                        </ul>
                    </td>
                    <td>
                        <div class="centerContent">
                            <img src="static/img/Comoda de madera - Madera clara.png" alt="Cómoda de madera - Madera clara">
                            <img src="static/img/Comoda de madera - Madera blanca.png" alt="Cómoda de madera - Madera blanca">
                            <img src="static/img/Comoda de madera - Madera cerezo.png" alt="Cómoda de madera - Madera cerezo">
                            <img src="static/img/Comoda de madera - Madera oscura.png" alt="Cómoda de madera - Madera oscura">
                            <img src="static/img/Comoda de madera - Madera negra.png" alt="Cómoda de madera - Madera negra">
                            <img src="static/img/Comoda de madera - Madera verde.png" alt="Cómoda de madera - Madera verde">
                            <img src="static/img/Comoda de madera - Madera azul.png" alt="Cómoda de madera - Madera azul">
                            <img src="static/img/Comoda de madera - Madera rosa.png" alt="Cómoda de madera - Madera rosa">
                        </div>
                    </td>
                    <td class="center">2000</td>
                    <td class="center">120</td>
                    <td class="center">02/12/2023</td>
                    <td>
                        <div class="centerContent">
                            <button class="editar">Editar</button>
                            <button class="eliminar">Eliminar</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="center">1944</td>
                    <td>Cómoda de madera</td>
                    <td>La cómoda de madera es un mueble personalizable, que forma parte de la serie de madera. Como armario permite al jugador cambiarse de ropa y personalizar los conjuntos que tengan almacenados en su varita. La superficie del mueble puede ser usado para depositar objetos más pequeños.</td>
                    <td>
                        <ul>
                            <li>Madera clara</li>
                            <li>Madera blanca</li>
                            <li>Madera cerezo</li>
                            <li>Madera oscura</li>
                            <li>Madera negra</li>
                            <li>Madera verde</li>
                            <li>Madera azul</li>
                            <li>Madera rosa</li>
                        </ul>
                    </td>
                    <td>
                        <div class="centerContent">
                            <img src="static/img/Comoda de madera - Madera clara.png" alt="Cómoda de madera - Madera clara">
                            <img src="static/img/Comoda de madera - Madera blanca.png" alt="Cómoda de madera - Madera blanca">
                            <img src="static/img/Comoda de madera - Madera cerezo.png" alt="Cómoda de madera - Madera cerezo">
                            <img src="static/img/Comoda de madera - Madera oscura.png" alt="Cómoda de madera - Madera oscura">
                            <img src="static/img/Comoda de madera - Madera negra.png" alt="Cómoda de madera - Madera negra">
                            <img src="static/img/Comoda de madera - Madera verde.png" alt="Cómoda de madera - Madera verde">
                            <img src="static/img/Comoda de madera - Madera azul.png" alt="Cómoda de madera - Madera azul">
                            <img src="static/img/Comoda de madera - Madera rosa.png" alt="Cómoda de madera - Madera rosa">
                        </div>
                    </td>
                    <td class="center">2000</td>
                    <td class="center">120</td>
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