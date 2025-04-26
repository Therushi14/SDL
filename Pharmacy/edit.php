<?php include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM medicines WHERE id = $id");
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $batch = $_POST['batch'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $expiry = $_POST['expiry'];

    $conn->query("UPDATE medicines SET name='$name', batch_number='$batch', quantity=$qty, price=$price, expiry_date='$expiry' WHERE id=$id");
    header("Location: index.php");
}
?>
<h2>Edit Medicine</h2>
<form method="POST">
    Name: <input type="text" name="name" value="<?= $row['name'] ?>"><br>
    Batch Number: <input type="text" name="batch" value="<?= $row['batch_number'] ?>"><br>
    Quantity: <input type="number" name="qty" value="<?= $row['quantity'] ?>"><br>
    Price: <input type="text" name="price" value="<?= $row['price'] ?>"><br>
    Expiry Date: <input type="date" name="expiry" value="<?= $row['expiry_date'] ?>"><br>
    <button type="submit">Update</button>
</form>
