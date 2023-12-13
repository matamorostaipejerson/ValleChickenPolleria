<?php

require('../modelo/conexion.php');
session_start();

if (isset($_POST['submit'])) {
    $nombreComida = $_POST['nombre'];
    $precioComida = $_POST['precio'];
    $cantidad = $_POST['food_quantity'];
    $nombreCliente = $_POST['full_name'];
    $telefono = $_POST['contact_number'];
    $email = $_POST['email'];
    $fechaPedido = $_POST['fecha_pedido'];
    $direccionEntrega = $_POST['delivery_address'];
    $id_usuario=$_SESSION['id_usuario'];
    

    if (isset($_GET['nombre']) && isset($_GET['precio'])) {
        $nombreComida = $_GET['nombre'];
        $precioComida = $_GET['precio'];}    
    $consulta = "INSERT INTO pedidos (nombre_comida, precio_comida, cantidad, nombre_cliente, telefono, email, fecha_pedido, direccion_entrega, id_usuario) 
    VALUES ('$nombreComida', '$precioComida', '$cantidad', '$nombreCliente', '$telefono', '$email', '$fechaPedido', '$direccionEntrega', '$id_usuario')";


    if (mysqli_query($conexion, $consulta)) {

        echo '<script>alert("¡Pedido realizado con éxito!"); window.location="../vista/ordenar.php"</script>';
    } else {

        echo "Error al procesar el pedido: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>
