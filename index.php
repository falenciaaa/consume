<!DOCTYPE html>
<html>
    <head>
        <title>Data</title>
    </head>
    <body>
        <h2>List Data</h2>
        <table>
            <tr><th>id</th><th>productID</th><th>productName</th><th>amount</th><th>customerName</th><th>status</th><th>transactionDate</th><th>createBy</th><th>createOn</th></tr>
            <?php
                include "connect_database.php";
                $customer = mysqli_query($connect, "SELECT * FROM consume");
                $choose = 1;
                foreach($customer as $row){
                    $status = $row['status'] == '0' ? 'SUCCES' : 'FAILED';
                    echo "
                    <tr>
                    <td>$choose</td>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['productId'] . "</td>
                    <td>" . $row['productName']. "</td>
                    <td>" . $row['amount'] . "</td>
                    <td>" . $row['customerName'] . "</td>
                    <td>" . $status . "</td>
                    <td>" . $row['transactionDate']. "</td>
                    <td>" . $row['createOn'] . "</td>
                    <td>" . $row['createBy'] . "</td>
                    <td><a href='add_data.php?id=$row[id]'>Add</a>
                        <a href='edit_data.php?id=$row[id]'>Edit</a>
                    </td>
                    </tr>";
                    $choose++;
                }
            ?>
        </table>
    </body>
</html>