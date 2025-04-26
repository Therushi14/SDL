<?php include 'db.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $batch = $_POST['batch'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $expiry = $_POST['expiry'];

    $conn->query("INSERT INTO medicines (name, batch_number, quantity, price, expiry_date)
                  VALUES ('$name', '$batch', $qty, $price, '$expiry')");
    header("Location: index.php");
}
?>
<h2>Add New Medicine</h2>
<form method="POST">
    Name: <input type="text" name="name"><br>
    Batch Number: <input type="text" name="batch"><br>
    Quantity: <input type="number" name="qty"><br>
    Price: <input type="text" name="price"><br>
    Expiry Date: <input type="date" name="expiry"><br>
    <button type="submit">Add</button>
</form>
