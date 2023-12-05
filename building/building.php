<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../include/header.php')?>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Dashboard</title>
    <style>
        a{
            text-decoration: none;
            color: black;
        }
        img{
            border: 5px solid #4CAF50;
        }
    </style>
</head>
<body class="container">
    <h1 class="display-1 text-center">Building</h1>
    <a href="../index.php" class="btn bg-secondary border-3 border-secondary-subtle mt-3 fw-bold text-light" style="border-radius: 20px; width: 100px;">back</a>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <a href="../floor/itb_floor.php">
                    <h1 class="display-4 text-center">ITB</h1>
                    <img src="../image/itb.jpg" alt="" width="800px" height="500px">
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">    
                <a href="../floor/itnb_floor.php">
                    <h1 class="display-4 text-center">ITNB</h1>
                    <img src="../image/itnb.jpg" alt="" width="800px" height="500px">
                </a>
            </div>
        </div>
    </div>
    <!-- BOOTSTRAP JS -->
    <link rel="stylesheet" href="../assets/js/bootstrap.min.js">
</body>
</html>