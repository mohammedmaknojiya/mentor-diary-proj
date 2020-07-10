<?php

include '../database/dbconnect.php';
session_start();

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

    <title>Teacher Login</title>
</head>

<body>

    <div class="container my-5" style="border: 2px solid black; padding-top: 20px;padding-bottom:10px;">
        <h1 class="text-center">
            Teacher Login
        </h1>
        <!------login form  ---->
        <br>
        <form action="teacher_login.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email Address</label>
                <input type="email" name="teacher_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="eg:abcd@gmail.com">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="teacher_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" name="btnclick" class="btn btn-dark">Login !</button>
        </form>
        <br>
    
            <a  href="../html/teacher_register.php"> <button  class="btn btn-dark"  >Go To Register !</button></a> If don't have account!
        <br>
        <br>
        <a href="../html/index.php" class="btn btn-dark">Go To Home Page !</a><br><br>


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
    $login_or_not=false;
    $teacher_email=$_POST["teacher_email"];
    $teacher_password=$_POST["teacher_password"];


    $query = "SELECT  * FROM teacher_register WHERE teacher_email = '$teacher_email' and teacher_password = '$teacher_password' ";

    $query_run = mysqli_query($conn,$query);


    if($query_run)
    {
        if(mysqli_num_rows($query_run)>0)
        {
        $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
    
        $_SESSION["teacher_fname"]=$row["teacher_fname"];
        $_SESSION["teacher_lname"]=$row["teacher_lname"];
        $_SESSION["teacher_phoneno"]=$row["teacher_phoneno"];
        $_SESSION["teacher_designation"]=$row["teacher_designation"];
        $_SESSION["teacher_password"]=$row["teacher_password"];
        $_SESSION["teacher_email"]=$row["teacher_email"];
        $login_or_not=true;
        $_SESSION["login_or_not"]=$login_or_not;

        header("location: teacher_dashboard.php");

        

        }
        else
        {
            $_SESSION["login_or_not"]=$login_or_not;
            echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
        }
    }
    else
    {
        echo '<script type="text/javascript">alert("Database Error")</script>';
    }

    
}
?>