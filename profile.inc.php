<<?php

session_start();
global $conn;
require_once "includes/dbh.inc.php";



if (isset($_POST['Save'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    include "./includes/functions.php";

    if(emptyInputSignup($name,$email,$password,$confirmPassword)!==false){
        header("location:profile.php?error=emptyinput");
        exit();
    }
    if(invalidEmail($email)!==false){
        header("location:profile.php?error=invalidemail");
        exit();
    }
    if(!between($password,6,100)){
        header("location:profile.php?error=invalidpassword");
        exit();
    }
    if(!between($name,2,20)){
        header("location:profile.php?error=invalidname");
        exit();
    }
    else if(uidExists($conn,$email)!==false){
        header("Location:profile.php?error=usernametaken");
        exit();
    }
    if(pwdMatch($password,$confirmPassword)!==false){
        header("location:profile.php?error=passwordsdontmatch");
        exit();
    }

    else {
        $hashpassword = password_hash($password, PASSWORD_DEFAULT);
        $query_update = "UPDATE users
                     SET emri = '$name',
                         email = '$email',
                         pwd='$hashpassword'
                     WHERE id = '" . $_SESSION['id'] . "'";

        $result_update = mysqli_query($conn, $query_update);

        if ($result_update) {
            // Update successful
            header("location:profile.php?error=noerror");
        } else {
            // Update failed
            header("location:profile.php?error=sqlerror");
        }

    }



}
else if(!isset($_POST['Save'])){
header("location:profile.php");}