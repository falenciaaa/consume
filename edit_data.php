<?php

include 'connect_database.php';
$id = $_GET['id'];
$consume  = mysqli_query($connect, "SELECT * FROM consume where id='$id'");
$row = mysqli_fetch_array($consume);

function active_radio_button($value, $input){
    $result =  $value==$input?'checked':'';
    return $result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Action</title>
    </head>
    <body>
        <form method="post" action="edit_data.php">
        <input type="hidden" value="<?php echo $row['id'];?>" name="id">
        <table>
            <tr><td>id</td><td><input type="text" value="<?php echo $row['id'];?>" name="id"></td></tr>
            <tr><td>productId</td><td><input type="text" value="<?php echo $row['productId'];?>" name="productId"></td></tr>
            <tr><td>productName</td><td><input type="text" value="<?php echo $row['productName'];?>" name="productName"></td></tr>
            <tr><td>amount</td><td><input type="text" value="<?php echo $row['amount'];?>" name="amount"></td></tr>
            <tr><td>customerName</td><td><input type="text" value="<?php echo $row['customerName'];?>" name="customerName"></td></tr>
            <tr><td>status</td><td>
                    <input type="radio" name="status" value="1" <?php echo active_radio_button("1", $row['status'])?>>FAILED
                    <input type="radio" name="status" value="0" <?php echo active_radio_button("0", $row['status'])?>>SUCCESS
            <tr><td>transactionDate</td><td><input type="text" value="<?php echo $row['transactionDate'];?>" name="transactionDate"></td></tr>
            <tr><td>createOn</td><td><input type="text" value="<?php echo $row['createOn'];?>" name="createOn"></td></tr>
            <tr><td>createBy</td><td><input type="text" value="<?php echo $row['createBy'];?>" name="createBy"></td></tr>
            <tr><td colspan="2"><button type="submit" value="save">SAVE CHANGES</button>
                    <a href="index.php">Back</a></td></tr>
        </table>
    </form>
</body>
</html>