<?php
session_start(); // Iniciar sesión

// Destruir la sesión
session_unset(); // Eliminar todas las variables de sesión
session_destroy(); // Destruir la sesión

// Redirigir al usuario a la página de inicio
header("Location: index.html");
exit();
?>