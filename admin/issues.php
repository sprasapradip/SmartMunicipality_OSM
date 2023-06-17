<?php
session_start();
if (!isset($_SESSION['admin_email'])) {
    header("Location: login.php");
    exit();
}



$conn = mysqli_connect("localhost", "root","", "hackfest");

if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}
//Button clicked function
if (isset($_POST['solve'])) {
    $issueId = $_POST['issue_id'];
    $updateQuery = "UPDATE issues SET status = 'solved' WHERE id = '$issueId'";
    mysqli_query($conn, $updateQuery);
    header("Location: issues.php"); 
    exit();
}

$query = "SELECT * FROM issues ORDER BY id DESC";
$result = mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html>
<head>
    <title>Issues Dashboard</title>
</head>
<body>
    
        <nav>
                <li><a href="emergency_issue.php">Emergency Issues</a></li>
                <li><a href="normal_issue.php">Normal Issues</a></li>
        </nav>
        <h2>All Issues</h2>
        <table>
            <tr>
                <th>S.N</th>
                <th>UserEmail</th>
                <th>Problem_category</th>
                <th>Problem_description</th>
                <th>Address</th>
                <th>Emergency_status</th>
                <th>latitude</th>
                <th>longitude</th>
                <th>Timestamp</th>
                <th>ProblemImage</th>
                <th>Solved/Not?</th>
                <th>View in Map</th>

            </tr>
           
            <?php  $issueCount = 1; while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                
                <td><?php echo $issueCount; ?></td>
                <td><?php echo $row['user_email']; ?></td>
                <td><?php echo $row['problem_category']; ?></td>
                <td><?php echo $row['problem_description']?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['emergency_status']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['latitude']; ?></td>
                <td><?php echo $row['longitude']; ?></td>
                <td><?php echo $row['timestamp']; ?></td>
                <td><?php if ($row['status'] == 'not solved') { ?>
                        Not Solved
                        <form method="POST" action="">
                            <input type="hidden" name="issue_id" value="<?php echo $row['id']; ?>">
                            <input type="submit" name="solve" value="Solve">
                        </form>
                    <?php } else if ($row['status'] == 'solved') { ?>
                        Solved✅ 
                    <?php } ?> </td>
                 <td><a href="problem_map.php?id=<?php echo $row['id'];?>">Map</a></td>
            </tr>
            
            <?php $issueCount++; } ?>
        </table>
    </main>
    <footer>
    <p>Smart municipality &copy; 2023</p>
    </footer>
</body>
</html>
