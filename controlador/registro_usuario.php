<?php

include('../modelo/conexion.php');

if (isset($_POST['nombre_completo']) && isset($_POST['correo']) && isset($_POST['usuario']) && isset($_POST['contrasena'])) {
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    if (empty($nombre_completo) || empty($correo) || empty($usuario) || empty($contrasena)) {
        echo '<script>alert("Por favor, complete todos los campos"); window.location="../vista/login_usuarios.php"</script>';
        exit();
    }
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
              VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

    if (mysqli_num_rows($verificar_correo) > 0) {
        echo '<script>alert("Este correo ya existe, intente de nuevo"); window.location="../vista/login_usuarios.php"</script>';
        exit();
    }
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");

    if (mysqli_num_rows($verificar_usuario) > 0) {
        echo '<script>alert("Este usuario ya existe, intente de nuevo"); window.location="../vista/login_usuarios.php"</script>';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo '<script>alert("Usuario registrado exitosamente"); window.location="../vista/login_usuarios.php"</script>';
    } else {
        echo '<script>alert("Registro erróneo, intente de nuevo"); window.location="../vista/login_usuarios.php"</script>';
    }

    mysqli_close($conexion);
} else {
    echo '<script>alert("Por favor, complete el formulario de registro"); window.location="../vista/login_usuarios.php"</script>';
}
?>
