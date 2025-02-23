<?php
session_start(); // Iniciar sesión

// Verificar si el usuario ha iniciado sesión y es administrador
if (!isset($_SESSION['user']) || $_SESSION['rol'] !== 'Administrador ') {
    header("Location: index.html"); // Redirigir al inicio si no es administrador
    exit();
}

include 'conn.php'; // Incluir la conexión a la base de datos

// Procesar el formulario de registro de incidencias
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titol = $_POST['titol'];
    $descripcio = $_POST['descripcio'];
    $prioritat = $_POST['prioritat'];
    $creada_per = $_SESSION['user']; // Obtener el correo del usuario logueado

    // Generar la referencia de la incidencia
    $ref_incidencia = strtoupper(substr(md5(uniqid(rand(), true)), 0, 9));

    // Insertar la incidencia en la base de datos
    $sql = "INSERT INTO incidencies (ref_incidencies, titol, descripcio, prioritat, creada_per)
            VALUES ('$ref_incidencia', '$titol', '$descripcio', '$prioritat', '$creada_per')";

    if (mysqli_query($conn, $sql)) {
        $missatge = "Incidència registrada correctament!";
    } else {
        $missatge = "Error en registrar la incidència: " . mysqli_error($conn);
    }

    mysqli_close($conn); // Cerrar la conexión
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Registrar Incidència</title>
</head>
<body>
    <h1>Benvolgut, <?php echo htmlspecialchars($_SESSION['nom']); ?>.</h1>
    <h2>Rol: <?php echo htmlspecialchars($_SESSION['rol']); ?>.</h2>
    <a href="logout.php" class="logout-button">Logout</a>
    <hr>

    <h2>Registrar Incidència</h2>

    <?php if (isset($missatge)) { echo "<p>$missatge</p>"; } ?>

    <form action="registre_incidencies.php" method="POST">
        <label for="titol">Títol:</label>
        <input type="text" id="titol" name="titol" required><br><br>

        <label for="descripcio">Descripció:</label>
        <textarea id="descripcio" name="descripcio" rows="4" required></textarea><br><br>

        <label for="prioritat">Prioritat:</label>
        <select id="prioritat" name="prioritat" required>
            <option value="Tipus I">Tipus I</option>
            <option value="Tipus II">Tipus II</option>
            <option value="Tipus III">Tipus III</option>
            <option value="Tipus IV">Tipus IV</option>
        </select><br><br>

        <button type="submit">Registrar</button>
    </form>

    <br>
    <a href="acces.php">Tornar al Menú Principal</a>
</body>
</html>