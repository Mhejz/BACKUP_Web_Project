<?php
session_start();

// I-check kung may session variable na itinakda
if (isset($_SESSION['last_selection'])) {
    // I-redirect ang user sa huling piling na room
    header('location: rooms/' . $_SESSION['last_selection'] . '.php');
    exit(); // Siguruhing wala nang code na mag-e-execute pagkatapos ng redirect
}

include('config/dbcon.php');
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
        <a href="rooms/itb_room/itb_room_down.php" class="btn bg-secondary border-3 border-secondary-subtle mt-3 fw-bold text-light" style="border-radius: 20px; width: 100px;">back</a>
            <br><br>
                <h1 class="display-6">Teacher's name</h1>
                <form method="POST" action="function/function.php">
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
                        <input type="time" class="form-control mb-1" id="txtTime" name="txtTime" placeholder="Time" required>
                        <label for="txtTime">Time</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="text" class="form-control mb-1" id="txtSubject" name="txtSubject" placeholder="Subject" required>
                        <label for="txtSubject">Subject</label>
                    </div>
                    <br>
                    

                    <button class="w-100 btn btn-lg btn-primary" type="submit" id="btnAdd" name="btnAdd">Add Schedule</button>
                </form>
            </main>
        </div>

    <!-- BOOSTRAP JS -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
