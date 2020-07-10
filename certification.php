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

    <title>Student Certification</title>
</head>

<body>
    <a  class=" d-flex justify-content-end py-3 pr-3" href="../html/student_dashboard.php"> <button  class="btn btn-dark"  >Go To Dashboard !</button></a>

    <div class="container my-5" style="border: 2px solid black; padding-top: 20px;">
        <h1 class="text-center">
            Student Certifications
        </h1>
        <!------Register form  ---->
        <br>
        <form action="certification.php" method="post">
            <div class="form-group">
                <label for="formGroupExampleInput">Course Name</label>
                <input type="text" name="certificate_course_name" class="form-control" id="formGroupExampleInput" placeholder="ML a to z">
            </div>


            <div class="form-group">
                <label for="formGroupExampleInput">Description</label>
                <input type="text" name="course_description" class="form-control" id="formGroupExampleInput" placeholder="What you have done">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">From Where</label>
                <input type="text" name="course_from_where" class="form-control" id="formGroupExampleInput" placeholder="Udemy">
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
    $certificate_course_name=$_POST["certificate_course_name"];
    $course_description=$_POST["course_description"];
    $course_from_where=$_POST["course_from_where"];
    $std_rollno=$_SESSION["std_rollno"];
    
    $query = "INSERT INTO std_certification(`std_rollno`, `certificate_course_name`, `course_description`, `course_from_where`) VALUES ('$std_rollno','$certificate_course_name','$course_description','$course_from_where')";

    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert("User certification data is inserted .. ")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("User data not inserted .. please try again")</script>';
    }

}
?>