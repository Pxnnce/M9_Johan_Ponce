<?php
session_start();
    $Usuario=$_POST["user"];
    $Contraseña=$_POST["pass"];
    $_SESSION["Usuario"] = $Usuario;      
    $_SESSION["contraseña"] = $Contraseña;


    if ( $_SESSION["Usuario"] == $Contraseña ){
        echo "Usuario: {$_SESSION ['Usuario']} \n";      
        echo "Contraseña: {$_SESSION ['Usuario']}\n";
    }else { 
        header( 'Location: info.html' );
        exit();
    }

?>