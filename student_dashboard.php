<?php

include '../database/dbconnect.php';
session_start();

if (!$_SESSION["login_or_not"])
{
    header("location: student_login.php");

}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--our css file---->
    <link rel="stylesheet" href="../css/style.css">
    <title>Student Dashboard</title>
</head>

<body>
    <div>
        <h1 class="text-center font-weight-bold">Student Dashboard</h1>
        <a class=" d-flex justify-content-end" href="../html/logout.php"> <button  class="btn btn-dark"  >Logout !</button></a>

    </div>
    <hr>
    <div class="row">
        <div class="col-lg-8 col-sm-12 col-md-12">
            <h2>Student Name: <?php echo  $_SESSION["std_fname"]." ".$_SESSION["std_lname"];?></h2>
        </div>
        <div class="col-lg-4 col-sm-12 col-md-12 ">
            <h2>Student Rollno: <?php echo  $_SESSION["std_rollno"];?></h2>
        </div>
    </div>
    <hr>



    <div class="container" style="border: 2px solid black; width:fit-conten800px;padding: 20px;">
        <!-----first row ----->
        <div class="row ">

            <div class="col-5 d-flex justify-content-around">
                <div class="card  img-fluid" style="width: 18rem;">

                    <div class="card-body text-center">
                        <h5 class="card-title">Add Semester Details</h5>

                        <a href="../html/semester.php" class="btn btn-dark">Semester</a>
                    </div>
                </div>

            </div>
            <div class="col-2"> </div>
            <div class="col-5 d-flex justify-content-around">
                <div class="card  img-fluid" style="width: 18rem;">

                    <div class="card-body text-center">
                        <h5 class="card-title">Go To Your Profile</h5>

                        <a href="../html/student_profile.php" class="btn btn-dark">Visit Profile</a>
                    </div>
                </div>

            </div>
        </div>
        <br>
        <!-----second row ----->
        <div class="row ">

            <div class="col-5 d-flex justify-content-around">
                <div class="card  img-fluid" style="width: 18rem;">

                    <div class="card-body text-center">
                        <h5 class="card-title">Add SSC Details</h5>

                        <a href="../html/ssc.php" class="btn btn-dark">Xth Details</a>
                    </div>
                </div>

            </div>
            <div class="col-2"> </div>
            <div class="col-5 d-flex justify-content-around">
                <div class="card  img-fluid" style="width: 18rem;">

                    <div class="card-body text-center">
                        <h5 class="card-title">Add HSC Details</h5>

                        <a href="../html/hsc.php" class="btn btn-dark">XIIth Details</a>
                    </div>
                </div>

            </div>
        </div>
        <br>
        <!-----third row ----->
        <div class="row ">

            <div class="col-5 d-flex justify-content-around">
                <div class="card  img-fluid" style="width: 18rem;">

                    <div class="card-body text-center">
                        <h5 class="card-title">Add Internship Details</h5>

                        <a href="../html/internship.php" class="btn btn-dark">Internships</a>
                    </div>
                </div>

            </div>
            <div class="col-2"> </div>
            <div class="col-5 d-flex justify-content-around">
                <div class="card  img-fluid" style="width: 18rem;">

                    <div class="card-body text-center">
                        <h5 class="card-title">Add Certification Details</h5>

                        <a href="../html/certification.php" class="btn btn-dark">Certification </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>