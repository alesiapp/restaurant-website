<?php
require "header.php";
?>

    <header class="header">
        <div class="row">
            <div class="col-md-12 text-center">
                <a class="logo"><img src="img/logo2.jpeg" alt="logo"></a>
            </div>

        </div>
    </header>


    <section id="aboutus">

        <div class="container">
            <i><h3 class="text-center" ><br><br>Venchi</h3></i>
            <div class="row">
                <!--carousel-->
                <div class="col-sm"><br><br>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/3.jpeg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/4.jpeg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/5.jpeg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div><br><br>
                </div>



                <div class="col-sm">
                    <div class="arranging"><br><hr>
                        <h4 class="text-center">Our Story</h4>
                        <p><br>With more than 145 years of history, today we bring the Italian taste and lifestyle to the world with 350 chocolate recipes and 90 flavors of ice cream, we are present in more than 70 countries, in key cities such as London, Hong Kong, Dubai and New York with the largest chocolate waterfall ever. In this continuous journey towards international expansion, we have also landed in Jakarta, Shanghai and Tokyo in the name of creativity, joy and conviviality, exceeding 180 chocolate and ice cream parlors in the world.<br><br><br></p><hr>
                    </div>
                </div>
            </div><br>
        </div>
    </section>
    <!--end of about us section-->




    <div class id="gallery"><br>
        <div class="container">
            <h3 class="text-center"><br>Gallery<br><br></h3>
            <div class="d-flex flex-row flex-wrap justify-content-center">
                <div class="d-flex flex-column">
                    <img src="img/2.jpeg" class="img-fluid">
                    <img src="img/3.jpeg" class="img-fluid">

                    <img src="img/1.jpeg" class="img-fluid">
                </div>
                <div class="d-flex flex-column">

                    <img src="img/8.jpeg" class="img-fluid">
                    <img src="img/5.jpeg" class="img-fluid">
                    <img src="img/6.jpeg" class="img-fluid">
                </div>
                <div class="d-flex flex-column">
                    <img src="img/7.jpeg" class="img-fluid">
                    <img src="img/4.jpeg" class="img-fluid">
                    <img src="img/11.jpeg" class="img-fluid">
                </div>
            </div>
        </div>
    </div><br><br>
    <section id="ourvalues">

        <div class="container">

            <div class="row">



                <div class="col-sm">
                    <div class="arranging"><br><hr>
                        <h4 class="text-center">Our Values</h4>
                        <p><br>Since 1878, we’ve been offering moments of joy, Italian style, crafted for your wellbeing.
                            Each day, our values guide us in making the right decisions and inspire our creations.<br><br><br></p><hr>
                    </div>
                </div>

                <div class="col-sm">
                    <!--carousel-->
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/12.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/13.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/14.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div><br>
        </div>
    </section>


    <div class="container" id="reservation">
        <h3 class="text-center"><br><br>Reservation<br><br></h3>
        <img  src="img/16.png" class="img-fluid rounded">
        <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-block btn-lg " style="background-color: lavenderblush">Make a reservation Now!</button>

    </div><br><br>




    <section class="map" id="footer">
        <div class="container">
            <h3 class="text-center"><br><br>Find us!</h3><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d95086.00961864593!2d12.397620685695347!3d41.86192625298417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f6052598314d7%3A0x3cda2674f907a036!2sVenchi%20Cioccolato%20e%20Gelato%2C%20Roma%20Via%20del%20Corso!5e0!3m2!1sen!2s!4v1705483517453!5m2!1sen!2s" style= "width:100%;  height:250px; border:0;" allowfullscreen></iframe>

            <div class="row staff">
                <?php
                include "./includes/functions.php";
                $rating = calculateAverageRating();

                echo '
        <div class="col">
            <h4 class="text-left"> <strong> Our rating</strong></h4>
            <h4 class="text-left"><em>'. round($rating,2) . '</em><i class="fa fa-star" aria-hidden="true"></i></h4>
        </div>';
                ?>

                <div class="col">
                    <h4 class="text-right"><strong>Visit Us</strong></h4>
                    <p class="text-right">Venchi<br><i class="fa fa-map-marker"></i>&nbsp;Via del Corso <br>Roma <br><br>email:venchi@gmail.com <br>phone: +39066784698</p>
                </div>

            </div>
        </div>
    </section>



<?php
require "footer.php";
?>