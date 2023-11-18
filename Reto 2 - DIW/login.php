<!DOCTYPE html>
<html lang="es">

<?php
$titulo = "Iniciar sesión :: ACNH Tracker";
$linkJS = "login";
require("views/head.php");
?>

<body>
    <?php
    require("views/header.php");
    ?>

    <main class="login">
        <section class="boxed">
            <h2>Inicia sesión para disfrutar de todas las ventajas de un usuario registrado</h2>
            <div class="login">
                <div class="column">
                    <h3>¿Nuevo usuario?<br>Regístrate</h3>
                    <form action="#" id="signUp">
                        <label for="signUpUser">Nombre de usuario:</label>
                        <input type="text" name="user" id="signUpUser" required>
                        <label for="signUpPassword">Contraseña:</label>
                        <input type="password" name="password" id="signUpPassword" required>
                        <label for="signUpMail">Correo:</label>
                        <input type="mail" name="mail" id="signUpMail" required>
                        <div>
                            <input type="checkbox" name="tos" id="signUpTOS" required>
                            <label for="signUpTOS">He leido y acepto los términos y condiciones de la página</label>
                        </div>
                        <div>
                            <input type="checkbox" name="tos" id="signUpNotifications">
                            <label for="signUpNotifications">Quiero recibir notificaciones de mi actividad vía mail</label>
                        </div>
                        <input type="submit" value="Registrarse">
                    </form>
                </div>
                <div class="column">
                    <h3>¿Ya tienes cuenta?<br>Inicia sesión</h3>
                    <form action="mi_cuenta.php" id="signIn">
                        <label for="signInUser">Nombre de usuario:</label>
                        <input type="text" name="user" id="signInUser" required>
                        <label for="signInPassword">Contraseña:</label>
                        <input type="password" name="password" id="signInPassword" required>
                        <div>
                            <input type="checkbox" name="keepLogIn" id="signInKeepLogIn">
                            <label for="signInKeepLogIn">Mantener sesión iniciada</label>
                        </div>
                        <input type="submit" value="Acceder">
                        <button id="btnForgotPassword" type="" form="">Olvidé mi contraseña</button>
                    </form>
                    <div id="recoverPassword" class="hidden">
                        <h3>Recuperar contraseña:</h3>
                        <form action="#">
                            <label for="recoverMail">Correo de la cuenta:</label>
                            <input type="mail" name="mail" id="recoverMail" required>
                            <input type="submit" value="Enviar">
                        </form>
                    </div>

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