<?php 
    include('../config/dbcon.php');
    //add data

    if(isset($_POST['btnAdd'])){
        $first_name     = $_POST['txtFirstname'];
        $middle_name    = $_POST['txtMiddlename'];
        $last_name      = $_POST['txtLastname'];
        $day            = $_POST['txtDate'];
        $time           = $_POST['txtTime'];
        $Subject        = $_POST['txtSubject'];
        $roomID         = $_POST['data-room-id'];
        

        // mysqli_query($dbcon, "INSERT INTO itb_room1;
        // (first_name, middle_name, last_name, day, time, subject) VALUE ('$first_name', '$middle_name', '$last_name', '$day', '$time', '$Subject')");

        mysqli_query($dbcon, "INSERT INTO itb_room1 (first_name, middle_name, last_name, day, time, subject, roomID) VALUES ('$first_name', '$middle_name', '$last_name', '$day', '$time', '$Subject', '$roomID')");

        header('location: ../insert_schedule.php');

        // Remove the session variable
        unset($_SESSION['last_selection']);

    }
?>