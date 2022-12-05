<?php

include("connect_database");

$id = $_POST['id'];
$productId = $_POST['productId'];
$productName = $_POST['productName'];
$amount = $_POST['amount'];
$customerName = $_POST['customerName'];
$status = $_POST['status'];
$transactionDate = $_POST['transactionDate'];
$createBy = $_POST['createBy'];
$createOn = $_POST['createOn'];

$query = "INSERT INTO consume VALUES ('".$id."','".$productId."','".$productName."','".$amount."','".$customerName."','".$status."','".$transactionDate."','".$createBy."','".$createOn."')";

if(mysqli_query($connect, $query)){
    echo "Data is successfully added";
}else{
    echo "Failed" . mysqli_error($connect);
}
mysqli_close($connect);

header("location:index.php");

?>