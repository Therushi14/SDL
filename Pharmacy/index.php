<?php include 'db.php'; ?>
<h2>Pharmacy Inventory</h2>
<a href="add.php">Add New Medicine</a>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th><th>Name</th><th>Batch</th><th>Qty</th><th>Price</th><th>Expiry</th><th>Action</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM medicines");
    while ($row = $result->fetch_assoc()):
    ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['batch_number'] ?></td>
        <td><?= $row['quantity'] ?></td>
        <td><?= $row['price'] ?></td>
        <td><?= $row['expiry_date'] ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
