<?php
session_start();

if (!isset($_SESSION['usuari']) && isset($_SESSION['visites']) && $_SESSION['visites'] >= 20) {
    echo "<p>Agraïm la seva fidelitat, utilitzi el codi PROMO24 per un 20% de descompte</p>";
} elseif (isset($_SESSION['usuari']) && isset($_SESSION['visites']) && $_SESSION['visites'] >= 10) {
    echo "<p>{$_SESSION['usuari']}, agraïm la seva fidelitat, utilitzi el codi PROMO24 per un 30% de descompte</p>";
}
?>
