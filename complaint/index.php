<?php
    include 'db.php';
?>

<head>
    <title>Complaint Management</title>
</head>

<body>
    <h1> Submit a Complaint</h1>
    <form action ="create_complaint.php" method = "POST">
        <label for="name">Name: </label><br>
        <input type = "text" id="name" name="name" required><br><br>

        <label for="email">Email: </label><br>
        <input type="email" id = "email" name="email" required><br><br>

        <label for="complaint">Complaint: </label><br>
        <textarea id="complaint" name="complaint" rows="5" cols="40" required></textarea><br><br>

        <input type="submit" value="submit">
    </form>

    <br>

    <table border="5" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Complaint</th>
            <th>Status</th>
            <th>Created At</th>
        </tr>

    <?php
    $result = $con->query("SELECT * FROM complaints");
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['complaint']}</td>
                    <td>{$row['status']}</td>
                    <td>{$row['created_at']}</td>
                </tr>
            ";
        }
    } else {
        echo  "<tr> <td colspan = '6'> No Complaints found.</td></tr>";
    }
    $con->close();
    ?>
    </table>
</body>