<?php

include '../database/dbconnect.php';
session_start();

if (!$_SESSION["login_or_not"])
{
    header("location: teacher_login.php");

}


?>
<?php
$student_rollno=$_SESSION["single_rollno"];

$query = "SELECT  * FROM student_register WHERE std_rollno = '$student_rollno'  ";

$query_run = mysqli_query($conn,$query);


    if($query_run)
    {
        if(mysqli_num_rows($query_run)>0)
        {
        $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
        }
        else
        {
            echo '<script type="text/javascript">alert("No such User exists...")</script>';
        }
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

    <!--------jquery ui css files ------>
    <link rel="stylesheet" href="../jqueryui/jquery-ui.css">
    <link rel="stylesheet" href="../jqueryui/jquery-ui.structure.css">
    <link rel="stylesheet" href="../jqueryui/jquery-ui.theme.css">


    <title>Single Student Detail</title>
</head>

<body>
    <div>
        <h1 class="text-center font-weight-bold">Single Student Details</h1>
    </div>
    <hr>
    <div class="row">
        <div class=" col-lg-6 col-md-6 col-sm-6 d-flex justify-content-start"> 
            <a  class=" d-flex justify-content-end py-3 pr-3" href="../html/teacher_dashboard.php"> <button  class="btn btn-dark"  >Go To Dashboard !</button></a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 justify-content-sm-start">
            <a  class=" d-flex justify-content-lg-end py-3 pr-3" href="../html/student_list.php"> <button  class="btn btn-dark"  >Go To Student List !</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-sm-12 col-md-12">
            <h2>Student Name: <?php echo $row["std_fname"]; ?> </h2>
        </div>
        <div class="col-lg-4 col-sm-12 col-md-12 ">
            <h2>Student Rollno: <?php echo $row["std_rollno"]; ?> </h2>
        </div>
    </div>
    <hr>

    <div calss="container ">
        <div id="drop">
            <!---1 year start here-->
            <h1 style="background-color: black;" class="text-white">1 Year</h1>
            <div>

                <div>
                    <h3>Semester 1</h3>
                    <h4> Unit Test </h4>
                    <div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>                                  
                                    <th scope="col">Subject Name</th>
                                    <th scope="col">IAE-1 Marks</th>
                                    <th scope="col">IAE-2 Marks</th>
                                    <th scope="col">AVG Marks</th>
                                    <th scope="col">OutOff Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        $query= "SELECT * from semester1 WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["subject_name"];  ?></td>
                                        <td><?php  echo $res["iae1_marks"];  ?></td>
                                        <td><?php  echo $res["iae2_marks"];  ?></td>
                                        <td><?php  echo $res["avg_iae_marks"];  ?></td>
                                        <td><?php  echo $res["outoff_marks"];  ?></td>
                                        
                                </tr>
                                <?php
                                    }
                                ?>

                            </tbody>
                        </table>
                    </div>

                    <h4> Semester </h4>
                    <div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    
                                    <th scope="col">Subject Name</th>
                                    <th scope="col">Semester Marks</th>
                                    <th scope="col">OutOff Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        $query= "SELECT * from semester1 WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["subject_name"];  ?></td>
                                        <td><?php  echo $res["sem_marks"];  ?></td>
                                        <td><?php  echo $res["outoff_sem_marks"];  ?></td>
                                        
                                        
                                </tr>
                                <?php
                                    }
                                ?>

                            </tbody>
                        </table>
                    </div>


                </div>

                <div>
                    <h3>Semester 2</h3>
                    <h4> Unit Test </h4>
                    <div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    
                                    <th scope="col">Subject Name</th>
                                    <th scope="col">IAE-1 Marks</th>
                                    <th scope="col">IAE-2 Marks</th>
                                    <th scope="col">AVG Marks</th>
                                    <th scope="col">OutOff Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        $query= "SELECT * from semester2 WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["subject_name"];  ?></td>
                                        <td><?php  echo $res["iae1_marks"];  ?></td>
                                        <td><?php  echo $res["iae2_marks"];  ?></td>
                                        <td><?php  echo $res["avg_iae_marks"];  ?></td>
                                        <td><?php  echo $res["outoff_marks"];  ?></td>
                                        
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <h4> Semester </h4>
                    <div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    
                                    <th scope="col">Subject Name</th>
                                    <th scope="col">Semester Marks</th>
                                    <th scope="col">OutOff Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        $query= "SELECT * from semester2 WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["subject_name"];  ?></td>
                                        <td><?php  echo $res["sem_marks"];  ?></td>
                                        <td><?php  echo $res["outoff_sem_marks"];  ?></td>
                                        
                                        
                                </tr>
                                <?php
                                    }
                                ?>


                            </tbody>
                        </table>
                    </div>
                </div>
                

            </div>
            <!----1 year ends here------>
            <!---2 year start here-->

            <h1 style="background-color: black;" class="text-white">2 Year</h1>
            <div>

                <div>
                    <h3>Semester 3</h3>
                    <h4> Unit Test </h4>
                    <div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    
                                    <th scope="col">Subject Name</th>
                                    <th scope="col">IAE-1 Marks</th>
                                    <th scope="col">IAE-2 Marks</th>
                                    <th scope="col">AVG Marks</th>
                                    <th scope="col">OutOff Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        $query= "SELECT * from semester3 WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["subject_name"];  ?></td>
                                        <td><?php  echo $res["iae1_marks"];  ?></td>
                                        <td><?php  echo $res["iae2_marks"];  ?></td>
                                        <td><?php  echo $res["avg_iae_marks"];  ?></td>
                                        <td><?php  echo $res["outoff_marks"];  ?></td>
                                        
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <h4> Semester </h4>
                    <div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    
                                    <th scope="col">Subject Name</th>
                                    <th scope="col">Semester Marks</th>
                                    <th scope="col">OutOff Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        $query= "SELECT * from semester3 WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["subject_name"];  ?></td>
                                        <td><?php  echo $res["sem_marks"];  ?></td>
                                        <td><?php  echo $res["outoff_sem_marks"];  ?></td>
                                        
                                        
                                </tr>
                                <?php
                                    }
                                ?>

                            </tbody>
                        </table>
                    </div>


                </div>

                <div>
                    <h3>Semester 4</h3>
                    <h4> Unit Test </h4>
                    <div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    
                                    <th scope="col">Subject Name</th>
                                    <th scope="col">IAE-1 Marks</th>
                                    <th scope="col">IAE-2 Marks</th>
                                    <th scope="col">AVG Marks</th>
                                    <th scope="col">OutOff Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        $query= "SELECT * from semester4 WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["subject_name"];  ?></td>
                                        <td><?php  echo $res["iae1_marks"];  ?></td>
                                        <td><?php  echo $res["iae2_marks"];  ?></td>
                                        <td><?php  echo $res["avg_iae_marks"];  ?></td>
                                        <td><?php  echo $res["outoff_marks"];  ?></td>
                                        
                                </tr>
                                <?php
                                    }
                                ?>

                            </tbody>
                        </table>
                    </div>

                    <h4> Semester </h4>
                    <div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    
                                    <th scope="col">Subject Name</th>
                                    <th scope="col">Semester Marks</th>
                                    <th scope="col">OutOff Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                               <tr>
                                    <?php
                                        $query= "SELECT * from semester4 WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["subject_name"];  ?></td>
                                        <td><?php  echo $res["sem_marks"];  ?></td>
                                        <td><?php  echo $res["outoff_sem_marks"];  ?></td>
                                        
                                        
                                </tr>
                                <?php
                                    }
                                ?>


                            </tbody>
                        </table>
                    </div>
                </div>
               

            </div>
            <!----2 year ends here------>
            <!---3 year start here-->
            <h1 style="background-color: black;" class="text-white">3 Year</h1>
            <div>

                <div>
                    <h3>Semester 5</h3>
                    <h4> Unit Test </h4>
                    <div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    
                                    <th scope="col">Subject Name</th>
                                    <th scope="col">IAE-1 Marks</th>
                                    <th scope="col">IAE-2 Marks</th>
                                    <th scope="col">AVG Marks</th>
                                    <th scope="col">OutOff Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        $query= "SELECT * from semester5 WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["subject_name"];  ?></td>
                                        <td><?php  echo $res["iae1_marks"];  ?></td>
                                        <td><?php  echo $res["iae2_marks"];  ?></td>
                                        <td><?php  echo $res["avg_iae_marks"];  ?></td>
                                        <td><?php  echo $res["outoff_marks"];  ?></td>
                                        
                                </tr>
                                <?php
                                    }
                                ?>


                            </tbody>
                        </table>
                    </div>

                    <h4> Semester </h4>
                    <div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    
                                    <th scope="col">Subject Name</th>
                                    <th scope="col">Semester Marks</th>
                                    <th scope="col">OutOff Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        $query= "SELECT * from semester5 WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["subject_name"];  ?></td>
                                        <td><?php  echo $res["sem_marks"];  ?></td>
                                        <td><?php  echo $res["outoff_sem_marks"];  ?></td>
                                        
                                        
                                </tr>
                                <?php
                                    }
                                ?>


                            </tbody>
                        </table>
                    </div>


                </div>

                <div>
                    <h3>Semester 6</h3>
                    <h4> Unit Test </h4>
                    <div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    
                                    <th scope="col">Subject Name</th>
                                    <th scope="col">IAE-1 Marks</th>
                                    <th scope="col">IAE-2 Marks</th>
                                    <th scope="col">AVG Marks</th>
                                    <th scope="col">OutOff Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        $query= "SELECT * from semester6 WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["subject_name"];  ?></td>
                                        <td><?php  echo $res["iae1_marks"];  ?></td>
                                        <td><?php  echo $res["iae2_marks"];  ?></td>
                                        <td><?php  echo $res["avg_iae_marks"];  ?></td>
                                        <td><?php  echo $res["outoff_marks"];  ?></td>
                                        
                                </tr>
                                <?php
                                    }
                                ?>

                            </tbody>
                        </table>
                    </div>

                    <h4> Semester </h4>
                    <div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    
                                    <th scope="col">Subject Name</th>
                                    <th scope="col">Semester Marks</th>
                                    <th scope="col">OutOff Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        $query= "SELECT * from semester6 WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["subject_name"];  ?></td>
                                        <td><?php  echo $res["sem_marks"];  ?></td>
                                        <td><?php  echo $res["outoff_sem_marks"];  ?></td>
                                        
                                        
                                </tr>
                                <?php
                                    }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                

            </div>
            <!----3 year ends here------>
            <!---4 year start here-->
            <h1 style="background-color: black;" class="text-white">4 Year</h1>
            <div>

                <div>
                    <h3>Semester 7</h3>
                    <h4> Unit Test </h4>
                    <div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    
                                    <th scope="col">Subject Name</th>
                                    <th scope="col">IAE-1 Marks</th>
                                    <th scope="col">IAE-2 Marks</th>
                                    <th scope="col">AVG Marks</th>
                                    <th scope="col">OutOff Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        $query= "SELECT * from semester7 WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["subject_name"];  ?></td>
                                        <td><?php  echo $res["iae1_marks"];  ?></td>
                                        <td><?php  echo $res["iae2_marks"];  ?></td>
                                        <td><?php  echo $res["avg_iae_marks"];  ?></td>
                                        <td><?php  echo $res["outoff_marks"];  ?></td>
                                        
                                </tr>
                                <?php
                                    }
                                ?>

                            </tbody>
                        </table>
                    </div>

                    <h4> Semester </h4>
                    <div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    
                                    <th scope="col">Subject Name</th>
                                    <th scope="col">Semester Marks</th>
                                    <th scope="col">OutOff Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <tr>
                                    <?php
                                        $query= "SELECT * from semester7 WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["subject_name"];  ?></td>
                                        <td><?php  echo $res["sem_marks"];  ?></td>
                                        <td><?php  echo $res["outoff_sem_marks"];  ?></td>
                                        
                                        
                                </tr>
                                <?php
                                    }
                                ?>


                            </tbody>
                        </table>
                    </div>


                </div>

                <div>
                    <h3>Semester 8</h3>
                    <h4> Unit Test </h4>
                    <div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    
                                    <th scope="col">Subject Name</th>
                                    <th scope="col">IAE-1 Marks</th>
                                    <th scope="col">IAE-2 Marks</th>
                                    <th scope="col">AVG Marks</th>
                                    <th scope="col">OutOff Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        $query= "SELECT * from semester8 WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["subject_name"];  ?></td>
                                        <td><?php  echo $res["iae1_marks"];  ?></td>
                                        <td><?php  echo $res["iae2_marks"];  ?></td>
                                        <td><?php  echo $res["avg_iae_marks"];  ?></td>
                                        <td><?php  echo $res["outoff_marks"];  ?></td>
                                        
                                </tr>
                                <?php
                                    }
                                ?>


                            </tbody>
                        </table>
                    </div>

                    <h4> Semester </h4>
                    <div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    
                                    <th scope="col">Subject Name</th>
                                    <th scope="col">Semester Marks</th>
                                    <th scope="col">OutOff Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        $query= "SELECT * from semester8 WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["subject_name"];  ?></td>
                                        <td><?php  echo $res["sem_marks"];  ?></td>
                                        <td><?php  echo $res["outoff_sem_marks"];  ?></td>
                                        
                                        
                                </tr>
                                <?php
                                    }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
              

            </div>
            <!----4 year ends here------>
        </div>
    </div>
    <!---------------------------------------all semester ends here ------------------------>
    <br>
    <!----------------------------------------10th 12th std start here --------------------------->
    <div calss="container">
        <div id="drop1">
            <!---10 start here-->
            <h1 style="background-color: black;" class="text-white">SSC 10th </h1>
            <div>

                <div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Board</th>
                                <th scope="col">Passing Year</th>
                                <th scope="col">Pecentage</th>
                                <th scope="col">School Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                    <?php
                                        $query= "SELECT * from std_tenth_score WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["std_tenth_board"];  ?></td>
                                        <td><?php  echo $res["std_tenth_passing_year"];  ?></td>
                                        <td><?php  echo $res["std_tenth_percentage"];  ?></td>
                                        <td><?php  echo $res["std_tenth_school_name"];  ?></td>
                                        
                            </tr>
                                <?php
                                    }
                                ?>
                        </tbody>
                    </table>

                </div>

            </div>
            <!----10th ends here------>
            <!---12th start here-->
            <h1 style="background-color: black;" class="text-white">HSC 12th </h1>
            <div>

                <div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Board</th>
                                <th scope="col">Passing Year</th>
                                <th scope="col">Pecentage</th>
                                <th scope="col">College Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                    <?php
                                        $query= "SELECT * from std_twelfth_score WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["std_twelfth_board"];  ?></td>
                                        <td><?php  echo $res["std_twelfth_passing_year"];  ?></td>
                                        <td><?php  echo $res["std_twelfth_percentage"];  ?></td>
                                        <td><?php  echo $res["std_twelfth_college_name"];  ?></td>
                                        
                            </tr>
                                <?php
                                    }
                                ?>
                        </tbody>
                    </table>

                </div>

            </div>
            <!----12th ends here------>

        </div>
    </div>

    <!-----------------------------------------------10th 12th ends here ------------------------------------------->
    <br>
    <!----------------------------------------Internships start here --------------------------->
    <div calss="container">
        <div id="drop2">

            <h1 style="background-color: black;" class="text-white">Internships </h1>
            <div>

                <div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Company Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Description</th>
                                <th scope="col">Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                    <?php
                                        $query= "SELECT * from std_internship WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["int_company_name"];  ?></td>
                                        <td><?php  echo $res["std_position"];  ?></td>
                                        <td><?php  echo $res["std_int_description"];  ?></td>
                                        <td><?php  echo $res["std_int_duration"];  ?></td>
                                        
                            </tr>
                                <?php
                                    }
                                ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <!-----------------------------------------------Internships ends here ------------------------------------------->
    <br>
    <!----------------------------------------Certification start here --------------------------->
    <div calss="container">
        <div id="drop3">

            <h1 style="background-color: black;" class="text-white">Certification </h1>
            <div>

                <div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Course Name</th>
                                <th scope="col">Course Description</th>
                                <th scope="col">Company Name</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                    <?php
                                        $query= "SELECT * from std_certification WHERE std_rollno='$student_rollno' ";

                                        $query_run=mysqli_query($conn,$query);
                                        
                                        
                                        while( $res= mysqli_fetch_array($query_run) )
                                        {

                                    ?>

                                        <td><?php  echo $res["certificate_course_name"];  ?></td>
                                        <td><?php  echo $res["course_description"];  ?></td>
                                        <td><?php  echo $res["course_from_where"];  ?></td>
                                        
                            </tr>
                                <?php
                                    }
                                ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <!-----------------------------------------------Certification ends here ------------------------------------------->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="../js/jquery.js" type="text/javascript"></script>
    <script src="../jqueryui/jquery-ui.js" type="text/javascript"></script>
    <script>
        $(function () {
            $("#drop").accordion({
                collapsible: true,
                heightStyle: true,
                active: false,
            });
            $("#drop1").accordion({
                collapsible: true,
                heightStyle: true,
                active: false,
            });
            $("#drop2").accordion({
                collapsible: true,
                heightStyle: true,
                active: false,
            });
            $("#drop3").accordion({
                collapsible: true,
                heightStyle: true,
                active: false,
            });


        });

    </script>
</body>

</html>