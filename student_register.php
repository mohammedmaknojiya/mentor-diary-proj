<?php

include '../database/dbconnect.php';

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

    <title>Student Registration</title>
</head>

<body>
    
    <div class="container my-5" style="border: 2px solid black; padding-top: 20px;padding-bottom:10px;">
  
    
        <h1 class="text-center">
            Student Registration
        </h1>
        <!------Register form  ---->
        <br>
        <form action="student_register.php" method="post">
            <label for="exampleInputEmail1">Your Name</label>
            <div class="row form-group">

                <div class="col">

                    <input type="text" class="form-control" name="std_fname" placeholder="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="std_lname" placeholder="Last name">
                </div>
            </div>

            <!----<div class="form-group">
                <label for="exampleFormControlFile1">Upload Self Image</label>
                <input type="file" class="form-control-file " id="exampleFormControlFile1">
            </div>  ----->

            <div class="form-group">
                <label for="exampleInputEmail1">Stuent Phone No</label>
                <input type="number" class="form-control" name="std_phoneno" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="eg:1234567890">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Parents Phone No</label>
                <input type="number" class="form-control" name="std_parents_phoneno" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="eg:1234567890">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Stuent College Roll No</label>
                <input type="number" class="form-control" name="std_rollno" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="eg:1234567">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Stuent Branch</label>
                <input type="text" class="form-control" name="std_branch" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="eg:IT">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Stuent Address</label>
                <input type="text" class="form-control" name="std_addr" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="eg:abcd efgh">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="std_emailid" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="std_password" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-dark" name="btnclick">Register !</button>
        </form>
        <br>
            <a  href="../html/student_login.php"> <button  class="btn btn-dark"  >Go To Login !</button></a>

        <br>


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

if (isset($_POST["btnclick"]))
{
    $std_fname=$_POST["std_fname"];
    $std_lname=$_POST["std_lname"];
   // $std_image=$_POST["std_image"];
    $std_addr=$_POST["std_addr"];
    $std_rollno=$_POST["std_rollno"];
    $std_branch=$_POST["std_branch"];
    $std_phoneno=$_POST["std_phoneno"];
    $std_parents_phoneno=$_POST["std_parents_phoneno"];
    $std_password=$_POST["std_password"];
    $std_emailid=$_POST["std_emailid"];


    $query = "INSERT INTO student_register(`std_fname`, `std_lname`, `std_addr`, `std_rollno`, `std_branch`, `std_phoneno`, `std_parents_phoneno`, `std_password`, `std_email`) VALUES ('$std_fname','$std_lname','$std_addr','$std_rollno','$std_branch','$std_phoneno','$std_parents_phoneno','$std_password','$std_emailid')";

    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert("User data inserted Registered.. Go to login")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("User data not inserted .. please try again")</script>';
    }

}
?>