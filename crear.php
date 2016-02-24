<?php
   $mysqli = new mysqli("localhost", "root", "damian", "firma");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else
{
    $sql = "select * from  datos_firmas";
   
    $result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_array($result)) {
        echo "id: " . $row["1"]. " - Name: " . $row["2"]. " " . $row["3"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($mysqli);
}
    
?>