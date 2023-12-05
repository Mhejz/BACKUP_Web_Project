<?php 
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
                <form method="POST" action="function/function.php">
                    <div class="form-floating">
                        <input type="text" class="form-control mb-1" id="txtfullname" name="txtfullname" placeholder="Username">
                        <label for="txtUsername">first Name</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="text" class="form-control mb-1" id="txtmiddlename" name="txtmiddlename" placeholder="Username">
                        <label for="txtUsername">Middle name</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="text" class="form-control mb-1" id="txtlastname" name="txtlastname" placeholder="Username">
                        <label for="txtUsername">Last Name</label>
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
