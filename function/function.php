<?php 
    include('../config/dbcon.php');
    //add data

    if(isset($_POST['btnAdd'])){
        $fullname = $_POST['txtfullname'];
        $middlename = $_POST['txtmiddlename'];
        $lastname = $_POST['txtlastname'];

        mysqli_query($dbcon, "INSERT INTO tbl_teachers 
        (fullname, middlename, lastname) VALUE ('$fullname', '$middlename', '$lastname')");

        header('location: ../insert_schedule.php');
    }
?>