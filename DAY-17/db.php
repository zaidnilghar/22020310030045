<?php

$serevername = "localhost";
$username = "root";
$password = "";
$databasename = "hello";


$conn = mysqli_connect($serevername, $fname, $password, $databasename);

if($conn -> connect_error);

{
    die ($conn -> connect_error);
}

else {
    echo ("mysql connect is successful");
}


?>