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

    <title>Semester Details</title>
</head>

<body>
    <a  class=" d-flex justify-content-end py-3 pr-3" href="../html/student_dashboard.php"> <button  class="btn btn-dark"  >Go To Dashboard !</button></a>
    <div class="container my-5" style="border: 2px solid black; padding-top: 20px;">
        <h1 class="text-center">
            Semester Details
        </h1>
        <!------Register form  ---->
        <br>
        <form action="semester.php" method="post">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Semester</label>
                <select  name="semester" class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                </select>
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Subject Name</label>
                <input type="text" name="subject_name" class="form-control" id="formGroupExampleInput" placeholder="Micro-controller">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">IAE-1 Marks</label>
                <input type="number" name="iae1_marks" class="form-control" id="formGroupExampleInput" placeholder="20">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">IAE-2 Marks</label>
                <input type="number" name="iae2_marks" class="form-control" id="formGroupExampleInput" placeholder="20">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Average Marks</label>
                <input type="number" name="avg_iae_marks" class="form-control" id="formGroupExampleInput" placeholder="20">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Outoff Marks</label>
                <input type="number" name="outoff_marks" class="form-control" id="formGroupExampleInput" placeholder="20">
            </div>


            <div class="form-group">
                <label for="formGroupExampleInput">Semester Marks</label>
                <input type="number" name="sem_marks" class="form-control" id="formGroupExampleInput" placeholder="80">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Outoff Marks</label>
                <input type="number" name="outoff_sem_marks" class="form-control" id="formGroupExampleInput" placeholder="80">
            </div>

           <!-- <div class="form-group">
                <label for="formGroupExampleInput">This Semester Overall Pointer</label>
                <input type="number" class="form-control" id="formGroupExampleInput" placeholder="10">
            </div> -->


            <button name="btnclick" type="submit" class="btn btn-dark">Save !</button>
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
    $semester=$_POST["semester"];
    $subject_name=$_POST["subject_name"];
    $iae1_marks=$_POST["iae1_marks"];
    $iae2_marks=$_POST["iae2_marks"];
    $avg_iae_marks=$_POST["avg_iae_marks"];
    $outoff_marks=$_POST["outoff_marks"];
    $sem_marks=$_POST["sem_marks"];
    $outoff_sem_marks=$_POST["outoff_sem_marks"];
    $std_rollno=$_SESSION["std_rollno"];
    
    //echo gettype($semester);
    //echo $subject_name;
    if ($semester == "1")
    {
        $query = "INSERT INTO semester1(`std_rollno`, `subject_name`, `iae1_marks`, `iae2_marks`, `avg_iae_marks`, `outoff_marks`, `sem_marks`, `outoff_sem_marks`) VALUES ('$std_rollno','$subject_name','$iae1_marks',' $iae2_marks','$avg_iae_marks','$outoff_marks','$sem_marks','$outoff_sem_marks')";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
        echo '<script type="text/javascript">alert("User certification data is inserted .. ")</script>';
        }
        else{
        echo '<script type="text/javascript">alert("User data not inserted .. please try again")</script>';
        }
    }
    elseif ($semester == "2")
    {
        $query = "INSERT INTO semester2(`std_rollno`, `subject_name`, `iae1_marks`, `iae2_marks`, `avg_iae_marks`, `outoff_marks`, `sem_marks`, `outoff_sem_marks`) VALUES ('$std_rollno','$subject_name','$iae1_marks',' $iae2_marks','$avg_iae_marks','$outoff_marks','$sem_marks','$outoff_sem_marks')";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
        echo '<script type="text/javascript">alert("User certification data is inserted .. ")</script>';
        }
        else{
        echo '<script type="text/javascript">alert("User data not inserted .. please try again")</script>';
        }
    }
    elseif ($semester == "3")
    {
       $query = "INSERT INTO semester3(`std_rollno`, `subject_name`, `iae1_marks`, `iae2_marks`, `avg_iae_marks`, `outoff_marks`, `sem_marks`, `outoff_sem_marks`) VALUES ('$std_rollno','$subject_name','$iae1_marks',' $iae2_marks','$avg_iae_marks','$outoff_marks','$sem_marks','$outoff_sem_marks')";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
        echo '<script type="text/javascript">alert("User certification data is inserted .. ")</script>';
        }
        else{
        echo '<script type="text/javascript">alert("User data not inserted .. please try again")</script>';
        } 
    }
    elseif ($semester == "4")
    {
        $query = "INSERT INTO semester4(`std_rollno`, `subject_name`, `iae1_marks`, `iae2_marks`, `avg_iae_marks`, `outoff_marks`, `sem_marks`, `outoff_sem_marks`) VALUES ('$std_rollno','$subject_name','$iae1_marks',' $iae2_marks','$avg_iae_marks','$outoff_marks','$sem_marks','$outoff_sem_marks')";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
        echo '<script type="text/javascript">alert("User certification data is inserted .. ")</script>';
        }
        else{
        echo '<script type="text/javascript">alert("User data not inserted .. please try again")</script>';
        }
    }
    elseif ($semester == "5")
    {
        $query = "INSERT INTO semester5(`std_rollno`, `subject_name`, `iae1_marks`, `iae2_marks`, `avg_iae_marks`, `outoff_marks`, `sem_marks`, `outoff_sem_marks`) VALUES ('$std_rollno','$subject_name','$iae1_marks',' $iae2_marks','$avg_iae_marks','$outoff_marks','$sem_marks','$outoff_sem_marks')";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
        echo '<script type="text/javascript">alert("User certification data is inserted .. ")</script>';
        }
        else{
        echo '<script type="text/javascript">alert("User data not inserted .. please try again")</script>';
        }
    }
    elseif ($semester == "6")
    {
        $query = "INSERT INTO semester6(`std_rollno`, `subject_name`, `iae1_marks`, `iae2_marks`, `avg_iae_marks`, `outoff_marks`, `sem_marks`, `outoff_sem_marks`) VALUES ('$std_rollno','$subject_name','$iae1_marks',' $iae2_marks','$avg_iae_marks','$outoff_marks','$sem_marks','$outoff_sem_marks')";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
        echo '<script type="text/javascript">alert("User certification data is inserted .. ")</script>';
        }
        else{
        echo '<script type="text/javascript">alert("User data not inserted .. please try again")</script>';
        }
    }
    elseif ($semester == "7")
    {
        $query = "INSERT INTO semester7(`std_rollno`, `subject_name`, `iae1_marks`, `iae2_marks`, `avg_iae_marks`, `outoff_marks`, `sem_marks`, `outoff_sem_marks`) VALUES ('$std_rollno','$subject_name','$iae1_marks',' $iae2_marks','$avg_iae_marks','$outoff_marks','$sem_marks','$outoff_sem_marks')";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
        echo '<script type="text/javascript">alert("User certification data is inserted .. ")</script>';
        }
        else{
        echo '<script type="text/javascript">alert("User data not inserted .. please try again")</script>';
        }
    }
    elseif ($semester == "8")
    {
        $query = "INSERT INTO semester8(`std_rollno`, `subject_name`, `iae1_marks`, `iae2_marks`, `avg_iae_marks`, `outoff_marks`, `sem_marks`, `outoff_sem_marks`) VALUES ('$std_rollno','$subject_name','$iae1_marks',' $iae2_marks','$avg_iae_marks','$outoff_marks','$sem_marks','$outoff_sem_marks')";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
        echo '<script type="text/javascript">alert("User certification data is inserted .. ")</script>';
        }
        else{
        echo '<script type="text/javascript">alert("User data not inserted .. please try again")</script>';
        }
    }


    
}
?>