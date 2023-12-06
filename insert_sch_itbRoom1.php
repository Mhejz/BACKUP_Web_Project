<?php
include('config/dbcon.php');


if (isset($_GET['roomID'])) {
    $roomId = $_GET['roomID'];
    echo "Room ID: " . $roomId;
    
} else {
    
    echo "Room ID not provided.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/header.php')?>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1 class="display-1 text-center">Insert schedule</h1>

    <div class="container">
        <main class="">
            <a href="rooms/itb_room/itb_room_up.php" class="btn bg-secondary border-3 border-secondary-subtle mt-3 fw-bold text-light" style="border-radius: 20px; width: 100px;">back</a>
            <br><br>
            <h1 class="display-6">Teacher's name</h1>
            <form method="POST" action="function/function.php">
                    <input type="hidden" name="data-room-id" value="<?php echo isset($roomId) ? $roomId : ''; ?>">

                    <div class="form-floating">
                        <input type="text" class="form-control mb-1" id="txtFirstname" name="txtFirstname" placeholder="First Name">
                        <label for="txtFirstname">First Name</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="text" class="form-control mb-1" id="txtMiddlename" name="txtMiddlename" placeholder="Middle Name">
                        <label for="txtMiddlename">Middle name</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="text" class="form-control mb-1" id="txtLastname" name="txtLastname" placeholder="Last Name">
                        <label for="txtLastname">Last Name</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="date" class="form-control mb-1" id="txtDate" name="txtDate" placeholder="Day" required>
                        <label for="txtDate">Day</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="time" class="form-control mb-1" id="txtStartTime" name="txtStartTime" placeholder="Time" required>
                        <label for="txtTime">Start Time</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="time" class="form-control mb-1" id="txtEndTime" name="txtEndTime" placeholder="Time" required>
                        <label for="txtTime">End Time</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="text" class="form-control mb-1" id="txtSubject" name="txtSubject" placeholder="Subject" required>
                        <label for="txtSubject">Subject</label>
                    </div>
                    <br>
                
                    <button class="w-100 btn btn-lg btn-primary" type="submit" id="btnAdditb_room_up" name="btnAdditb_room_up">Add Schedule</button>
            </form>
        </main>
    </div>

    <!-- BOOSTRAP JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- CUSTOME JAVA SCRIPT -->
    <script>
        // document.getElementById('hiddenId').value = id;
    </script>
</body>
</html>
