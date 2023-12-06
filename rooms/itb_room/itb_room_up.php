<?php include('../../config/dbcon.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('../../include/header.php')?>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .room {
            border: 1px solid #ccc;
            padding: 15px;
            text-align: center;
            cursor: pointer;
        }
        .room.active {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body class="container">
    <h1 class="display-1 text-center">ITB ROOM UP</h1>
    <a href="../../floor/itb_floor.php" class="btn bg-secondary border-3 border-secondary-subtle mt-3 fw-bold text-light" style="border-radius: 20px; width: 100px;">back</a>
    <br><br>
    <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 room"  data-room-id="1" onclick="showSweetAlert(this)">
                <h1 class="display-5 text-center">ROOM 1</h1>
            </div>
        
    
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 room" data-room-id="2" onclick="showSweetAlert(this)">
                <h1 class="display-5 text-center">ROOM 2</h1>
            </div>
       
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 room" onclick="showSweetAlert('ROOM 3')">
                <h1 class="display-5 text-center">ROOM 3</h1>
            </div>
        
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 room" onclick="showSweetAlert('ROOM 4')">
                <h1 class="display-5 text-center">ROOM 4</h1>     
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 room" onclick="showSweetAlert('ROOM 5')">
                <h1 class="display-5 text-center">ROOM 5</h1>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 room" onclick="showSweetAlert('ROOM 6')">
                <h1 class="display-5 text-center">ROOM 6</h1>
            </div>
    </div>
    
    <!-- BOOTSTRAP JS -->
    <link rel="stylesheet" href="../assets/js/bootstrap.min.js">
    <!-- SWEETALERT 2  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- CUSTOM JS -->
    <script>
$(document).ready(function () {
    $(".room").click(function () {
        $(".room").removeClass("active");
        $(this).addClass("active");
    });
});

//SWEETALERT2
// Define addSchedule globally
function showSweetAlert(clickedElement) {
    // const roomId = clickedElement.id.replace("room", "");
    const roomId = clickedElement.getAttribute("data-room-id");

    //console.log("Room ID:", roomId);
    const roomName = clickedElement.innerText.trim();
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger"
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: "Room ID: " + roomId,
        text: "Room Name: " + roomName,
        icon: "info",
        confirmButtonText: "OK",
        html:
            '<button class="btn btn-primary" onclick="addSchedule(\'' + roomId + '\')">Add Schedule</button>' +
            '<button class="btn btn-secondary" onclick="viewSchedule(\'' + roomId + '\')">View Schedule</button>',
        onClose: () => {
            // Handle close event if needed
        }
    }).then((result) => {
        // Pagkatapos ng alert, mag-redirect sa "view_schedule.php" kung kinumpirma
        if (result.isConfirmed) {
            window.location.href = '../../view_schedule.php?room=' + encodeURIComponent(roomId);
        }
    }).catch((error) => {
        console.error("Error in SweetAlert2:", error);
    });
}

// function addSchedule(roomId) {
//     // const roomId = clickedElement.getAttribute("data-room-id");
//     window.location.href = '../../insert_sch_itbRoom1.php?room=' + encodeURIComponent(roomId);
// }

//UPDATE ADD SCHEDULE FUNCTION
function addSchedule(roomId) {
    window.location.href = '../../insert_sch_itbRoom1.php?roomID=' + encodeURIComponent(roomId);
}


function viewSchedule(roomId) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger"
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: "View Schedule",
        text: "You can view your schedule here.",
        icon: "info",
        confirmButtonText: "OK"
    }).then((result) => {
        // Pagkatapos ng alert, mag-redirect sa "view_schedule.php"
        if (result.isConfirmed) {
            window.location.href = '../../view_schedule.php?room=' + encodeURIComponent(roomId);
            // document.getElementById("yourFormId").submit();
        }
    });
}

//pag kuha ng roomid
function setRoomId(roomId) {
    document.getElementById("roomIdInput").value = roomId;
}

    </script>
</body>
</html>