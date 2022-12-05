<?php

$servername = "localhost";
$username = "root";
$database = "db_datajson";
$password = "";

$connect = mysqli_connect($servername, $username, $database, $password);

if(!$connect){
    echo "Failed" . mysqli_connect_error();
}
echo "Success";

header("location:index.php");

?>