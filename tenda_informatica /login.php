<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'usuari' && $password === 'contrasenya') {
        $_SESSION['usuari'] = $username;
        $_SESSION['visites'] = 0;
        header("Location: tenda.php");
        exit();
    } else {
        $error = "Nom d'usuari o contrasenya incorrectes";
    }
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
    <form method="post" action="">
        <label for="username">Nom d'usuari:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Contrasenya:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Iniciar sessió">
    </form>
</body>
</html>
