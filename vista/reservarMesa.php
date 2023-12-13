<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        echo '
            <script>
                alert("Por favor iniciar sesión");
                window.location="./login_usuarios.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALLE CHICKEN</title>
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/usuario.css">
</head>

<body>
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo" >
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive" style="width: 60px;height: 70px;">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="usuario.php">Home</a>
                    </li>
                    <li>
                        <a href="categorias.php">Categorias</a>
                    </li>
                    <li>
                        <a href="./reservarMesa.php">Reservar Mesa</a>
                    </li>
                    <li>
                        <a href="./cerrar_sesion.php">cerrar sesión</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <section class="food-search">
        <div class="container">
            <form action="../controlador/reservarMesa.php" class="order" method="POST" style="background-color: #ff8000;">
                <fieldset>
                    <legend>Reservar Tu Mesa</legend>
                    <div class="food-menu-desc">
                        <h3>VALLE CHICKEN</h3>
                        <div class="order-label">Cantidad de personas</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Detalles de la reserva</legend>
                    <div class="order-label">Nombre</div>
                    <input type="text" name="full-name" class="input-responsive" required>

                    <div class="order-label">Numero de Teléfono</div>
                    <input type="tel" name="contact_number" class="input-responsive" required>
                    
                    <div class="order-label">Email</div>
                    <input type="email" name="email" class="input-responsive" required>

                    <div class="order-label">Piso deseado</div>
                    <select class="input-responsive" required name="piso_deseado" id="piso_deseado">
                        <option value="piso1">Piso 1</option>
                        <option value="piso2">Piso 2</option>
                    </select> 

                    <div class="order-label">Mesas para reservar</div>
                    <select class="input-responsive" required name="mesas_disponibles" id="mesas_disponibles"></select>

                    <div class="order-label">Fecha de reserva</div>
                    <input type="date" name="fecha_reserva" class="input-responsive" required>
                    <input type="hidden" name="id_usuario"class="input-responsive" value=" <?php echo $_SESSION['id_usuario']  ?>"></input>

                    <input type="submit" name="submit" value="Confirmar Reserva" class="btn btn-primary" style="background-color: #e0c737; color: #000;">
                </fieldset>
                <br>
            </form>
            
        </div>
    </section>
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="https://www.facebook.com/profile.php?id=100076432512314&mibextid=ZbWKwL"><img src="./images/facebook.png" /></a>
                </li>
                <li>
                    <a href="https://instagram.com/polleria_parrilla?igshid=MTIzZWQxMDU="><img src="./images/instagram.png" /></a>
                </li>
                <li>
                    <a href="https://wa.link/e3tuom"><img src="./images/whatsapp.png" /></a>
                </li>
            </ul>
        </div>
    </section>
    <script src="./js/reservarMesa.js"></script>

</body>
</html>