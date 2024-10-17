<?php
require_once "includes/dbh.inc.php";
include "includes/functions.php";

if (isset($_POST["login"])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

if(emptyInputLogin($email,$password)!==false){
    header("location:login.php?error=emptyinput");
    exit();
}
else
loginuser($conn,$email,$password);
}

