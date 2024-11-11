<?php
session_start();

if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 0;
}

$_SESSION['visitas']++;

$descuento = 0;

if ($_SESSION['visitas'] == 5) {
    $descuento = 20;
} elseif ($_SESSION['visitas'] == 10) {
    $descuento = 50;
}

$productos = [
    "Producto A" => 100,
    "Producto B" => 200,
    "Producto C" => 300,
];

$precioFinal = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['comprar'])) {
    $productoSeleccionado = $_POST['producto'];
    $precioOriginal = $productos[$productoSeleccionado];
    $precioFinal = $precioOriginal;

    if ($descuento > 0) {
        $precioFinal -= $precioFinal * ($descuento / 100);
    }

    echo "Gracias por tu compra del $productoSeleccionado. El precio original era de $precioOriginal €, y tu precio final con descuento es de " . number_format($precioFinal, 2) . " €.";
    $_SESSION['visitas'] = 0; // Reiniciar el contador de visitas
}
?>
