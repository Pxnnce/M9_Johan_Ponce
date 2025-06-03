<?php
session_start();
if (!isset($_SESSION['Usuario'])) {
    // Si no hay sesión, redirigir
    header("Location: index.html");
    exit();
}

// Mostrar contenido de la página 1 (ampliada)
echo "<p>Hola, " . htmlspecialchars($_SESSION['Usuario'], ENT_QUOTES, 'UTF-8') . ".</p>";
echo "<p>Esta es la Página 1 (versión ampliada).</p>";
echo '<p><a href="pagina2_ampl.php">Ir a la Página 2</a></p>';
echo '<p><a href="logout_ampl.php">Cerrar sesión</a></p>';
?>
