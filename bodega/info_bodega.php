<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    setcookie("edad", $_POST['edad'], time() + 3600, "/");
    setcookie("idioma", $_POST['idioma'], time() + 3600, "/");
    setcookie("moneda", $_POST['moneda'], time() + 3600, "/");
    header("Location: info_bodega.php"); 
    exit();
}


$edad = $_COOKIE['edad'] ?? 0; 
$idioma = $_COOKIE['idioma'] ?? 'catala';
$moneda = $_COOKIE['moneda'] ?? 'euro';


$majoredat = $edad >= 18; 

if (!$majoredat) {
    if ($idioma == 'catala') {
        echo "No et podem vendre alcohol si ets menor d’edat.";
    } elseif ($idioma == 'espanol') {
        echo "No podemos venderte alcohol si eres menor de edad.";
    } elseif ($idioma == 'ingles') {
        echo "We cannot sell alcohol if you are underage.";
    }
}  else {
    if ($idioma == 'catala' && $moneda == 'euro') {
        echo "T’oferim el vi “Les Terrasses” a un preu de 39 €.";
    } elseif ($idioma == 'espanol' && $moneda == 'euro') {
        echo "Te ofrecemos el vino “Les Terrasses” a un precio de 39 €.";
    } elseif ($idioma == 'ingles' && $moneda == 'euro') {
        echo "We offer the wine “Les Terrasses” at a price of €39.";
    } elseif ($idioma == 'catala' && $moneda == 'lliura') {
        echo "T’oferim el vi “Les Terrasses” a un preu de 34 £.";
    } elseif ($idioma == 'espanol' && $moneda == 'lliura') {
        echo "Te ofrecemos el vino “Les Terrasses” a un precio de 34 £.";
    } elseif ($idioma == 'ingles' && $moneda == 'lliura') {
        echo "We offer the wine “Les Terrasses” at a price of £34.";
    } elseif ($idioma == 'catala' && $moneda == 'dolar') {
        echo "T’oferim el vi “Les Terrasses” a un preu de 42 $.";
    } elseif ($idioma == 'espanol' && $moneda == 'dolar') {
        echo "Te ofrecemos el vino “Les Terrasses” a un precio de 42 $.";
    } elseif ($idioma == 'ingles' && $moneda == 'dolar') {
        echo "We offer the wine “Les Terrasses” at a price of $42.";
    }
}
?>
