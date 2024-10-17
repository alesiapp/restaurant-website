<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Venchi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .flex-column {
        max-width : 260px;
    }

    .container {
        background: ghostwhite;
    }

    .img {
        margin: 5px;
    }

    .logo img{
        width:150px;
        height:250px;
        margin-top:90px;
        margin-bottom:40px;
    }
</style>

<body>
<!---navbar--->
<nav class="navbar navbar-expand-md navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <strong><em>Venchi</em></strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navi">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navi">
            <ul class="navbar-nav mr-auto">


                <?php

                if(isset($_SESSION['id'])){ echo'
                    <li class="nav-item">
                        <a class="nav-link" href="reservation.php" >New Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewreservation.php" >View Reservations</a>
                    </li>
                    
                        <li class="nav-item">
                        <a class="nav-link" href="leavereview.php" >Leave Review</a>
                    </li>';

                ;




                }
                else

                echo'
                    <li class="nav-item">
	                 <a class="nav-link" href="#aboutus">About Us</a>
	             </li>
	            <li class="nav-item">
	                <a class="nav-link" href="#gallery">Gallery</a>
	            </li>
	             <li class="nav-item">
                        <a class="nav-link" href="#ourvalues">Our Values</a>
                    </li>
	         
                    <li class="nav-item">
                        <a class="nav-link" href="#reservation">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Find Us</a>
                    </li> 
                    
                    ';
                ?>

            </ul>

            <?php

            if(isset($_SESSION['id'])){
                echo '
                    <form class="navbar-form navbar-right" action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit" class="btn btn-outline-dark" href="includes/logout.inc.php">Logout</button>
                    </form>
                     <form class="navbar-form navbar-right" action="profile.php" method="post">
                 <button type="submit" name="logout-submit" class="btn btn-outline-dark" href="profile.php">My profile</button>
                   </form> ';

            }
            else{
                echo '
                    <div>
                    <ul class="navbar-nav ml-auto">
			 <form class="d-flex" role="search">
                <a class="btn btn-outline-success nabar-buttons"  href="signup.php">Sign Up</a>
                <a class="btn btn-outline-success nabar-buttons"  href="login.php">Login</a>
            </form>
                    </ul> 
                    </div>
                    '
                ;}
            ?>

        </div>
    </div>
</nav>








