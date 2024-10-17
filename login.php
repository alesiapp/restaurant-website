<?php
// Header
require_once "header.php";
?>
<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="img/logo2.jpeg" class="img-fluid" alt="sign up">
        </div>
        <div class="col-md-6">
            <form method="post" action="login_api.php" >
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div class="form-text">
                        <span id="emailHelp" class="error"></span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <div class="form-text">
                        <span id="passwordHelp" class="error"></span>
                    </div>
                </div>
                <button type="submit" name="login" class="btn btn-primary" >Login</button>
            </form>
        </div>
    </div>
    <?php
    if(isset($_GET["error"])){

        if($_GET["error"]=="emptyinput"){
            echo "<p class='text-white text-center bg-danger'>Fill in the fields</p>";
        }
        else if($_GET["error"]=="userdoesnotexist"){
            echo "<p class='text-white text-center bg-danger'>Invalid email</p>";
        }

        else if($_GET["error"]=="wrongpassword"){
            echo "<p class='text-white text-center bg-danger'>Incorrect password</p>";
        }
    }

    ?>
</div>


<?php
require_once "footer.php";
?>




</body>
</html>
