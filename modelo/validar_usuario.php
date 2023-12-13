<?php
    session_start();
    include 'conexion.php';
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    $contrasena=hash('sha512',$contrasena);

    $validar_login=mysqli_query($conexion, "SELECT*FROM  usuarios WHERE correo='$correo'AND contrasena='$contrasena'");
    if(mysqli_num_rows($validar_login)>0){
        $fila = mysqli_fetch_assoc($validar_login);
        $id_usuario = $fila['id_usuario'];
        $_SESSION['id_usuario']=$id_usuario;
        $_SESSION['usuario']=$correo;
        header("location:../vista/usuario.php");

        exit;
    }else{
        echo'
        <script>
            alert("El usuario no existe, intente de nuevo");
            window.location="../vista/login_usuarios.php";
        </script>
        ';
        exit;
    }
?>