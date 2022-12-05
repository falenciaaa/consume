<?php

include "connect_database.php";

$id = $_POST['id'];
$productId = $_POST['productId'];
$productName = $_POST['productName'];
$amount = $_POST['amount'];
$customerName = $_POST['customerName'];
$status = $_POST['status'];
$transactionDate = $_POST['transactionDate'];
$createBy = $_POST['createBy'];
$createOn = $_POST['createOn'];

$query = "UPDATE consume SET id='$id',productId='$productId',productName='$productName',amount='$amount',customerName='$customerName',status='$status',transactionDate='$transactionDate',createBy='$createBy',createOn='$createOn' 
    WHERE id='$id'";
mysqli_query($connect, $query);

header("location:index.php");

?>