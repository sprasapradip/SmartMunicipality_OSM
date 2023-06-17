<?php 
session_start();
$conn = mysqli_connect("localhost","root","","hackfest");
if(!isset($_SESSION['admin_email'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to Admin Dashboard</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="issues.php">Issues</a></li>
                <li><a href="users.php">Users</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <main>
        <?php include("map.php") ?>
    </main>
    <footer>
        <p>Smart municipality &copy; 2023</p>
    </footer>

</body>
</html>