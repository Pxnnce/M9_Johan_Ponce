<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $precios = [
            "Pan" => 0.50,
            "Agua" => 1
        ];

        $producto1 = $_POST['Producto'];
        $cantidad1 = $_POST['Cantidad1'];

        $producto2 = $_POST['Producto2'];
        $cantidad2 = $_POST['Cantidad2'];

        // Calcular los precios
        $precioTotal1 = $precios[$producto1] * $cantidad1;
        $precioTotal2 = $precios[$producto2] * $cantidad2;
        $precioFinal = $precioTotal1 + $precioTotal2;

        }
?>