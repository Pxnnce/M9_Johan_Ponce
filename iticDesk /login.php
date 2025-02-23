<?php
session_start(); // Iniciar sesión
include 'conn.php'; 


if (isset($_POST['usuario_log']) && isset($_POST['contraseña'])) {
    $usuario = $_POST['usuario_log'];
    $contraseña = $_POST['contraseña'];

    if (!$conn) {
        die("No se ha podido conectar a la Base de Datos.");
    }

   
    // Consulta SQL para verificar las credenciales
    $sql = "SELECT * FROM Usuarios WHERE Mail = '$usuario' AND Contraseña = '$contraseña'";
    $query = mysqli_query($conn, $sql);

    // Verificar si se encontró un usuario con las credenciales proporcionadas
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        // Guardar datos del usuario en la sesión
        $_SESSION['user'] = $usuario; // Correo del usuario
        $_SESSION['nom'] = $row['Nombre']; // Nombre del usuario
        $_SESSION['rol'] = $row['Rol']; // Rol del usuario

        header("Location: acces.php"); // Redirigir a la página de acceso
        exit();
    } else {
     
        echo "Usuario o contraseña incorrectos.";
    }
} else {
    // Campos faltantes
    echo "Por favor, complete todos los campos.";
}
?>