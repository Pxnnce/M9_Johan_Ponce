<?php

$conn =  mysqli_connect("localhost", "johan1", "1234","Johan_Ponce_iticdesk");
if(!$conn){
        echo "No se ha podido conecatar correctamente " ;
}
 else{
        echo "Ok";
}

$query = mysqli_query($conn, "INSERT INTO Usuarios VALUES('54124474K','Andres','Ponce')");

?>
