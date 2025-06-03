<?php
session_start();

// Comprobar que llegan ambos campos
if (isset($_POST['user']) && isset($_POST['pwd'])) {
    $user = trim($_POST['user']);
    $pwd  = trim($_POST['pwd']);


    if ($user === $pwd) {
        // Guardar en sesión
        $_SESSION['user']    = $user;
        $_SESSION['Usuario'] = $user;
        $_SESSION['clave']   = $pwd; 

        
        echo "<p>Usuario: {$_SESSION['Usuario']}</p>";
        echo "<p>Contraseña: {$_SESSION['clave']}</p>";
        echo '<p><a href="pagina1.php">Ir a la página 1</a></p>';
        exit();
    } else {
        // Si falla, redirigir a info.html
        header('Location: info.html');
        exit();
    }
} else {
    // Si no vienen bien los datos, volver a index
    header('Location: index.html');
    exit();
}
?>
