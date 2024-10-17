<?php
require "header.php";
?>

    <br><br>
    <div class="container">
        <h3 class="text-center"><br>View Reservations<br></h3>

        <?php
        if(isset($_SESSION['id'])){



            if(isset($_GET['delete'])){
                if($_GET['delete'] == "error") {
                    echo '<h5 class="bg-danger text-center">Error!</h5>';
                }
                if($_GET['delete'] == "success"){
                    echo '<h5 class="bg-success text-center">Delete was successfull</h5>';
                }
            }
            require 'includes/viewreservation.inc.php';

        }
        else {
            echo '	<p class="text-center text-danger"><br>You are currently not logged in!<br></p>
       <p class="text-center">In order to make a reservation you have to create an account!<br><br><p>';
        }
        ?>

    </div>
    <br><br>


<?php
require "footer.php";
?>