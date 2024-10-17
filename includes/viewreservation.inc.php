<?php


global $conn;
if(isset($_SESSION['id'])){

    require 'includes/dbh.inc.php';


    $user = $_SESSION['id'];




        $sql = "SELECT * FROM reservation WHERE userid = $user";
        $result =mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {


            echo
            '
            <table class="table table-hover table-responsive-sm text-center">
                <thead>
                    <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Guests</th>
                        <th scope="col">Reservation Date</th>
                        <th scope="col">Time Zone</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Comments</th>
                        <th class="table-danger" scope="col"></th>
                    </tr>
                </thead> ';
            while($row = mysqli_fetch_assoc($result)) {
                echo"
                <tbody>
                    <tr>
                    <form action='includes/delete.php' method='POST'>
                    <input name='reserv_id' type='hidden' value=".$row["idr"].">
                      <th scope='row'>".$row["name_r"]." ".$row["lastname_r"]."</th>
                      <td>".$row["nr_guest"]."</td>
                      <td>".$row["rdate"]."</td>
                      <td>".$row["time_zone"]."</td>
                      <td>".$row["telephone"]."</td>
                      <td><textarea readonly>".$row["comment"]."</textarea></td>
                      <td class='table-danger'><button type='submit' name='delete-submit' class='btn btn-danger btn-sm'>Cancel</button></td>
                          </form>
                    </tr>
              </tbody>";

            }
            echo "</table>";


        }
        else {    echo "<p class='text-white text-center bg-danger'>Your reservation list is empty!<p>"; }





    mysqli_close($conn);
}


