<?php
    include "db.php";
?>

<html>
    <title>Toll Management</title>
</html>

<body>
    <h2>Toll Management</h2>
    <a href = "add.php">Add New</a><br><br>

    <table border = "5" cellpadding = "10">
        <tr>
            <th>ID</th>
            <th>Vehicle Number</th>
            <th>Location </th>
            <th>Amount </th>
            <th>Date </th>
            <th>Actions </th>
        </tr>

        <?php

        $result = $conn->query("SELECT * FROM toll_transactions");
        while($row = $result->fetch_assoc()){
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['vehicle_number']}</td>
                <td>{$row['toll_location']}</td>
                <td>{$row['amount_paid']}</td>
                <td>{$row['paid_at']}</td>

                <td>
                    <a href = 'edit.php?id={$row['id']}'>Edit</a> 
                </td>
            </tr>";
        }
        ?>
    </table>
</body>