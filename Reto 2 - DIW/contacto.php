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

    <main class="contacto">
        <section class="boxed">
            <h2>Contacta con nosotros</h2>
            <p>Envíanos tu comentario o pregunta y te responderemos lo antes posible</p>
            <form action="#">
                <div>
                    <label for="contactName">Nombre: </label>
                    <input type="text" name="name" id="contactName" placeholder="Nombre con el que nos referimos a ti." required>
                </div>
                <div>
                    <label for="contactMail">Correo electrónico: </label>
                    <input type="email" name="mail" id="contactMail" placeholder="Te responderemos a este correo.">
                </div>
                <div>
                    <label for="contactMessage">Contenido: </label>
                    <textarea name="message" id="contactMessage" cols="90" rows="8" placeholder="Introduce tu mensaje aquí." required></textarea>
                </div>
                <input type="submit" value="Enviar">
            </form>
            <p>También puedes contactarno a través de los siguientes medios:</p>
            <address>
                <ul>
                    <li>Plaza Virgen Milagrosa, 11, 29017, Málaga</li>
                    <li><a href="tel:+34952000000">952000000</a></li>
                    <li>Horario de atención: 08:00 - 17:00</li>
                    <li><a href="mailto:ACNHTracker@gmail.com">ACNHTracker@gmail.com</a></li>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2261.4184148889462!2d-4.366617678192114!3d36.71947276943058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7259120bfc4db3%3A0xec0ecedd8dc61902!2sCesur%20M%C3%A1laga%20Este%20%F0%9F%A5%87%20-%20Formaci%C3%B3n%20Profesional!5e0!3m2!1ses!2ses!4v1699102954868!5m2!1ses!2ses" width="600" height="450" allowfullscreen="false" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </ul>
            </address>

        </section>
    </main>

    <?php
    require("views/footer.php");
    ?>
</body>