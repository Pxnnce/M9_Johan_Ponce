<?php
session_start();
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0; 
}

$_SESSION['contador']++;

if ($_SESSION['contador'] == 5) {
    $descuento = 20;
} elseif ($_SESSION['contador'] >= 10) {
    $descuento = 50; 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comptador de Visites</title>
</head>
<body>

<h1>Benvingut a la nostra botiga!</h1>
<p>Visites a la pàgina: <?php echo $_SESSION['contador']; ?></p>

<?php if ($descuento > 0): ?>
    <p class="descuento">Felicidades! Tens un descompte del <?php echo $descuento; ?>% a la teva compra!</p>
<?php endif; ?>

<form id="formCompra" action="compras.php" method="post">
    <label for="preu">Preu del producte:</label>
    <input type="number" id="preu" name="preu" min="0" required>
    <br><br>
    
    <button type="submit">Comprar</button>
</form>

</body>
</html>
