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
    <title>Teacher Profile</title>
</head>

<body>
    <div>
        <h1 class="text-center font-weight-bold">Teacher Profile</h1>
    </div>
    <hr>
    <a  class=" d-flex justify-content-end py-3 pr-3" href="../html/teacher_dashboard.php"> <button  class="btn btn-dark"  >Go To Dashboard !</button></a>
    <div class="container" style="border: 2px solid black; width:fit-conten800px;padding: 20px;">
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>Teacher First Name: </h2>

            </div>
            <div class="col-lg-8 col-sm-12 col-md-12">
                <form action="teacher_profile.php" method="post">
                    <div class="row ">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                        <h3><input name="teacher_fname" value=<?php echo $_SESSION["teacher_fname"];    ?> ></h3>
                        </div>
                        
                        <div class="col-lg-4 col-sm-12 col-md-12  d-flex  justify-content-end">
                            <button type="submit" name="btnclick1" class="btn btn-dark  ">Save !</button>

                        </div>
                    </div>
                </from>
            </div>
            
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>Teacher Last Name: </h2>

            </div>
            <div class="col-lg-8 col-sm-12 col-md-12">
                <form action="teacher_profile.php" method="post">
                    <div class="row ">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                        <h3><input name="teacher_lname" value=<?php echo $_SESSION["teacher_lname"];    ?> ></h3>
                        </div>
                        
                        <div class="col-lg-4 col-sm-12 col-md-12  d-flex  justify-content-end">
                            <button type="submit" name="btnclick2" class="btn btn-dark  ">Save !</button>

                        </div>
                    </div>
                </from>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>PhoneNo: </h2>

            </div>
            <div class="col-lg-8 col-sm-12 col-md-12">
                <form action="teacher_profile.php" method="post">
                    <div class="row ">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                        <h3><input name="teacher_phone" value=<?php echo $_SESSION["teacher_phoneno"];    ?> ></h3>
                        </div>
                        
                        <div class="col-lg-4 col-sm-12 col-md-12  d-flex  justify-content-end">
                            <button type="submit" name="btnclick3" class="btn btn-dark  ">Save !</button>

                        </div>
                    </div>
                </from>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>Designation: </h2>

            </div>
            <div class="col-lg-8 col-sm-12 col-md-12">
                <form action="teacher_profile.php" method="post">
                    <div class="row ">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                        <h3><input name="teacher_designation" value=<?php echo $_SESSION["teacher_designation"];    ?> ></h3>
                        </div>
                        
                        <div class="col-lg-4 col-sm-12 col-md-12  d-flex  justify-content-end">
                            <button type="submit" name="btnclick4" class="btn btn-dark  ">Save !</button>

                        </div>
                    </div>
                </from>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>Email Address: </h2>

            </div>
            <div class="col-lg-8 col-sm-12 col-md-12">
                <form action="teacher_profile.php" method="post">
                    <div class="row ">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                        <h3><input name="teacher_email" value=<?php echo $_SESSION["teacher_email"];    ?> ></h3>
                        </div>
                        
                        <div class="col-lg-4 col-sm-12 col-md-12  d-flex  justify-content-end">
                            <button type="submit" name="btnclick5" class="btn btn-dark  ">Save !</button>

                        </div>
                    </div>
                </from>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>Password: </h2>

            </div>
            <div class="col-lg-8 col-sm-12 col-md-12">
                <form action="teacher_profile.php" method="post">
                    <div class="row ">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                        <h3><input name="teacher_password" value=<?php echo $_SESSION["teacher_password"];    ?> ></h3>
                        </div>
                        
                        <div class="col-lg-4 col-sm-12 col-md-12  d-flex  justify-content-end">
                            <button type="submit" name="btnclick6" class="btn btn-dark  ">Save !</button>

                        </div>
                    </div>
                </from>
            </div>
        </div>
        <hr>
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

<!----------------------php code ------------------------------------->
<?php

if (isset($_POST["btnclick1"]))
{
    $teacher_fname=$_POST["teacher_fname"];
    $teacher_email=$_SESSION["teacher_email"];
    $query = "UPDATE teacher_register SET teacher_fname='$teacher_fname' WHERE teacher_email='$teacher_email'"; 
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert("User data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("User data not Updated .. please try again")</script>';
    } 

}
elseif (isset($_POST["btnclick2"]))
{
    $teacher_lname=$_POST["teacher_lname"];
    $teacher_email=$_SESSION["teacher_email"];
    $query = "UPDATE teacher_register SET teacher_lname='$teacher_lname' WHERE teacher_email='$teacher_email'";  
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert("User data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("User data not Updated .. please try again")</script>';
    }

}
elseif (isset($_POST["btnclick3"]))
{
    $teacher_phoneno=$_POST["teacher_phoneno"];
    $teacher_email=$_SESSION["teacher_email"];
    $query = "UPDATE teacher_register SET teacher_phoneno='$teacher_phoneno' WHERE teacher_email='$teacher_email'"; 
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert("User data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("User data not Updated .. please try again")</script>';
    } 

}
elseif (isset($_POST["btnclick4"]))
{
    $teacher_designation=$_POST["teacher_designation"];
    $teacher_email=$_SESSION["teacher_email"];
    $query = "UPDATE teacher_register SET teacher_designation='$teacher_designation' WHERE teacher_email='$teacher_email'";  
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert("User data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("User data not Updated .. please try again")</script>';
    }

}
elseif (isset($_POST["btnclick5"]))
{
    $teacher_email=$_POST["teacher_email"];
    $teacher_email=$_SESSION["teacher_email"];
    $query = "UPDATE teacher_register SET teacher_email='$teacher_email' WHERE teacher_email='$teacher_email'";  
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert("User data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("User data not Updated .. please try again")</script>';
    }

}
elseif (isset($_POST["btnclick6"]))
{
    $teacher_password=$_POST["teacher_password"];
    $teacher_email=$_SESSION["teacher_email"];
    $query = "UPDATE teacher_register SET teacher_password='$teacher_password' WHERE teacher_email='$teacher_email'";  
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert("User data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("User data not Updated .. please try again")</script>';
    }

}

?>