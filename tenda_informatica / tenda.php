<?php
session_start();
include 'header.php';
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Tenda Informàtica</title>
</head>
<body>
    <?php
    include 'descomptes.php';
    ?>
    
    <h2>Productes de la Tenda</h2>
    <ul>
        <li>Ordinador </li>
        <li>Ratolí</li>
        <li>Auriculars</li>
    </ul>
    
    <a href="tenda2.php">Veure més productes</a>

    <?php
    include 'footer.php';
    ?>
</body>
</html>
