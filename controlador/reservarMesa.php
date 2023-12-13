<?php

require('../modelo/conexion.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $cantidad_personas = $_POST['qty'];
    $nombre = $_POST['full-name'];
    $telefono = $_POST['contact_number'];
    $piso_deseado = $_POST['piso_deseado'];
    $mesa_reservada = $_POST['mesas_disponibles'];
    $fecha_reserva = $_POST['fecha_reserva']; 
    $email = $_POST['email'];
    $id_usuario = $_SESSION['id_usuario'];

    $sql = "INSERT INTO reservas (cantidad_personas, nombre, telefono, piso_deseado, mesa_reservada, fecha_reserva, email, id_usuario) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("issssssi", $cantidad_personas, $nombre, $telefono, $piso_deseado, $mesa_reservada, $fecha_reserva, $email, $id_usuario);
    
    if ($stmt->execute()) {
        echo '<script>alert("¡Reserva realizada con éxito!"); window.location="../vista/reservarMesa.php"</script>';
    } else {
        echo "Error al realizar la reserva: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
}
?>
