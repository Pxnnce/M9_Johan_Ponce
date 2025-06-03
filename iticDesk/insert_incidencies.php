<?php
// Conexión a la base de datos de Johan
$conn = mysqli_connect("localhost", "johan1", "1234", "Johan_Ponce_iticdesk");

session_start();
if (!isset($_SESSION['log'])) {
    header("Location: index.html");
    exit();
}

// Generar un ref_incidencies único de 10 caracteres al azar
function generarRef($length = 10) {
    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $ref = '';
    for ($i = 0; $i < $length; $i++) {
        $ref .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $ref;
}

$ref = generarRef();
$id_user = $_SESSION['id_user'];             // DNI del usuario logueado
$titulo = $_POST['titulo'];
$descripcio = $_POST['descripcio'];
$prioritat = $_POST['tipus'];

// Fecha en formato TIMESTAMP (MySQL lo manejará de forma automática, pero lo ponemos aquí para Joel)
date_default_timezone_set('UTC');
$fecha = date('Y-m-d H:i:s');  // formato apto para TIMESTAMP

if (!$conn) {
    echo "No se ha podido conectar a la BBDD: " . mysqli_connect_error();
    exit();
} else {
    // Insertar en la tabla `incidencies` (Johan)
    $stmt = $conn->prepare(
        "INSERT INTO `incidencies` (`ref_incidencies`, `titol`, `descripcio`, `data_creacio`, `estat`, `prioritat`, `creada_per`)
         VALUES (?, ?, ?, ?, 'Oberta', ?, ?)"
    );
    $stmt->bind_param("ssssss", $ref, $titulo, $descripcio, $fecha, $prioritat, $id_user);

    if ($stmt->execute()) {
        echo "<p style='text-align: center; margin-top: 20px;'>Incidència registrada correctament!</p>";
    } else {
        echo "<p style='text-align: center; margin-top: 20px;'>Error al registrar: " . $stmt->error . "</p>";
    }
    $stmt->close();
    $conn->close();
}
?>

<hr><br><br>
<div style="text-align: center;">
  <button style="margin: 0 10px; padding: 8px 12px; background-color: #e67e22; color: white; border: none; border-radius: 4px; cursor: pointer;">
    <a href="registre_incidencies.php" style="color: white; text-decoration: none;">Afegir una altra</a>
  </button>
  <button style="margin: 0 10px; padding: 8px 12px; background-color: #3498db; color: white; border: none; border-radius: 4px; cursor: pointer;">
    <a href="acces.php" style="color: white; text-decoration: none;">Tornar a l'Inici</a>
  </button>
</div>
