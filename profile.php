<?php

// Header
require_once "header.php";
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
} else if (empty($_SESSION['id'])){
    header("Location: login.php");
}




include "includes/dbh.inc.php";

$query_user_data = "SELECT * 
                    FROM users 
                    WHERE id = '".mysqli_real_escape_string($conn, $_SESSION['id'])."' ";

$result_user_data = mysqli_query($conn, $query_user_data);

if (!$result_user_data){
    echo "Error";
    exit;
}

$data = mysqli_fetch_assoc($result_user_data);

?>


<div class="container mt-4 mx-auto">
    <hr class="my-4">
    <div class="row">
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">Profile Details</div>
                <div class="card-body">
                    <form id="profileForm" action="profile.inc.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label" for="name">First name</label>
                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter your first name" value="<?= $data['emri'] ?>">
                            <span id="nameHelp" class="error"></span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="email">Email address</label>
                            <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email address" value="<?= $data['email'] ?>">
                            <span id="emailHelp" class="error"></span>
                        </div>

                        <div class="mb-3">

                                <label class="form-label" for="password">Password</label>
                                <input class="form-control" id="password" name="password" type="password" placeholder="Enter your password">
                                <span id="passwordHelp" class="error"></span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="confirmPassword">Confirm Password</label>
                                <input class="form-control" id="confirmPassword" name="confirmPassword" type="password" placeholder="Confirm your password">
                                <span id="confirmPasswordHelp" class="error"></span>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="Submit" name="Save" ">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if(isset($_GET["error"])){

if($_GET["error"]=="emptyinput"){
    echo "<p class='bg-danger text-center'>Fill in the fields</p>";
}
else if($_GET["error"]=="invalidemail"){
    echo "<p class='bg-danger text-center'>Invalid email</p>";
}
else if($_GET["error"]=="passwordsdontmatch"){
    echo "<p class='bg-danger text-center'>Passwords dont match</p>";
}
else if($_GET["error"]=="invalidpassword"){
    echo "<p class=' text-white bg-danger text-center'>Password should be at least 6 characters</p>";
}
else if($_GET["error"]=="invalidname"){
    echo "<p class=' text-white bg-danger text-center'>Invalid name</p>";
}
else if($_GET["error"]=="usernametaken"){
    echo "<p class=' text-white bg-danger text-center'>Invalid email</p>";
}
else if($_GET["error"]=="noerror"){
    echo "<p class=' text-white bg-success text-center'>Changes are saved</p>";
}
}

?>


<?php
include "footer.php";
?>


