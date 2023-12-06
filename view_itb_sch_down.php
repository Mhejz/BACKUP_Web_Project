<?php include('config/dbcon.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/header.php')?>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- OTHER PLUGINS CSS-->
    <!-- DATA TABLES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <!-- CUSTOM CSS -->
    <style></style>
    <title>Document</title>
</head>
<body class="container">
    <h1 class="display-1 text-center">view schedule</h1>
    <br>
    <a href="rooms/itb_room/itb_room_down.php" class="btn bg-secondary border-3 border-secondary-subtle mt-3 fw-bold text-light" style="border-radius: 20px; width: 100px;">back</a>
    <br>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Day</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Subject</th>
            </tr>
        </thead>

        <tbody>
        <?php
$roomId = isset($_GET['room']) ? $_GET['room'] : null;

// Check if roomID is provided
if ($roomId !== null) {
    // Use a prepared statement to avoid SQL injection
    $stmt = mysqli_prepare($dbcon, "SELECT * FROM itb WHERE roomID = ?");
    
    // Bind the parameter
    mysqli_stmt_bind_param($stmt, "i", $roomId);
    
    // Execute the statement
    mysqli_stmt_execute($stmt);
    
    // Get the result
    $result = mysqli_stmt_get_result($stmt);

    // Fetch and display the data
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
            <td><?php echo $row['first_name']?></td>
            <td><?php echo $row['middle_name']?></td>
            <td><?php echo $row['last_name']?></td>
            <td><?php echo $row['day']?></td>
            <td><?php echo $row['start_time']?></td>
            <td><?php echo $row['end_time']?></td>
            <td><?php echo $row['subject']?></td>
        </tr>
    <?php
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "Room ID not provided.";
}
?>


        </tbody>
    </table>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP JS -->
    <link rel="stylesheet" href="assets/js/bootstrap.min.js">
    <!-- OTHER PLUGINS -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <!-- CUSTOM JS -->
    <script>
        $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
</body>
</html>