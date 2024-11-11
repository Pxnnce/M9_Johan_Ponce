<?php
session_start(); // Iniciar la sesión

// Obtener el precio del producto del formulario
$preu = $_POST['preu'] ?? 0;

// Inicializar el descuento
$descuento = 0;

// Verificar si el usuario tiene derecho a un descuento
if ($_SESSION['contador'] >= 5 && $_SESSION['contador'] < 10) {
    $descuento = 20; // 20% de descuento
} elseif ($_SESSION['contador'] >= 10) {
    $descuento = 50; // 50% de descuento
}

// Calcular el precio final
$preuFinal = $preu;
if ($descuento > 0) {
    $descompteValor = ($preu * $descuento) / 100;
    $preuFinal = $preu - $descompteValor;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>

<h1>Compra Realitzada!</h1>
<p>Preu original del producte: <?php echo $preu; ?> €</p>

<?php if ($descuento > 0): ?>
    <p class="exito">Has aplicat un descompte del <?php echo $descuento; ?>%. El preu final és: <?php echo $preuFinal; ?> €</p>
<?php else: ?>
    <p class="error">No has aplicat cap descompte. El preu final és: <?php echo $preu; ?> €</p>
<?php endif; ?>



</body>
</html>
