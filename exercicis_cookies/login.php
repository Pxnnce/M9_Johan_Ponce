<?php
session_start();
require('conn.php');
if (isset($_POST['usuario']) && isset($_POST['contrseña'])) {
    $usuario = $_POST['usuario_log'];
    $contraseña = $_POST['contraseña'];
   
}

if (!$conn){
    echo" No se ha podido conectar a la Base de Datos";
}

    $sql = "SELECT * FROM Usuarios WHERE `Mail = '$usuario' AND Contraseña = '$contraseña'";
$query = mysqli_query($conn, $sql);
header('Location: ./acces.php');

?>