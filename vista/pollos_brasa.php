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
                        <a href="./cerrar_sesion.php">cerrar sesión</a>
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
            <h2 class="text-center">Pollos a  la Brasa</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/res_img_2.jpg" class="img-responsive img-curve"
                        style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4> ¼ de pollo</h4>
                    <p class="food-price">s/.11.00</p>
                    <p class="food-detail">
                        Nuestro plato viene acompañado con papas + ensalada y cremas.
                    </p>
                    <br>

                    <a href="ordenar.php?nombre=¼%20de%20pollo&precio=11.00&imagen=res_img_2.jpg" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/medio_pollo.jpg" class="img-responsive img-curve"
                        style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>1/2 de pollo</h4>
                    <p class="food-price">s/.22.00</p>
                    <p class="food-detail">
                        Nuestro plato viene acompañado con papas  + ensalada y cremas.
                    </p>
                    <br>

                    <a href="ordenar.php?nombre=1/2%20de%20pollo&precio=22.00&imagen=medio_pollo.jpg" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/octavo de pollo.jpg" class="img-responsive img-curve"
                        style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>1/8 de pollo</h4>
                    <p class="food-price">s/. 7.00</p>
                    <p class="food-detail">
                        Nuestro plato viene acompañado con papas + ensalada y cremas.
                    </p>
                    <br>

                    <a href="ordenar.php?nombre=1/8%20de%20pollo&precio=7.00&imagen=octavo_de_pollo.jpg" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/res_img_4.jpg" class="img-responsive img-curve"
                        style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Pollo entero</h4>
                    <p class="food-price">s/.44.00</p>
                    <p class="food-detail">
                        Nuestro plato viene acompañado con papas + ensalada y cremas.
                        <br>
                    </p>
                    <br>

                    <a href="ordenar.php?nombre=Pollo%20entero&precio=44.00&imagen=res_img_4.jpg" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/res_img_7.jpg" class="img-responsive img-curve"
                        style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Mostro</h4>
                    <p class="food-price">s/.13.00</p>
                    <p class="food-detail">
                        Nuestro plato viene acompañado un rico mostrito + papas + ensalada y cremas.
                    </p>
                    <br>

                    <a href="ordenar.php?nombre=Mostro&precio=13.00&imagen=res_img_7.jpg" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/mostrito.jpg" class="img-responsive img-curve"
                        style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Mostrito</h4>
                    <p class="food-price">s/.9.00</p>
                    <p class="food-detail">
                        Viene acompañado con ricas papas + mostrito + ensalada y cremas.
                    </p>
                    <br><br>
                    <a href="ordenar.php?nombre=Mostrito&precio=9.00&imagen=mostrito.jpg" class="btn btn-primary">Ordenar</a>
                </div>
                <br>
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