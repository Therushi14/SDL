<?php 
include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $vehicle = $_POST["vehicle"];
    $location = $_POST["location"];
    $amount = $_POST["amount"];

    $conn->query("INSERT INTO toll_transactions (vehicle_number,toll_location,amount_paid) VALUES ('$vehicle','$location','$amount')");
    header("Location: index.php");
}
?>

<form method ="POST">
    Vehicle Number: <input type = "text" name = "vehicle"><br>
    Toll Location: <input type = "text" name = "location" ><br>
    Amount Paid: <input type = "number" name = "location" ><br>
    <input type = "submit" value = "Add Record">
</form>
