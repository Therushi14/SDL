<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $res = $conn->query("SELECT * FROM user_db WHERE username = '$username'");

if ($res->num_rows === 1) {
    $row = $res->fetch_assoc();

    if ($password === $row['password']) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        echo "Invalid Password";
    }
} else {
    echo "User not found";
}

}
?>

<form method="POST" action="">
    <h2>Login</h2>
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Login">
</form>
