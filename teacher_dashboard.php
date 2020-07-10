<?php

include '../database/dbconnect.php';
session_start();

if (!$_SESSION["login_or_not"])
{
    header("location: teacher_login.php");

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
    <title>Teacher Dashboard</title>
</head>

<body>
    <div>
        <h1 class="text-center font-weight-bold">Teacher Dashboard</h1>
    </div>
    <hr>
    <a class=" d-flex justify-content-end" href="../html/logout1.php"> <button  class="btn btn-dark"  >Logout !</button></a>
    <br>
    <div class="container" style="border: 2px solid black; width:fit-conten800px;padding: 20px;">
        <div class="row ">
            <!-----student login ----->
            <div class="col-5 d-flex justify-content-around">
                <div class="card  img-fluid" style="width: 18rem;">
                    <img class="card-img-top" src="../image/student.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title">Go To Student List</h5>

                        <a href="../html/student_list.php" class="btn btn-dark">Student List</a>
                    </div>
                </div>

            </div>
            <div class="col-2">

            </div>
            <!-----teacher login----->
            <div class="col-5 d-flex justify-content-around">
                <div class="card  img-fluid" style="width: 18rem;">
                    <img class="card-img-top" src="../image/person.png" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title">Go To Your Profile</h5>

                        <a href="../html/teacher_profile.php" class="btn btn-dark">Visit Profile</a>
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