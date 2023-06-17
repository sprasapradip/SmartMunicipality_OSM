<?php 
session_start();
$conn = mysqli_connect("localhost","root","","hackfest");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<body class="bg-blue-100" >
    <div>
        <p class=" flex justify-center text-center text-red-200 text-2xl bg-blue-950">Smart Municipality</p>
    </div>
    <div class=" mt-20 ">
        <p class="text-center text-red-600 text-4xl font-serif font-semibold " >Log In to Admin Dashboard</p>
    </div>
    <div class=" flex justify-center  basis-5/12 ">
        <form action="" method="post" class=" bg-white shadow-2xl rounded-lg mt-24 h-96 w-1/4" >
            <div class="flex flex-col justify-center items-center">
            <input type="email" name="admin_email" id="mail" placeholder="Email" class="h-14 w-72 rounded-md mt-14 border-gray-400 border-2"> <br> <br>
            <input type="password" name="admin_pass" id="pass" placeholder="Password" class="h-14 w-72 rounded-md border-gray-400 border-2">  </div> <br> <br>
            <div class=" flex items-center justify-center ">
                <button class="bg-red-500 text-white font-semibold text-xl h-14 w-52 rounded-md hover:bg-red-600 items-center mx-auto " type="submit" name="admin_login">Log In</button>
                 </div>
        </form>
    </div>
</body>
</body>
</html>


<?php
if(isset($_POST['admin_login'])){
  $admin_email= mysqli_real_escape_string($conn,$_POST['admin_email']);
  $admin_pass= mysqli_real_escape_string($conn,$_POST['admin_pass']);
  $get_admin="select * from admin where admin_email='$admin_email'AND admin_password='$admin_pass'";
  $run_admin=mysqli_query($conn,$get_admin);
  $count= mysqli_num_rows($run_admin);
  if($count == 1){
    $_SESSION['admin_email']= $admin_email;
    echo "<script> alert('You are logged') </script>";
    echo "<script> window.open('index.php','_self') </script>";

  }
  else{
    echo "<script>alert('Email/Password Wrong')</script>";
  }

}
 ?>