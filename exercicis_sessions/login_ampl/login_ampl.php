
<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Usuario=$_POST["user"];
    $Contraseña=$_POST["pass"];
    $_SESSION["Usuario"] = $Usuario;      
    $_SESSION["contraseña"] = $Contraseña;

    if ( $_SESSION["Usuario"] == $Contraseña ){
        echo "Usuario: {$_SESSION ['Usuario']} \n";      
        echo "Contraseña: {$_SESSION ['Usuario']}\n";
        
?>
      <button onclick="location.href='Cerrar_sesion.php'">Cerrar sesión</button>
<?php
    }   else {
        
        header( 'Location: info.php' );
        exit();
    }
}    
?>
</body>

</html>