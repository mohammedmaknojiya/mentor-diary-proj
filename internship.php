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

    <title>Student Internship</title>
</head>

<body>
    <a  class=" d-flex justify-content-end py-3 pr-3" href="../html/student_dashboard.php"> <button  class="btn btn-dark"  >Go To Dashboard !</button></a>

    <div class="container my-5" style="border: 2px solid black; padding-top: 20px;">
        <h1 class="text-center">
            Student Internships
        </h1>
        <!------Register form  ---->
        <br>
        <form action="internship.php" method="post">
            <div class="form-group">
                <label for="formGroupExampleInput">Company Name</label>
                <input type="text" name="int_company_name" class="form-control" id="formGroupExampleInput" placeholder="ABC pvt ltd">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Position</label>
                <input type="text" name="std_position" class="form-control" id="formGroupExampleInput" placeholder="Software Developer">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Description</label>
                <input type="text" name="std_int_description" class="form-control" id="formGroupExampleInput" placeholder="what you have done">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Duration</label>
                <input type="number" name="std_int_duration" class="form-control" id="formGroupExampleInput" placeholder="eg : 6 months ">
            </div>




            <button type="submit" name="btnclick" class="btn btn-dark">Save !</button>
        </form>
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
    $int_company_name=$_POST["int_company_name"];
    $std_position=$_POST["std_position"];
    $std_int_description=$_POST["std_int_description"];
    $std_int_duration=$_POST["std_int_duration"];
    $std_rollno=$_SESSION["std_rollno"];
    
    $query = "INSERT INTO std_internship(`std_rollno`, `int_company_name`, `std_position`, `std_int_description`, `std_int_duration`) VALUES ('$std_rollno','$int_company_name','$std_position','$std_int_description','$std_int_duration')";

    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert("User internship data is inserted .. ")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("User data not inserted .. please try again")</script>';
    }

}
?>