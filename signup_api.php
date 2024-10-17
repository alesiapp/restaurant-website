<?php


global $conn;
require_once "includes/dbh.inc.php";


if (isset($_POST['Save'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    include "./includes/functions.php";

    if(emptyInputSignup($name,$email,$password,$confirmPassword)!==false){
        header("Location:signup.php?error=emptyinput");
        exit();
    }
   else  if(!between($password,6,100)){
        header("Location:signup.php?error=invalidpassword");
    }
   else if(!preg_match("/^[a-zA-Z ]*$/", $name) || !between($name,2,20)) {
       header("Location:signup.php?error=invalidname");
       exit();
   }
    else if(invalidEmail($email)!==false){
        header("Location:signup.php?error=invalidemail");
        exit();
    }
    else if(pwdMatch($password,$confirmPassword)!==false){
        header("Location:signup.php?error=passwordsdontmatch");
        exit();
    }
    else if(uidExists($conn,$email)!==false){
        header("Location:signup.php?error=usernametaken");
        exit();
    }
    else
    createUser($conn,$name,$email,$password);

}
else
header("location:signup.php?error=noinput");

