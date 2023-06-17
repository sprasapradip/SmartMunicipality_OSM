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
    <body class="bg-blue-100">
    
    <div class=" flex h-auto w-auto flex-col justify-center bg-blue-950 ">
        <p class="text-center m-6 text-white text-4xl font-serif font-semibold cursor-pointer">Welcome to the Admin Dashboard</p>
        <nav >
            <div class="flex justify-center items-center">
            <ul class="flex items-center justify-center ">
             
                <li class="m-6 bg-blue-500 hover:bg-blue-600 text-white text-xl h-14 w-52 flex justify-center items-center rounded-md"> <a href="report_problem.php">Home</a></li>
                <li class="m-6 bg-blue-500 hover:bg-blue-600 text-white text-xl h-14 w-52 flex justify-center items-center rounded-md"> <a href="view_reports.php">Issues</a></li>
                <li class="m-6 bg-blue-500 hover:bg-blue-600 text-white text-xl h-14 w-52 flex justify-center items-center rounded-md"> <a href="view_reports.php">Users</a></li>
                <li class="m-6 bg-blue-500 hover:bg-blue-600 text-white text-xl h-14 w-52 flex justify-center items-center rounded-md"> <a href="view_reports.php">Logout</a></li>
             </ul>
            </div>
        </nav>
    </div>
    <div>
        Whatsdrtcfyguhijokl
    </div>
    <footer>
        <div >
            <p class=" flex justify-center text-center font-semibold text-white text-2xl bg-blue-950">Smart Municipality  <span>&#169;</span> 2023</p>
           
        </div>
    </footer>
</body>
</body>
</html>