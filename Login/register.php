<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = $conn->query("SELECT * FROM user_db WHERE username = '$username'");

    if($check->num_rows > 0){
        echo "User already exits. Please login";
    } else {
        $sql = "INSERT INTO user_db (username,password) VALUES ('$username','$password')";
        if($conn->query($sql)){
            echo "Registration successful. <a href='login.php'>Login here</a>";
        } else {
            echo "Error: ".$conn->error;
        }
    }
}
?>

<form method = "POST" action = "">
    <h2>Register</h2>
    Username: <input type = "text" name = "username" required><br<br>
    Password: <input type = "password" name = "password" required><br><br>
    <input type = "submit" value="Register">
</form>