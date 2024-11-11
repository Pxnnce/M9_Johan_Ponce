?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Bodega</title>
</head>
<body>
    <h2>Benvingut a la Bodega</h2>
    <form action ="comptador_visites.php"  method="post">
        <label>Major d'edat:
            <input type="radio" name="majoredat" value="si"> Sí
            <input type="radio" name="majoredat" value="no" checked> No
        </label><br>

        <label>Idioma:
            <select name="idioma">
                <option value="catala">Català</option>
                <option value="espanyol">Espanyol</option>
                <option value="angles">Anglès</option>
            </select>
        </label><br>

        <label>Moneda:
            <select name="moneda">
                <option value="euro">Euros</option>
                <option value="lliura">Lliures</option>
                <option value="dolar">Dòlars</option>
            </select>
        </label><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
