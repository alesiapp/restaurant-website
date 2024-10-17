<?php


global $conn;
session_start();
function between($val, $x, $y){
    $val_len = strlen($val);
    return ($val_len >= $x && $val_len <= $y)?TRUE:FALSE;
}
if(isset($_POST['submitreview'])) {

    require 'dbh.inc.php';
    $stmt = "";
    $user = $_SESSION['id'];
    $rating = $_POST['rating'];
    $comments = $_POST['comments'];
    if ( empty($comments) || empty($rating) ) {
        header("Location: ../leavereview.php?error=emptyinput");
        exit();
    } else {

        if (!preg_match("/^[a-zA-Z 0-9]*$/", $comments) || !between($comments, 0, 200)) {
            header("Location: ../leavereview.php?error=invalidcomment");
            exit();
        } else {

            $sql = "INSERT INTO review(rating, comment, userid) VALUES(?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../leavereview.php?error=sqlerror1");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "isi", $rating, $comments, $user);
                mysqli_stmt_execute($stmt);
                header("Location: ../leavereview.php?error=noerror");
                exit();
            }
        }

    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}


