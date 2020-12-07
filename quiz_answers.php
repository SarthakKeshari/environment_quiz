<?php 
    // if(isset($_POST['start']))
    // {
        // session_start();

        @ob_start();
        session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel = "icon" href =  "img/examon.png" type = "image/x-icon"> 
      <link rel="stylesheet" href="quiz_answers.css">

      <title>Environment Quizinal</title>
      <style>
          body{
              background-color: gainsboro;
          }
      </style>
</head>
<body>

<div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid ">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->

            <div class="collapse navbar-collapse show  d-flex justify-content-end text-right mr-5" id="navbarNavDropdown">
            <ul class="navbar-nav mr-5">
                <li class="nav-item mr-4">
                <a class="nav-link active" aria-current="page" href="contents.php">Home</a>
                </li>
                <li class="nav-item mr-4">
                <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item mr-4">
                <a class="nav-link" href="answers.php">Answers</a>
                </li>
                <li class="nav-item mr-4 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                    Profile
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="scorecard.php">Score Card</a></li>
                    <li><a class="dropdown-item" href="progress.php">Progress Report</a></li>
                    <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                </ul>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
    <!-- <nav class="navbar navbar-dark bg-dark position-sticky top-0"> -->
    <div class="container-fluid justify-content-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    </nav>


    
    <img src="enviro_logo.png" alt="" class="logom" height="100px" width="100px" style="position: absolute;top: 25px;left: 50px;">
      <div class="container">
      <!-- <h2>Attempt Question - User Side</h2>
    <form action="test_page.php" method="POST">
        <input type="text" name="reg">
        <input type="submit" value="Submit" name="submit">
    </form> -->

        
        


    <div id="myForm" name="myForm">

    <?php

            $db_host = "localhost";
            $db_user = "root";
            $db_pass = "";
            $db_name = "environment_quiz";

            // $db_host='remotemysql.com';
            // $db_user='vJl5oVSDWD';
            // $db_pass='wyn04lcvFp';
            // $db_name='vJl5oVSDWD';
        
            $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
            if(!$conn )
            {
                die('Failed to connect mysql database'.mysqli_connect_error());
            }

            


            $quiz=$_GET["quiz_no"];

            echo '<p class="text-success h1 m-4">'.$quiz.' Answer Key</p>';

            // print_r($_SESSION);

            // echo $quiz."yo";
        
            //Query the database for user
            for($x=1;$x<=10;$x++){
                $result = mysqli_query($conn,'SELECT * from '.substr($quiz,0,4).substr($quiz,5,1).'_answers where ques_id='.$x)
                // $result = mysqli_query($conn,"select * from ".$_SESSION['examslot']." where 
                //             id ='$question'")
                            or die("Failed to query database ".mysqli_error($conn));

                $row = mysqli_fetch_array($result);
                echo '<div class="question p-2 pt-2 border border-light m-5" id="question'.$x.'">';
                echo '<div class="row justify-content-end pr-4">
                </div>';
                echo "<p class=\"text-success h6 mb-4\">Question number : ".$x."</p>";
                echo "<hr><h5>".$row['question']."</h5>";
                echo '<div class="mt-4 p-4 border border-dark h5">';
                echo '<input class="m-3 mb-5" type="radio" name="option'.$x.'" id="opta" value="A" onclick="answered('.$x.')" disabled>'.$row['answer'].'<br>';
                echo "<p style=\"font-weight:400;\" class=\"m-4\"><b>Explaination:</b> <br>".$row['explaination']."</p>";
                echo '</div>';
                echo '</div>';

            }


            // if($row['admin_id'] == $Admin_id && $row['PIN'] == $PIN)
            // {
            //     header("Location: a_choice_page.php"); 
            //     exit;
            // }
            // else
            // {
            //     echo "<script>alert('Incorrect Admin_id or PIN');
            //     window.location.href = 'a_login_page.php';
            //     </script>";
            // }
    ?>

            </div>

    


    </div>
      
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
