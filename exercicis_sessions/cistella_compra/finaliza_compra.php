<?php
session_start();

// Definir precios
$pan_precio  = 1.00;
$agua_precio = 0.50;

// Si no hay cesta, redirigir al índice
if (!isset($_SESSION['cesta'])) {
    header("Location: index.html");
    exit();
}

// Obtener cantidades
$cant_pan  = $_SESSION['cesta']['pan'];
$cant_agua = $_SESSION['cesta']['agua'];

// Calcular totales parciales y total general
$total_pan  = $cant_pan  * $pan_precio;
$total_agua = $cant_agua * $agua_precio;
$total      = $total_pan + $total_agua;

// Mostrar resumen de la compra
echo "<h1>Resumen de la compra</h1>";
echo "<p>Pan: {$cant_pan} unidades → " . number_format($total_pan, 2)  . " €</p>";
echo "<p>Agua: {$cant_agua} unidades → " . number_format($total_agua, 2) . " €</p>";
echo "<p><strong>Total: " . number_format($total, 2) . " €</strong></p>";

// Botón para confirmar y vaciar la cesta
echo '<form action="" method="POST">
        <button type="submit" name="confirmar">Confirmar compra</button>
      </form>';

if (isset($_POST['confirmar'])) {
    unset($_SESSION['cesta']);
    echo "<p>Compra confirmada! La cesta se ha vaciado.</p>";
    echo "<a href='index.html'>Vuelve a la botiga</a>";
}
?>
