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
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
</head>
<body>
    <h1>Bienvenido a nuestra tienda</h1>
    <p>Has visitado esta página <?php echo $_SESSION['visitas']; ?> veces.</p>

    <?php if ($descuento > 0): ?>
        <p>¡Felicidades! Tienes un descuento del <?php echo $descuento; ?>% en tu próxima compra.</p>
    <?php endif; ?>

    <form action="" method="post">
        <label for="producto">Selecciona un producto:</label>
        <select name="producto" id="producto" required>
            <?php foreach ($productos as $nombre => $precio): ?>
                <option value="<?php echo $nombre; ?>"><?php echo $nombre . " - " . $precio . " €"; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" name="comprar" value="Comprar">
    </form>
</body>
</html>
