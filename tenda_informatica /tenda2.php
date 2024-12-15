<?php
session_start();
include 'header.php';
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Tenda Informàtica - Més Productes</title>
</head>
<body>
    <?php
    include 'descomptes.php';
    ?>
    
    <h2>Més Productes</h2>
    <ul>
        <li>Cable USB C</li>
        <li>Portatil</li>
        <li>Caixa PC</li>
    </ul>
    
    <a href="tenda.php">Tornar a la pàgina principal</a>

    <?php
    include 'footer.php';
    ?>
</body>
</html>
