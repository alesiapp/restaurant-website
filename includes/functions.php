<?php
function emptyInputSignup($name,$email,$password,$confirmPassword){
    $result =true;

    if(empty($name)|| empty($email)||empty($password)||empty($confirmPassword)){
        $result=true;
    }
    else
        $result=false;
    return $result;
}
function invalidemail($email)
{
    $result;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result=  true;
    }
    else
        $result=false;
    return $result;
}
function pwdMatch($pwd,$confirmpwd){
    $result;
    if($pwd!==$confirmpwd)
        $result=true;
    else
        $result=false;
    return $result;
}
function uidExists($conn,$email){
    $sql="SELECT * FROM users WHERE email = ?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:signup.php?error=userexists");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);
    $resultdata=mysqli_stmt_get_result($stmt);
    if($row=mysqli_fetch_assoc($resultdata)){
        return $row;



    }
    else
        $result=false;
    return $result;



}
function  createuser($conn, $name, $email, $password) {
    $sql = "INSERT INTO users (emri, email, pwd) VALUES (?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: signup.php?error=error");
        exit();
    }

    $hashpassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashpassword);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    header("location: login.php");
    exit();
}
function emptyInputLogin($email,$password){
    $result =true;

    if( empty($email)||empty($password)){
        $result=true;
    }
    else
        $result=false;
    return $result;
}
function loginuser($conn,$email,$password){
    $uidExists=uidExists($conn,$email);
    if($uidExists===false){
        header("location:login.php?error=userdoesnotexist");
        exit();
    }
    $pwdhashed=$uidExists["pwd"];
    $checkpwd=password_verify($password,$pwdhashed);
    if($checkpwd===false) {
        header("location:login.php?error=wrongpassword");
        exit();

    }
    else{
        session_start();
        $_SESSION["id"]=$uidExists["id"];
        header("location:index.php");
        exit();

}
}

include "includes/dbh.inc.php";
function calculateAverageRating() {
    global $conn;
    $sql = "SELECT rating FROM review";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result)>0) {
        $totalRatings = 0;
        $numRatings = 0;

        while ($row = mysqli_fetch_assoc($result)) {
            $totalRatings += $row['rating'];
            $numRatings++;
        }

        if ($numRatings > 0) {
            $averageRating = $totalRatings / $numRatings;
            return $averageRating;
        } else {
            return 0;
        }
    }
    else {
        return 0;
    }

}
function between($val, $x, $y){
    $val_len = strlen($val);
    return ($val_len >= $x && $val_len <= $y)?TRUE:FALSE;
}




