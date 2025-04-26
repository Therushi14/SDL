<?php
include "db.php";

$id = $_GET['id'];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $vehicle = $_POST["vehicle"];
    $location = $_POST["location"];
    $amount = $_POST["amount"];

    $conn->query("UPDATE toll_transactions SET vehicle_number='$vehicle' , toll_location = '$location' , amount_paid = '$amount'  WHERE id = $id  ");
    header("Location: index.php");
}

$result = $conn->query("SELECT * FROM toll_transactions WHERE id = $id");
$row = $result->fetch_assoc();
?>

<form method = "POST">
    Vehicle Number: <input type = "text" name = "vehicle" value= "<?= $row['vehicle_number'] ?>"><br>
    Toll location: <input type = "text" name = "location" value = "<?= $row['toll_location'] ?>"><br>
    Amount Paid: <input type = "number" name = "amount" value = "<?= $row['amount_paid']?>"> <br>
    <input type = "submit" value = "Update Record">
</form>