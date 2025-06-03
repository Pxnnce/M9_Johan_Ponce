<?php
session_start();

// Conectar a la base de datos de Johan
$conn = mysqli_connect("localhost", "johan1", "1234", "Johan_Ponce_iticdesk");

// Definimos las variables que vienen del formulario
$user = $_POST['user_log'];
$password = $_POST['pswd'];

// Comprobar si hay error en la conexión
if (!$conn) {
    echo "No se ha podido conectar a la BBDD: " . mysqli_connect_error();
    exit();
}

// Buscar en la tabla Usuarios (Johan) si el email y contraseña coinciden
$sql = "SELECT * FROM `Usuarios` WHERE `Mail` = '$user' AND `Contraseña` = '$password'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) === 1) {
    // Si existe exactamente un usuario, obtenemos sus datos
    $row = mysqli_fetch_assoc($result);

    // Guardar en sesión los datos que Joel esperaba
    // En Joel se llamaba $_SESSION['user_login'], $_SESSION['id_user'], $_SESSION['rol'], $_SESSION['log']
    $_SESSION['user_login'] = $row['Nombre'] . " " . $row['Apellido']; // mostramos nombre + apellido
    $_SESSION['id_user']    = $row['DNI'];     // identificador del usuario
    $_SESSION['rol']        = $row['Rol'];     // el rol (Profesor / Administrador, etc.)
    $_SESSION['log']        = true;            // marca de “ya está logueado”

    // Redirigir a la página de acceso (Joel hacía: header('Location: ./acces.php'); )
    header('Location: acces.php');
    exit();
} else {
    // Si no encontró registro o contraseña incorrecta, volver al index
    header('Location: index.html');
    exit();
}
?>