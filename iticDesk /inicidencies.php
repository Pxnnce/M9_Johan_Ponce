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

include 'conn.php'; // Incluir la conexión a la base de datos

// Obtener las incidencias de la base de datos
$consulta = "SELECT * FROM incidencies ORDER BY FIELD(prioritat, 'Tipus I', 'Tipus II', 'Tipus III', 'Tipus IV') DESC, data_creacio ASC";
$resultado = mysqli_query($conn, $consulta);

// Verificar si hay resultados
if ($resultado && mysqli_num_rows($resultado) > 0) {
    $lista_incidencias = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
} else {
    $lista_incidencias = []; // Si no hay incidencias, se inicializa un array vacío
}

mysqli_close($conn); // Cerrar la conexión
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Llistat d'Incidències</title>
</head>
<body>
    <h1>Benvolgut, <?php echo htmlspecialchars($_SESSION['nom']); ?>.</h1>
    <h2>Rol: <?php echo htmlspecialchars($_SESSION['rol']); ?>.</h2>
    <a href="logout.php">Logout</a>
    <hr>

    <h2>Llistat d'Incidències</h2>

    <?php if (empty($lista_incidencias)) { ?>
        <p>No s'han trobat incidències.</p>
    <?php } else { ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Ref.</th>
                    <th>Títol</th>
                    <th>Descripció</th>
                    <th>Prioritat</th>
                    <th>Data</th>
                    <th>Estat</th>
                    <th>Usuari</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista_incidencias as $incidencia) { ?>
                    <tr>
                        <td><?php echo $incidencia['ref_incidencies']; ?></td>
                        <td><?php echo $incidencia['titol']; ?></td>
                        <td><?php echo $incidencia['descripcio']; ?></td>
                        <td><?php echo $incidencia['prioritat']; ?></td>
                        <td><?php echo $incidencia['data_creacio']; ?></td>
                        <td><?php echo $incidencia['estat']; ?></td>
                        <td><?php echo $incidencia['creada_per']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } ?>

    <br>
    <a href="acces.php">Tornar al Menú Principal</a>
</body>
</html>