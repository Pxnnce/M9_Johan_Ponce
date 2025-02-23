<?php
$conn = mysqli_connect("localhost", "johan1", "1234", "Johan_Ponce_iticdesk");
if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . mysqli_connect_error();
    exit();
}
?>