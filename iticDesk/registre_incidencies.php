<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registrar Incidència</title>
</head>
<body>
  <div style="text-align: center; margin: 20px 0;">
    <button style="padding: 8px 12px; background-color: #f39c12; color: white; border: none; border-radius: 4px; cursor: pointer;">
      <a href="acces.php" style="color: white; text-decoration: none;">Home</a>
    </button>
  </div>

  <form action="insert_incidencies.php" method="post" style="width: 400px; margin: auto; background-color: white; padding: 20px; border-radius: 8px;">
    <label for="titulo">Títol:</label><br>
    <input type="text" name="titulo" id="titulo" required style="width: 100%; padding: 8px; margin-bottom: 12px;"><br>

    <label for="descripcio">Descripció:</label><br>
    <textarea name="descripcio" id="descripcio" rows="4" required style="width: 100%; padding: 8px; margin-bottom: 12px;"></textarea><br>

    <label for="tipus">Prioritat:</label><br>
    <select name="tipus" id="tipus" required style="width: 100%; padding: 8px; margin-bottom: 16px;">
      <option value="Tipus I">Tipus I</option>
      <option value="Tipus II">Tipus II</option>
      <option value="Tipus III">Tipus III</option>
      <option value="Tipus IV">Tipus IV</option>
    </select><br>

    <button type="submit" style="background-color: #2ecc71; color: white; padding: 10px; border: none; border-radius: 4px; cursor: pointer; width: 100%;">Enviar</button>
  </form>
</body>
</html>
