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
                        <a href="#">Comida</a>
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
            <h2 class="text-center">Gaseosas</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/incaKola.png" class="img-responsive img-curve"
                        style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4> Inca Kola 1 lt.</h4>
                    <p class="food-price">s/.5.00</p>
                    <p class="food-detail">
                        delicioso con un sabor a chicle profundo.
                    </p>
                    <br>

                    <a href="ordenar.php?nombre=Inca%20Kola%201%20lt.&precio=5.00&imagen=incaKola.png" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/incaKola.png" class="img-responsive img-curve"
                        style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Inca Kola 1 ½  lt</h4>
                    <p class="food-price">s/.8.00</p>
                    <p class="food-detail">
                        delicioso con un sabor a chicle profundo.
                    </p>
                    <br>

                    <a href="ordenar.php?nombre=Inca%20Kola%201%201/2%20lt&precio=8.00&imagen=incaKola.png" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/cocaCola.jpg" class="img-responsive img-curve"
                        style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Coca Cola 1 lt.</h4>
                    <p class="food-price">s/. 5.00</p>
                    <p class="food-detail">
                        Gaseosa carbonatada, muy delicio digo de probar.
                    </p>
                    <br>
                    <br>

                    <a href="ordenar.php?nombre=Coca%20Cola%201%20lt.&precio=5.00&imagen=cocaCola.jpg" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/cocaCola.jpg" class="img-responsive img-curve"
                        style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Coca Cola 1 ½ </h4>
                    <p class="food-price">s/.8.00</p>
                    <p class="food-detail">
                        Gaseosa carbonatada, muy delicio digo de probar.
                    </p>
                    <br><br>

                    <a href="ordenar.php?nombre=Coca%20Cola%201%201/2%20lt&precio=8.00&imagen=cocaCola.jpg" class="btn btn-primary">Ordenar</a>
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