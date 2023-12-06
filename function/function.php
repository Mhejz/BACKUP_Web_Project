<?php 
    include('../config/dbcon.php');

    //PARA SA REDIRECT NG KADA PAGE AFTER MAG INSERT
    
    //ITB ROOM UP

    if(isset($_POST['btnAdditb_room_up'])){
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
    //ITB ROOM DOWN
    if(isset($_POST['btnAdditb_room_down'])){
        $first_name     = $_POST['txtFirstname'];
        $middle_name    = $_POST['txtMiddlename'];
        $last_name      = $_POST['txtLastname'];
        $day            = $_POST['txtDate'];
        $start_time     = $_POST['txtStartTime'];
        $end_time       = $_POST['txtEndTime'];
        $Subject        = $_POST['txtSubject'];
        $roomID         = $_POST['data-room-id'];

        mysqli_query($dbcon, "INSERT INTO itb (first_name, middle_name, last_name, day, start_time, end_time, subject, roomID) VALUES ('$first_name', '$middle_name', '$last_name', '$day', '$start_time', '$end_time', '$Subject', '$roomID')");

        header('location: ../rooms/itb_room/itb_room_down.php');

        // Remove the session variable
        unset($_SESSION['last_selection']);
    }


    //ITNB ROOM UP 

    if(isset($_POST['btnAdditnb_room_up'])){
        $first_name     = $_POST['txtFirstname'];
        $middle_name    = $_POST['txtMiddlename'];
        $last_name      = $_POST['txtLastname'];
        $day            = $_POST['txtDate'];
        $start_time     = $_POST['txtStartTime'];
        $end_time       = $_POST['txtEndTime'];
        $Subject        = $_POST['txtSubject'];
        $roomID         = $_POST['data-room-id'];

        mysqli_query($dbcon, "INSERT INTO itnb (first_name, middle_name, last_name, day, start_time, end_time, subject, roomID) VALUES ('$first_name', '$middle_name', '$last_name', '$day', '$start_time', '$end_time', '$Subject', '$roomID')");

        header('location: ../rooms/itnb_room/itnb_room_up.php');

        // Remove the session variable
        unset($_SESSION['last_selection']);

    }

    //ITNB ROOM UP 

    if(isset($_POST['btnAdditnb_room_down'])){
        $first_name     = $_POST['txtFirstname'];
        $middle_name    = $_POST['txtMiddlename'];
        $last_name      = $_POST['txtLastname'];
        $day            = $_POST['txtDate'];
        $start_time     = $_POST['txtStartTime'];
        $end_time       = $_POST['txtEndTime'];
        $Subject        = $_POST['txtSubject'];
        $roomID         = $_POST['data-room-id'];

        mysqli_query($dbcon, "INSERT INTO itnb (first_name, middle_name, last_name, day, start_time, end_time, subject, roomID) VALUES ('$first_name', '$middle_name', '$last_name', '$day', '$start_time', '$end_time', '$Subject', '$roomID')");

        header('location: ../rooms/itnb_room/itnb_room_down.php');

        // Remove the session variable
        unset($_SESSION['last_selection']);

    }
?>