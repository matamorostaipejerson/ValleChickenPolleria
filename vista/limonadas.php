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
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive"
                        style="width: 60px; height: 70px;">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="usuario.php">Home</a>
                    </li>
                    <li>
                        <a href="categorias.php">categorias</a>
                    </li>
                    <li>
                        <a href="./reservarMesa.php">Reservar Mesa</a>
                    </li>
                    <li>
                        <a href="./login_usuarios.php">cerrar sesión</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <section class="food-search text-center">
        <div class="container">

            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>

    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Limonadas</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/limanda_americana.jpg" class="img-responsive img-curve"
                        style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Americana 1 lr.</h4>
                    <p class="food-price">s/.8.00</p>
                    <p class="food-detail">
                        Un delicioso refresco para disfrutar.
                    </p>
                    <br>

                    <a href="ordenar.php?nombre=Americana%201%20lr.&precio=8.00&imagen=limanda_americana.jpg" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/limonada_frozen.jpg" class="img-responsive img-curve"
                        style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Frozzen 1 lt.</h4>
                    <p class="food-price">s/.8.00</p>
                    <p class="food-detail">
                        Un delicioso refresco preparado con huevo y hielo para disfrutar.
                    </p>
                    <br>

                    <a href="ordenar.php?nombre=Frozzen%201%20lt.&precio=8.00&imagen=limonada_frozen.jpg" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/maracuya.jpg" class="img-responsive img-curve"
                        style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Marachuya 1 lt-</h4>
                    <p class="food-price">s/.8.00</p>
                    <p class="food-detail">
                        Un delicioso refresco hecho a base de fruta.
                    </p>
                    <br>
                    <br>

                    <a href="ordenar.php?nombre=Marachuya%201%20lt.&precio=8.00&imagen=maracuya.jpg" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/chicha_morada.jpg" class="img-responsive img-curve"
                        style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Chicha Morada 1 lt.</h4>
                    <p class="food-price">s/.8.00</p>
                    <p class="food-detail">
                        Un delicioso refresco hecho a base de maiz morada.
                    </p>
                    <br><br>

                    <a <a href="ordenar.php?nombre=Chicha%20Morada%201%20lt.&precio=8.00&imagen=chicha_morada.jpg" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

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