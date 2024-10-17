<?php

require_once "header.php";


?>


<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="img/logo2.jpeg" class="img-fluid" alt="sign up">
        </div>
        <div class="col-md-6">
            <form method="post" action="signup_api.php">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" required>
                    <div class="form-text"
                    <span id="nameHelp" class="error"></span>
                </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
            <div class="form-text">
                <span id="emailHelp" class="error"></span>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <div class="form-text">
                <span id="passwordHelp" class="error"></span>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputConfirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
            <div class="form-text">
                <span id="confirmPasswordHelp" class="error"></span>
            </div>
        </div>
        <button type="submit" name="Save" class="btn btn-primary" >Save</button>
        </form>
    </div>
</div>
<script>
    document.getElementById("name").addEventListener("blur", validateName);
    document.getElementById("email").addEventListener("blur", validateEmail);
    document.getElementById("password").addEventListener("input", validatePassword);
    document.getElementById("confirmPassword").addEventListener("input", validateConfirmPassword);

    function validateName() {
        var name = document.getElementById("name").value;
        if (name.length < 2) {
            document.getElementById("nameHelp").textContent = "Name must be at least 2 characters long.";
        } else {
            document.getElementById("nameHelp").textContent = "";
        }
    }

    function validateEmail() {
        var email = document.getElementById("email").value;
        var emailPattern = /[a-zA-Z0-9]+[@][a-z]{3,}[\.][a-z]{2,3}/;
        if (!emailPattern.test(email)) {
            document.getElementById("emailHelp").textContent = "Please enter a valid email address.";
        } else {
            document.getElementById("emailHelp").textContent = "";
        }
    }

    function validatePassword() {
        var password = document.getElementById("password").value;
        if (password.length < 6) {
            document.getElementById("passwordHelp").textContent = "Password must be at least 6 characters long.";
        } else {
            document.getElementById("passwordHelp").textContent = "";
        }
    }

    function validateConfirmPassword() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;
        if (password !== confirmPassword) {
            document.getElementById("confirmPasswordHelp").textContent = "Passwords do not match.";
        } else {
            document.getElementById("confirmPasswordHelp").textContent = "";
        }
    }
</script>



<?php
if(isset($_GET["error"])){

if($_GET["error"]=="emptyinput"){
    echo "<p class='bg-danger text-center text-white'>Fill in the fields</p>";
}
else if($_GET["error"]=="invalidemail"){
    echo "<p class='bg-danger text-center text-white'>Invalid email</p>";
}
else if($_GET["error"]=="passwordsdontmatch"){
    echo "<p class='bg-danger text-center text-white'>Passwords dont match</p>";
}
else if($_GET["error"]=="usernametaken"){
    echo "<p class='bg-danger text-center text-white'>Ekziston nje perdorues me kete email</p>";
}
else if($_GET["error"]=="invalidpassword"){
    echo "<p class='bg-danger text-center text-white'>Passwordi duhet te kete te pakten 6 karaktere</p>";
}
else if($_GET["error"]=="invalidname"){
    echo "<p class='bg-danger text-center text-white'>Invalid name</p>";
}
else if($_GET["error"]=="error"){
    echo "<p class='bg-danger text-center text-white'>Error </p>";
}
}


?>


<?php
require_once "footer.php";
?>




</body>
</html>