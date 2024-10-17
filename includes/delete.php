<?php
global $conn;
if(isset($_POST['delete-submit'])) {

    require 'dbh.inc.php';

    $reservation_id = $_POST['reserv_id'];

    $sql = "DELETE FROM reservation WHERE idr =$reservation_id";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../viewreservation.php?delete=success");
    } else {
        header("Location: ../viewreservation.php?delete=error");
    }
}
mysqli_close($conn);





