<?php
session_start();
if (isset($_SESSION['logueado']) && $_SESSION['logueado'] === true) {
    echo "¡Bienvenido, " . $_SESSION['usuario_login'] . "!";
    echo "<br><a href='logout.php'>Cerrar Sesión</a>";

} else {
    header("Location: ./index.html");
    exit();
}
?>
    