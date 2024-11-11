<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificació d'edat - Bodega</title>
</head>
<body>

<h1>Benvingut a la Bodega!</h1>

<form action="info_bodega.php" method="post">
    <label for="edad">Ingresa tu edad:</label>
    <input type="number" id="edad" name="edad" min="0" required>
    <br><br>

    <label for="idioma">Escull l'idioma:</label>
    <select name="idioma" id="idioma" required>
        <option value="catala">Català</option>
        <option value="espanol">Español</option>
        <option value="ingles">English</option>
    </select>
    <br><br>
      <label for="vi">Escull el  vi:</label>
    <select name="vi" id="vi" required>
        <option value="vi blanc">Blanc</option>
        <option value="vi vermell">Vermell</option>
        <option value="vi Les Terrasses">Les Terrasses</option>
    </select>
    <br><br>

    <label for="moneda">Escull la moneda:</label>
    <select name="moneda" id="moneda" required>
        <option value="euro">Euro (€)</option>
        <option value="lliura">Lliura (£)</option>
        <option value="dolar">Dòlar ($)</option>
    </select>
    <br><br>

    <button type="submit">Enviar</button>
</form>

</body>
</html>
