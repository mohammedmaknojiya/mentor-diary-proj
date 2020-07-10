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

    <title>Student XIIth Details</title>
</head>

<body>
    <a  class=" d-flex justify-content-end py-3 pr-3" href="../html/student_dashboard.php"> <button  class="btn btn-dark"  >Go To Dashboard !</button></a>

    <div class="container my-5" style="border: 2px solid black; padding-top: 20px;">
        <h1 class="text-center">
            Student XIIth Details
        </h1>
        <!------Register form  ---->
        <br>
        <form action="hsc.php" method="post">
            <div class="form-group">
                <label for="formGroupExampleInput">Which Board</label>
                <input type="text" name="std_twelfth_board" class="form-control" id="formGroupExampleInput" placeholder="Maharashtra Board">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Which Year</label>
                <input type="number" name="std_twelfth_passing_year" class="form-control" id="formGroupExampleInput" placeholder="2015">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Percentage</label>
                <input type="number" name="std_twelfth_percentage" class="form-control" id="formGroupExampleInput" placeholder="95">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">College Name</label>
                <input type="text" name="std_twelfth_college_name" class="form-control" id="formGroupExampleInput" placeholder="abcd">
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
    $std_twelfth_board=$_POST["std_twelfth_board"];
    $std_twelfth_passing_year=$_POST["std_twelfth_passing_year"];
    $std_twelfth_percentage=$_POST["std_twelfth_percentage"];
    $std_twelfth_college_name=$_POST["std_twelfth_college_name"];
    $std_rollno=$_SESSION["std_rollno"];
    
    $query = "INSERT INTO std_twelfth_score(`std_rollno`, `std_twelfth_board`, `std_twelfth_passing_year`, `std_twelfth_percentage`, `std_twelfth_college_name`) VALUES ('$std_rollno','$std_twelfth_board','$std_twelfth_passing_year','$std_twelfth_percentage','$std_twelfth_college_name')";

    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert("User hsc data is inserted .. ")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("User data not inserted .. please try again")</script>';
    }

}
?>