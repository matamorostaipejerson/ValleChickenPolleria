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
            <h2 class="text-center">Bebidas</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/vino_1.jpg" class="img-responsive img-curve"
                        style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Vino Gran Amado Blend</h4>
                    <p class="food-price">s/.30.00</p>
                    <p class="food-detail">
                        Una delicia digna de  estar en tu mesa y combinar con tu comida.
                    </p>
                    <br>

                    <a href="ordenar.php?nombre=Vino%20Gran%20Amado%20Blend&precio=30.00&imagen=vino_1.jpg" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/cusqueña.jpg" class="img-responsive img-curve"
                        style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Cuzqueñaq Negra</h4>
                    <p class="food-price">s/.10.00</p>
                    <p class="food-detail">
                    Mezcla perfecta de malta tostada y caramelo.
                    </p>
                    <br>

                    <a href="ordenar.php?nombre=Cuzqueñaq%20Negra&precio=10.00&imagen=cusqueña.jpg" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/pilsen.jpg" class="img-responsive img-curve"
                        style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Pilsen</h4>
                    <p class="food-price">s/. 8.00</p>
                    <p class="food-detail">
                    frescas, doradas, ligeras, con buena carbonatación.
                    </p>
                    <br>
                    <br>

                    <a href="ordenar.php?nombre=Pilsen&precio=8.00&imagen=pilsen.jpg" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="./images/cristal.png" class="img-responsive img-curve"
                        style="width: 100px; height: 100px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Cistal</h4>
                    <p class="food-price">s/.8.00</p>
                    <p class="food-detail">
                    tradicional y artesanal que se elabora de forma natural.
                    </p>
                    <br><br>

                    <a href="ordenar.php?nombre=Cristal&precio=8.00&imagen=cristal.png" class="btn btn-primary">Ordenar</a>
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