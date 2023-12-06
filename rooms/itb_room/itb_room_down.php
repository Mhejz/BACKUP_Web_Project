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
    <h1 class="display-1 text-center">ITB ROOM DOWN</h1>
    <a href="../../floor/itb_floor.php" class="btn bg-secondary border-3 border-secondary-subtle mt-3 fw-bold text-light" style="border-radius: 20px; width: 100px;">back</a>
    <br><br>
    <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 room"  data-room-id="7" onclick="showSweetAlert(this)">
                <h1 class="display-5 text-center">ROOM 7</h1>
            </div>
        
    
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 room" data-room-id="8" onclick="showSweetAlert(this)">
                <h1 class="display-5 text-center">ROOM 8</h1>
            </div>
       
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 room" data-room-id="9" onclick="showSweetAlert(this)">
                <h1 class="display-5 text-center">ROOM 9</h1>
            </div>
        
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 room" data-room-id="10" onclick="showSweetAlert(this)">
                <h1 class="display-5 text-center">ROOM 10</h1>     
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 room" data-room-id="11" onclick="showSweetAlert(this)">
                <h1 class="display-5 text-center">ROOM 11</h1>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 room" data-room-id="12" onclick="showSweetAlert(this)">
                <h1 class="display-5 text-center">ROOM 12</h1>
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
            window.location.href = '../../view_itb_sch_down.php?room=' + encodeURIComponent(roomId);
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
function addSchedule(roomId){
    let destination;

    // Use if-else statements to determine the destination based on roomId
    if (roomId === '1') {
        destination = 'insert_sch_itbRoom1.php';
    } else if (roomId === '2') {
        destination = 'insert_sch_itbRoom2.php';
    } else if (roomId === '3') {
        destination = 'insert_sch_itbRoom3.php';
    } else if (roomId === '4') {
        destination = 'insert_sch_itbRoom4.php';
    } else if (roomId === '5') {
        destination = 'insert_sch_itbRoom5.php';
    } else if (roomId === '6') {
        destination = 'insert_sch_itbRoom6.php';
    } else if (roomId === '7') {
        destination = 'insert_sch_itbRoom7.php';
    } else if (roomId === '8') {
        destination = 'insert_sch_itbRoom8.php';
    } else if (roomId === '9') {
        destination = 'insert_sch_itbRoom9.php';
    } else if (roomId === '10') {
        destination = 'insert_sch_itbRoom10.php';
    } else if (roomId === '11') {
        destination = 'insert_sch_itbRoom11.php';
    } else if (roomId === '12') {
        destination = 'insert_sch_itbRoom12.php';
    }
    // Check if a valid destination is determined
    if (destination) {
        // Build the URL based on the destination and roomId
        const url = `../../${destination}?roomID=${encodeURIComponent(roomId)}`;

        // Redirect to the constructed URL
        window.location.href = url;
    } else {
        // Handle the case when no valid destination is determined
        console.error("Invalid roomId:", roomId);
    }
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
            window.location.href = '../../view_itb_sch_down.php?room=' + encodeURIComponent(roomId);
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