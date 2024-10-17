<?php
require "header.php";
echo'
<br><br>
    <div class="container">
        <h3 class="text-center"><br>Leave a feedback<br></h3>';
if(isset($_SESSION['id'])){

echo '

  
        <div class="row">
            <div class="col-md-6 offset-md-3">
    <div class="signup-form">
        <form action="includes/feedback.inc.php" method="post">
            <div class="form-group">
            <label>How would you rate us from 1-5</label>
        	<input type="number" class="form-control" min="1" max="5" name="rating" placeholder="Rating" required="required">
                <small class="form-text text-muted">Minimum value is 1</small>
            </div>
            <div class="form-group">
            <label>Enter extra Comments</label>
                <textarea class="form-control" name="comments" placeholder="Comments" rows="3"></textarea>
                <small class="form-text text-muted">Comments must be less than 200 characters</small>
            </div>
            <div class="form-group">
                <button type="submit" name="submitreview" class="btn btn-dark btn-lg btn-block">Submit</button>
            </div>
        </form>
          

        <br><br>
    </div>
            ';}

else if(!isset($_SESSION['id'])) {
        echo '	<p class="text-center text-danger"><br>You are currently not logged in!<br></p>';
    }
echo'
            </div>
        </div>
    </div>
    <br><br>';

if(isset($_GET["error"])){

    if($_GET["error"]=="emptyinput"){
        echo "<p class='text-white text-center bg-danger'>Fill in the fields</p>";
    }


    else if($_GET["error"]=="invalidcomment"){
        echo "<p class='text-white text-center bg-danger'>Invalid comment</p>";
    }
    else if($_GET["error"]=="noerror")
        echo "<p class=' text-white text-center bg-success'>Review submitted</p>";
}





require "footer.php";
