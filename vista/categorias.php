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
            </div>
        </div>    
    </section>
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Nuestra variedad</h2>

            <a href="./orientales.php">
                <div class="box-3 float-container">
                    <center>
                        <h2>Orientales</h2>
                    </center>
                    <img src="./images/slide_2.jpg" class="img-responsive img-curve">
                </div>
            </a>

            <a href="./pollos_brasa.php">
                <div class="box-3 float-container">
                    <center>
                        <h2>Pollos a la brasa</h2>
                    </center>
                    <img src="./images/res_img_4.jpg" class="img-responsive img-curve">
                </div>
            </a>

            <a href="./parrillas.php">
                <div class="box-3 float-container">
                    <center>
                        <h2>Parrilladas</h2>
                    </center>
                    <img src="./images/res_img_8.jpg" class="img-responsive img-curve">
                </div>
            </a>
            <a href="./bebidas.php">
                <div class="box-3 float-container">
                    <center>
                        <h2>Bebidas</h2>
                    </center>
                    <img src="./images/vino_1.jpg" class="img-responsive img-curve">
                </div>
            </a>
            <a href="./limonadas.php">
                <div class="box-3 float-container">
                    <center>
                        <h2>Limonadas</h2>
                    </center>
                    <img src="./images/limonada_frozen.jpg" class="img-responsive img-curve">
                </div>
            </a>
            <a href="./gaseosas.php">
                <div class="box-3 float-container">
                    <center>
                        <h2>Gaseosas</h2>
                    </center>
                    <img src="./images/inka-coca-1Lts.jpg" class="img-responsive img-curve">
                </div>
            </a>
        </div>
    </section>
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="https://www.facebook.com/profile.php?id=100076432512314&mibextid=ZbWKwL"><img src="./images/facebook.png" style="width: 40px; height: 40px;"/></a>
                </li>
                <li>
                    <a href="https://instagram.com/polleria_parrilla?igshid=MTIzZWQxMDU="><img src="./images/instagram.png"style="width: 40px; height: 40px;" /></a>
                </li>
                <li>
                    <a href="https://wa.link/e3tuom"><img src="./images/whatsapp.png"style="width: 40px; height: 40px;" /></a>
                </li>
            </ul>
        </div>
    </section>

</body>

</html>