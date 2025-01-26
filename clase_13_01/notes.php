<?php

$nota = $_GET['nota'];


$conn = mysqli_connect("localhost", "johan1", "1234", "test");

if(!$conn){
    echo "No se ha podido conectar a la BBDD";
}
else{
    $sql = "SELECT * FROM Usuario WHERE Nota >=0";
    $query = mysqli_query($conn,$sql);
    while( $row = mysqli_fetch_array($query)){
        echo "nombre: " . $row['nombre'] . ", Apellido: " . $row['Apellido'] . ", Nota: " . $row['Nota'] . " <br>";
    }
    #$query = mysqli_query($conn ," INSERT  INTO Usuario VALUES ('54245467L', 'Luis' , 'Carbon',' 10' )");
    #$consulta =  mysqli_affected_rows($conn );
    #echo "Se  han añadido  $consulta de inserts";
 #$sql= "SELECT * FROM Usuario WHERE nota > $nota";
   # $query = mysqli_query($conn, $sql);
    #$rows = mysqli_num_rows($query);
    #echo "Hay $rows alumnos con mas de un $nota ";

}



?>