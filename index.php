<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/header.php')?>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Login Page</title>
</head>
<body>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 d-flex justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <form action="function/function.php" method="post">

                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>

                            <div class="col-6 form-floating">
                                <input type="text" id="" name="" placeholder="" class="form-control mt-3">
                                <label for="" class="label">Username</label>
                            </div>
                            <div class="col-6 form-floating ">
                                <input type="password" id="" name="" placeholder="" class="form-control mt-3">
                                <label for="" class="label">Password</label>
                            </div>
                            <!-- <input type="submit" name="login" value="Login" class="btn bg-secondary border-3 border-secondary-subtle mt-3 fw-bold text-light" style="border-radius: 20px; width: 100px;"> -->
                            <a href="building/building.php" class="btn bg-secondary border-3 border-secondary-subtle mt-3 fw-bold text-light" style="border-radius: 20px; width: 100px;">login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BOOTSTRAP JS -->
    <link rel="stylesheet" href="assets/js/bootstrap.min.js">
    <!-- CUSTOM JS -->
    <script></script>
</body>
</html>