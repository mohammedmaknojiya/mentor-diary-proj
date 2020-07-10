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
    <title>Student Profile</title>
</head>

<body>
    <div>
        <h1 class="text-center font-weight-bold">Student Profile</h1>
    </div>
    <hr>
    <a  class=" d-flex justify-content-end py-3 pr-3" href="../html/student_dashboard.php"> <button  class="btn btn-dark"  >Go To Dashboard !</button></a>

    <div class="container" style="border: 2px solid black; width:fit-conten800px;padding: 20px;">
   
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>Student First Name: </h2>

            </div>
            <div class="col-lg-8 col-sm-12 col-md-12">
                <form action="student_profile.php" method="post">
                    <div class="row ">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                        <h3><input name="std_fname" value=<?php echo $_SESSION["std_fname"];    ?> ></h3>
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
                <h2>Student Last Name: </h2>

            </div>
             <form action="student_profile.php" method="post">
            <div class="col-lg-5 col-md-12 col-sm-12">
            <h3><input name="std_lname" value=<?php echo $_SESSION["std_lname"];    ?> ></h3>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                <button type="submit" name="btnclick2" class="btn btn-dark ">Save !</button>

            </div>
            </from>
        </div>
        <hr>
        <!--<div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>Student Image: </h2>

            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <h3> image.jpg name present</h3>

            </div>
            <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                <button type="button" class="btn btn-dark">Edit !</button>

            </div>
        </div>
        <hr>--->
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>PhoneNo: </h2>

            </div>
             <form action="student_profile.php" method="post">
            <div class="col-lg-5 col-md-12 col-sm-12">
            <h3><input name="std_phoneno" value=<?php echo $_SESSION["std_phoneno"];    ?> ></h3>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                <button type="submit" name="btnclick3" class="btn btn-dark ">Save !</button>

            </div>
            </from>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>Parents PhoneNo: </h2>

            </div>
             <form action="student_profile.php" method="post">
            <div class="col-lg-5 col-md-12 col-sm-12">
            <h3><input name="std_parents_phoneno" value=<?php echo $_SESSION["std_parents_phoneno"];    ?> ></h3>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                <button type="submit" name="btnclick4" class="btn btn-dark ">Save !</button>

            </div>
            </from>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>RollNo: </h2>

            </div>
             <form action="student_profile.php" method="post">
            <div class="col-lg-5 col-md-12 col-sm-12">
            <h3><input name="std_rollno" value=<?php echo $_SESSION["std_rollno"];    ?> ></h3>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                <button type="submit" name="btnclick5" class="btn btn-dark ">Save !</button>

            </div>
            </from>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>Branch: </h2>

            </div>
             <form action="student_profile.php" method="post">
            <div class="col-lg-5 col-md-12 col-sm-12">
            <h3><input name="std_branch" value=<?php echo $_SESSION["std_branch"];    ?> ></h3>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                <button type="submit" name="btnclick6" class="btn btn-dark ">Save !</button>

            </div>
            </from>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>Address: </h2>

            </div>
             <form action="student_profile.php" method="post">
            <div class="col-lg-5 col-md-12 col-sm-12">
            <h3><input name="std_addr" value=<?php echo $_SESSION["std_addr"];    ?> ></h3>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                <button type="submit" name="btnclick7" class="btn btn-dark ">Save !</button>

            </div>
            </from>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>Email Address: </h2>

            </div>
             <form action="student_profile.php" method="post">
            <div class="col-lg-5 col-md-12 col-sm-12">
            <h3><input name="std_email" value=<?php echo $_SESSION["std_email"];    ?> ></h3>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                <button type="submit" name="btnclick8" class="btn btn-dark ">Save !</button>

            </div>
            </from>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>Password: </h2>

            </div>
             <form action="student_profile.php" method="post">
            <div class="col-lg-5 col-md-12 col-sm-12">
            <h3><input name="std_password" value=<?php echo $_SESSION["std_password"];    ?> ></h3>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                <button type="submit" name="btnclick9" class="btn btn-dark ">Save !</button>

            </div>
            </from>
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
    $std_fname=$_POST["std_fname"];
    $std_rollno=$_SESSION["std_rollno"];
    $query = "UPDATE student_register SET std_fname='$std_fname' WHERE std_rollno='$std_rollno'"; 
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
    $std_lname=$_POST["std_lname"];
    $std_rollno=$_SESSION["std_rollno"];
    $query = "UPDATE student_register SET std_lname='$std_lname' WHERE std_rollno='$std_rollno'";  
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
    $std_phoneno=$_POST["std_phoneno"];
    $std_rollno=$_SESSION["std_rollno"];
    $query = "UPDATE student_register SET std_phoneno='$std_phoneno' WHERE std_rollno='$std_rollno'"; 
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
    $std_parents_phoneno=$_POST["std_parents_phoneno"];
    $std_rollno=$_SESSION["std_rollno"];
    $query = "UPDATE student_register SET std_parents_phoneno='$std_parents_phoneno' WHERE std_rollno='$std_rollno'";  
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
    $std_rollno=$_POST["std_rollno"];
    $std_rollno=$_SESSION["std_rollno"];
    $query = "UPDATE student_register SET std_rollno='$std_rollno' WHERE std_rollno='$std_rollno'";  
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
    $std_branch=$_POST["std_branch"];
    $std_rollno=$_SESSION["std_rollno"];
    $query = "UPDATE student_register SET std_branch='$std_branch' WHERE std_rollno='$std_rollno'";  
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert("User data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("User data not Updated .. please try again")</script>';
    }

}
elseif (isset($_POST["btnclick7"]))
{
    $std_addr=$_POST["std_addr"];
    $std_rollno=$_SESSION["std_rollno"];
    $query = "UPDATE student_register SET std_addr='$std_addr' WHERE std_rollno='$std_rollno'";  
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert("User data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("User data not Updated .. please try again")</script>';
    }

}
elseif (isset($_POST["btnclick8"]))
{
    $std_email=$_POST["std_email"];
    $std_rollno=$_SESSION["std_rollno"];
    $query = "UPDATE student_register SET std_email='$std_email' WHERE std_rollno='$std_rollno'";  
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert("User data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("User data not Updated .. please try again")</script>';
    }

}
elseif (isset($_POST["btnclick9"]))
{
    $std_password=$_POST["std_password"];
    $std_rollno=$_SESSION["std_rollno"];
    $query = "UPDATE student_register SET std_password='$std_password' WHERE std_rollno='$std_rollno'"; 
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert("User data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("User data not Updated .. please try again")</script>';
    } 

}




?>