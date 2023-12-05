<?php
    $server = 'localhost';
    $host   = 'root';
    $pass   = '';
    $name   = 'ieat_map';

    $dbcon = mysqli_connect($server, $host, $pass, $name);

    if(!$dbcon){
        // Log connection error to the PHP error log
        error_log('Connection Error: ' . mysqli_connect_error());
        
        // Alternatively, you can use echo to print the error to the browser
        // echo 'Connection Error: ' . mysqli_connect_error();

        die('Connection Error!');
    }
    else{
        // Log a success message to the PHP error log
        error_log('Connected to the database');

        echo "connected";
    }
?>
