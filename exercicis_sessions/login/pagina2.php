<?php
session_start();
if (!isset($_SESSION['user'])) {
    // Si no hay sesión activa, redirigir a login
    header("Location: index.html");
    exit();
}

// Mostrar contenido de la segunda página
echo "<p>Hola, " . htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8') . ".</p>";
echo "<p>Esta es la segunda página de información.</p>";
echo '<p><a href="pagina1.php">Volver a la primera página</a></p>';
echo '<p><a href="logout.php">Cerrar sesión</a></p>';
?>
