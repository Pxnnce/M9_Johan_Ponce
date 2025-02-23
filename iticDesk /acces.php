<?php
// Habilitar la visualización de errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start(); // Iniciar sesión

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user'])) {
    header("Location: index.html"); // Redirigir al inicio si no hay sesión
    exit();
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvingut</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            text-align: center;
        }

        header {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            margin: 0;
            font-size: 24px;
        }

        h2 {
            color: #666;
            margin: 10px 0 20px 0;
            font-size: 18px;
        }

        .menu-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            margin: 5px;
        }

        .menu-button:hover {
            background-color: #0056b3;
        }

        .logout-button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        .logout-button:hover {
            background-color: #c82333;
        }

        hr {
            border: 0;
            height: 1px;
            background: #ddd;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Benvolgut, <?php echo htmlspecialchars($_SESSION['nom']); ?>.</h1>
        <h2>Rol: <?php echo htmlspecialchars($_SESSION['rol']); ?>.</h2>
        
        <!-- Botones según el rol del usuario -->
        <?php if ($_SESSION['rol'] === 'Administrador ') { ?>
            <a href="registre_incidencies.php" class="menu-button">Registrar Incidència</a>
            <a href="incidencies.php" class="menu-button">Veure Incidències</a>
        <?php } elseif ($_SESSION['rol'] === 'Profesor') { ?>
            <a href="incidencies.php" class="menu-button">Veure Incidències</a>
        <?php } ?>
        
        <hr>
        
        <!-- Botón de Logout -->
        <a href="logout.php" class="logout-button">Logout</a>
    </header>
</body>
</html>