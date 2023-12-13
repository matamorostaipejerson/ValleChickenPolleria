
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
            <h2 class="text-center">Platos Orientales</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/chaufa.jpg" class="img-responsive img-curve" style="width: 100px; height: 100px;">
                </div>
                <div class="food-menu-desc">
                    <h4>Arroz chaufa de pollo</h4>
                    <p class="food-price">s/.10.00</p>
                    <p class="food-detail">
                        Nuestro plato viene acompañado con cremas al gusto y un buen sazón.
                    </p>
                    <br>
                    <a href="ordenar.php?nombre=Arroz%20chaufa%20de%20pollo&precio=10.00&imagen=chaufa.jpg" class="btn btn-primary">Ordenar</a>
                </div>
            </div>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/res_img_3.jpg" class="img-responsive img-curve" style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Lomo Saltado</h4>
                    <p class="food-price">s/.13.00</p>
                    <p class="food-detail">
                        Nuestro plato viene acompañado con papas + arroz + lomo y cremas.
                    </p>
                    <br>
                    <a href="ordenar.php?nombre=Lomo%20Saltado&precio=13.00&imagen=res_img_3.jpg" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/Aeropuerto.jpg" class="img-responsive img-curve" style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Aeropuerto</h4>
                    <p class="food-price">s/. 13.00</p>
                    <p class="food-detail">
                        Nuestro plato viene acompañado con cremas al gusto y un buen sazón.
                    </p>
                    <br>
                    <br>

                    <a href="ordenar.php?nombre=Aeropuerto&precio=13.00&imagen=Aeropuerto.jpg" class="btn btn-primary">Ordenar</a>
                </div>
            </div>


            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/tallarin_saltado.jpg" class="img-responsive img-curve" style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Tallarín saltado</h4>
                    <p class="food-price">s/.13.00</p>
                    <p class="food-detail">
                        Nuestro plato viene acompañado con ricas cremas que le dan un buen gusto.
                    </p>
                    <br>

                    <a href="ordenar.php?nombre=Tallarín%20saltado&precio=13.00&imagen=tallarin_saltado.jpg" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/arroz_salvaje.png" class="img-responsive img-curve" style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Arroz salvaje</h4>
                    <p class="food-price">s/.13.00</p>
                    <p class="food-detail">
                        Nuestro plato viene acompañado con cremas al gusto y un buen sazón.
                    </p><br>

                    <a href="ordenar.php?nombre=Arroz%20salvaje&precio=13.00&imagen=arroz_salvaje.png" class="btn btn-primary">Ordenar</a>
                </div>
                <br>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/combinado.jpg" class="img-responsive img-curve" style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Combinado</h4>
                    <p class="food-price">s/.13.00</p>
                    <p class="food-detail">
                        Nuestro plato viene acompañado un rico mostrito  + ensalada y lomo.
                    </p>
                    <br>

                    <a href="ordenar.php?nombre=Combinado&precio=13.00&imagen=combinado.jpg" class="btn btn-primary">Ordenar</a>
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