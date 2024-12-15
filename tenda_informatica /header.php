<?php
session_start();

if (!isset($_SESSION['visites'])) {
    $_SESSION['visites'] = 1;
} else {
    $_SESSION['visites']++;
}

if ($_SESSION['visites'] % 2 == 0) {
    $missatge = "Benvingut de nou, esperem que tingui un bon dia";
} else {
    $missatge = "Benvingut, és un plaer que ens visitis";
}

echo "<h1>$missatge</h1>";

if (isset($_SESSION['usuari'])) {
    echo "<p>Hola, {$_SESSION['usuari']}!</p>";
    echo "<a href='logout.php'>Tancar sessió</a>";
} else {
    echo "<a href='login.php'>Iniciar sessió</a>";
}
?>
