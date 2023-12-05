<!DOCTYPE html>
<html lang="en">
<head>
    <!-- BOOTSTRAP -->
    <?php include('../include/header.php')?>
    <title>ITB Building</title>
    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
        a{
            text-decoration: none;
            color: black;
        }
        .floor{
            padding: 70px;
            border: 1px solid #4CAF50;
        }
    </style>
</head>
<body class="container">
    <h1 class="display-1 text-center">ITB FLOOR</h1><br><br>
    <div class="container-fluid">
    <a href="../building/building.php" class="btn bg-secondary border-3 border-secondary-subtle mt-3 fw-bold text-light" style="border-radius: 20px; width: 100px;">back</a>
    <br><br>
        <a href="../rooms/itb_room/itb_room_up.php">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 floor">
                    <h1 class="display-5 text-center">ITB FLOOR UP</h1>
                </div>
            </div>
        </a>
        <br>
        <a href="../rooms/itb_room/itb_room_down.php">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 floor">
                    <h1 class="display-5 text-center">ITB FLOOR DOWN</h1>
                </div>
            </div>
        </a>
    </div>
    <!-- BOOTSTRAP JS -->
    <link rel="stylesheet" href="../assets/js/bootstrap.min.js">

    <!-- CUSTOM JS -->
    <script></script>
</body>
</html>