<?php

$conn = new PDO("sqlsrv:server = tcp:primeempire.database.windows.net,1433; Database = PrimeEmpireDB", "primeadmin", "primeempire24!");

function addUnit($name, $type, $weight, $imageurl)
{
    global $conn;
    $sql = "insert into TeaTable values(null '$name', '$type' ,'$weight', '$imageurl')";

    $result = mysqli_query($conn, $sql);

    if ($result == true) 
    {return true;}
}


?>