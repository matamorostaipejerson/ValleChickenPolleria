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
    <title>VALLE-CHICKEN</title>
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
            <?php
            if (isset($_GET['nombre']) && isset($_GET['precio']) && isset($_GET['imagen'])) {
                $nombreComida = $_GET['nombre'];
                $precioComida = $_GET['precio'];
                $imagenComida = $_GET['imagen'];
            ?>
                <form action="../controlador/procesar_pedido.php" method="POST" class="order" style="background-color: #ff8000;">
                    <fieldset>
                        <legend>Seleccionar tu pedido</legend>

                        <div class="food-menu-img">
                            <img src="images/<?php echo $imagenComida; ?>" alt="<?php echo $nombreComida; ?>" class="img-responsive img-curve" style="width: 100px; height: 100px;">
                        </div>

                        <div class="food-menu-desc">
                            <h3><?php echo $nombreComida; ?></h3>
                            <p class="food-price">$<?php echo $precioComida; ?></p>

                            <div class="order-label">cantidad</div>
                            <input type="number" name="food_quantity" class="input-responsive" value="1" required>

                            <input type="hidden" name="food_id" value="1">
                        </div>
                            <input type="hidden" name="nombre" value="<?php echo $nombreComida; ?>">
                            <input type="hidden" name="precio" value="<?php echo $precioComida; ?>">

                    </fieldset>

                    <fieldset>
                        <legend>Detalles del Delivery</legend>
                        <div class="order-label">Nombre</div>
                        <input type="text" name="full_name" class="input-responsive" required>

                        <div class="order-label">Numero de Teléfono</div>
                        <input type="tel" name="contact_number" class="input-responsive" required>

                        <div class="order-label">Email</div>
                        <input type="email" name="email" class="input-responsive" required>

                        <div class="order-label">Fecha de pedido</div>
                        <input type="date" name="fecha_pedido"class="input-responsive" required></input>

                        <div class="order-label">Dirección</div>
                        <input type="text" name="delivery_address"class="input-responsive" required></input>

                        <input type="hidden" name="id_usuario"class="input-responsive" value=" <?php echo $_SESSION['id_usuario']  ?>"></input>

                        <input type="submit" name="submit" value="Confirmar orden" class="btn btn-primary" style="background-color: #e0c737; color: #000;">
                    </fieldset>
                    <br>
                </form>
            <?php
            }
            ?>
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

</body>
</html>