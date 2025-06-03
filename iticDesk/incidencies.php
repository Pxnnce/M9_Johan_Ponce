<?php
include 'header.php';
?>

<div style="text-align: center; margin: 20px 0;">
  <button style="padding: 8px 12px; background-color: #f39c12; color: white; border: none; border-radius: 4px; cursor: pointer;">
    <a href="acces.php" style="color: white; text-decoration: none;">Home</a>
  </button>
</div>

<?php
// Conectar a la base de datos de Johan
$conn = mysqli_connect("localhost", "johan1", "1234", "Johan_Ponce_iticdesk");

session_start();
if (!isset($_SESSION['log'])) {
    header("Location: index.html");
    exit();
}

$sql = "SELECT * FROM `incidencies` ORDER BY prioritat ASC, data_creacio ASC;";
$query = mysqli_query($conn, $sql);

if ($query) {
    $rows = mysqli_num_rows($query);
    if ($rows > 0) {
        echo "<table border='1' cellpadding='8' cellspacing='0' style='margin: auto; background-color: white;'>";
        echo "<tr>
                <th>Prioritat</th>
                <th>Títol</th>
                <th>Descripció</th>
                <th>Creada per</th>
                <th>Data Creació</th>
                <th>Estat</th>
              </tr>";

        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>{$row['prioritat']}</td>";
            echo "<td>{$row['titol']}</td>";
            echo "<td>{$row['descripcio']}</td>";
            echo "<td>{$row['creada_per']}</td>";
            echo "<td>{$row['data_creacio']}</td>";
            echo "<td>{$row['estat']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p style='text-align: center; margin-top: 20px;'>No hi ha incidències</p>";
    }
} else {
    echo "<p style='text-align: center; margin-top: 20px;'>Error en la consulta a la BBDD.</p>";
}
?>