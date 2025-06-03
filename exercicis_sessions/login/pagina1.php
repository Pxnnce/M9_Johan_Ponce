<?php
session_start();
if (!isset($_SESSION['user'])) {
    // Si no hay sesión activa, redirigir a login
    header("Location: index.html");
    exit();
}

// Mostrar contenido de la primera página
echo "<p>Hola, " . htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8') . ".</p>";
echo "<p>Esta es la primera página de información.</p>";
echo '<p><a href="pagina2.php">Ir a la segunda página de información</a></p>';
echo '<p><a href="logout.php">Cerrar sesión</a></p>';
?>
