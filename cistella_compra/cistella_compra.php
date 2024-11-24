<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
</head>
<body>
    <h1>Tienda online</h1>
    <form action="mostrar_compra.php" method="post">
        <p>Precio Pan 1€</p>
        <p>Precio Agua 0,50</p>
        <br><br>

        <!-- Producto 1 -->
        <label for="Producto">Elija un producto:</label>
        <select name="Producto" id="Producto" required>
            <option value="Pan">Pan</option>
            <option value="Agua">Agua</option>
        </select>
        <label for="Cantidad1">Cantidad:</label>
        <input type="number" name="Cantidad1" id="Cantidad1" min="0"
