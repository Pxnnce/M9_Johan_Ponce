<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de Visitas</title>
</head>
<body>
    <h1>Bienvenido a nuestra tienda</h1>
    <p>Has visitado esta página <?php echo $_SESSION['visitas']; ?> veces.</p>

    <?php if ($descuento > 0): ?>
        <p>¡Felicidades! Tienes un descuento del <?php echo $descuento; ?>% en tu próxima compra.</p>
    <?php endif; ?>

    <form action="comptador.php" method="post">
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
