<?php
session_start();

// Iniciar la cesta si no existe
if (!isset($_SESSION['cesta'])) {
    $_SESSION['cesta'] = [
        'pan'  => 0,
        'agua' => 0
    ];
}

// Agregar los productos a la cesta
if (isset($_POST['agrega'])) {
    $_SESSION['cesta']['pan']  += intval($_POST['cantidad_pan']  ?? 0);
    $_SESSION['cesta']['agua'] += intval($_POST['cantidad_agua'] ?? 0);
}

// Mostrar contenido de la cesta
echo "<h1>Cesta de la compra</h1>";
echo "<p>Pan: {$_SESSION['cesta']['pan']} unidades</p>";
echo "<p>Agua: {$_SESSION['cesta']['agua']} unidades</p>";
echo "<a href='index.html'>Vuelve a la botiga</a>";
echo " | <a href='finaliza_compra.php'>Finalizar compra</a>";
?>
