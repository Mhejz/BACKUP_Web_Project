<?php 
    include('../config/dbcon.php');
    //add data

    if(isset($_POST['btnAdd'])){
        $first_name     = $_POST['txtFirstname'];
        $middle_name    = $_POST['txtMiddlename'];
        $last_name      = $_POST['txtLastname'];
        $day            = $_POST['txtDate'];
        $start_time     = $_POST['txtStartTime'];
        $end_time       = $_POST['txtEndTime'];
        $Subject        = $_POST['txtSubject'];
        $roomID         = $_POST['data-room-id'];

        // mysqli_query($dbcon, "INSERT INTO itb_room1;
        // (first_name, middle_name, last_name, day, time, subject) VALUE ('$first_name', '$middle_name', '$last_name', '$day', '$time', '$Subject')");

        mysqli_query($dbcon, "INSERT INTO itb (first_name, middle_name, last_name, day, start_time, end_time, subject, roomID) VALUES ('$first_name', '$middle_name', '$last_name', '$day', '$start_time', '$end_time', '$Subject', '$roomID')");

        header('location: ../rooms/itb_room/itb_room_up.php');

        // Remove the session variable
        unset($_SESSION['last_selection']);

    }
?>