<?php
session_start();
if (!isset($_SESSION['log'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
  <header>
    <h1 style="color: #333; text-align: center; font-size: 32px; margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);">
      Hola, bienvenido <?php echo $_SESSION['user_login']; ?>
    </h1>
    <h2 style="text-align: center;">Rol: <?php echo $_SESSION['rol']; ?></h2>
    <div style="text-align: center; margin-bottom: 20px;">
      <button style="padding: 8px 12px; background-color: #e74c3c; color: white; border: none; border-radius: 4px; cursor: pointer;">
        <a href="logout.php" style="color: white; text-decoration: none;">Logout</a>
      </button>
    </div>
    <hr>
  </header>
<body style="background-color: #A9F5F2;">
