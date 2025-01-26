<?php
$conn = mysqli_connect("localhost", "johan1", "1234", "test");
if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . mysqli_connect_error();
    exit();
}
?>