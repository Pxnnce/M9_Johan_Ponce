<!DOCTYPE html>
<?php
session_start();
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesando Login</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Usuario    = trim($_POST["user"]   ?? '');
    $Contraseña = trim($_POST["pass"]   ?? '');
    $_SESSION["Usuario"]    = $Usuario;
    $_SESSION["contraseña"] = $Contraseña;

    
    if ($Usuario === $Contraseña && $Usuario !== '') {
        // Mostrar credenciales 
        echo "<p>Usuario: " . htmlspecialchars($_SESSION['Usuario'], ENT_QUOTES, 'UTF-8') . "</p>";
        echo "<p>Contraseña: " . htmlspecialchars($_SESSION['contraseña'], ENT_QUOTES, 'UTF-8') . "</p>";
        // Botón para cerrar sesión
        echo '<button onclick="location.href=\'logout_ampl.php\'">Cerrar sesión</button><br><br>';
        // Enlace a la primera página protegida
        echo '<a href="pagina1_ampl.php">Ir a la Página 1</a>';
    } else {
        // Si no coincide, redirigimos a info_ampl.html
        header('Location: info_ampl.html');
        exit();
    }
} else {
    // Si no viene por POST, volver al formulario
    header('Location: index.html');
    exit();
}
?>
</body>
</html>
