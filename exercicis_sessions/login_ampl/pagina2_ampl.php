<?php
session_start();
if (!isset($_SESSION['Usuario'])) {
    header("Location: index.html");
    exit();
}

echo "<p>Hola, " . htmlspecialchars($_SESSION['Usuario'], ENT_QUOTES, 'UTF-8') . ".</p>";
echo "<p>Esta es la Página 2 (versión ampliada).</p>";
echo '<p><a href="pagina1_ampl.php">Volver a la Página 1</a></p>';
echo '<p><a href="logout_ampl.php">Cerrar sesión</a></p>';
?>
