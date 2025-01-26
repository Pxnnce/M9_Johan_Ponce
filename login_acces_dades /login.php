<?php
session_start();

require("conn.php");

$usuario = $_POST['usuario_log'];
$contraseña = $_POST['contraseña'];

$sql = "SELECT * FROM Usuarios WHERE Nombre = '$usuario' AND Contraseña = '$contraseña'";
$query = mysqli_query($conn, $sql);


if ($query) {
    $num_filas = mysqli_num_rows($query);

    if ($num_filas > 0) {
        $_SESSION['usuario_login'] = $usuario;
        $_SESSION['logueado'] = true;
        header("Location: ./login_correcto.php");
    } else {
        session_destroy();
        header("Location: ./index.html");
    }
} else {
    echo "Error en la consulta: " . mysqli_error($conn);
}

mysqli_close($conn);
?>