<?php
session_start(); // Iniciar sesión
$conn = mysqli_connect("localhost", "johanPonceExam", "Admin1234*", "johanPonceExam");
if (isset($_POST['peli_log']) && isset($_POST['año'])) {
    $pelicula = $_POST['peli_log'];
    $año = $_POST['año'];
	

   
    
    $sql = "SELECT TITULO FROM Peliculas WHERE ANYO < '$año'";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) < $año) {
        $row = mysqli_fetch_assoc($query);



        header("Location: query.php"); // Redirigir a la página
        exit();
    } else {
     
        echo "pelicula o año incorrectos.";
    }
} else {
    // Campos faltantes
    echo "Por favor, complete todos los campos.";
}
?>