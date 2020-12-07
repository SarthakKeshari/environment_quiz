<?php
if(isset($_POST['submit']))
{
            session_start();

            // print_r($_SESSION);

            // for($x=1;$x<=$no_of_questions;$x++){
            //     echo "Question number : ".((((($mul_fact*$x+$reg)%$no_of_questions))%$no_of_questions+1))."<br>";
            // }

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
        
            $total_marks = 0;
            $marks_scored = 0;

            $quiz=$_SESSION['quiz_no'];

            //Query the database for user
            for($x=1;$x<=10;$x++){
                $total_marks++;
                $result = mysqli_query($conn,'SELECT * from '.substr($quiz,0,4).substr($quiz,5,1).' where ques_id='.$x)
                // $result = mysqli_query($conn,"select * from ".$_SESSION['examslot']." where 
                //             id ='$question'")
                            or die("Failed to query database ".mysqli_error($conn));
                $row = mysqli_fetch_array($result);

                if($_POST['option'.$x]==$row['answer'])
                {
                    $marks_scored++;
                }

            }

            // echo 'HELLO';
    
            $sql1="INSERT INTO scorecard (quiz_no,marks_scored,total) VALUES ('$quiz','$marks_scored','$total_marks')";
            $query1 = mysqli_query($conn,$sql1);

            // echo 'HI';
        
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <!-- <link rel = "icon" href =  "img/examon.png" type = "image/x-icon">  -->
    <title>Environment Quizinal</title>
    <style>
        body{
            overflow: hidden;
        }
        .container{
            height: 100vh;
        }
    </style>
  </head>
  <body class="bg-dark bg-gradient">
    <div class="container d-flex bg-white bg-gradient justify-content-center align-items-center">
        <div class="row">
            <div class="col-12 m-5 h1 text-success d-flex justify-content-center align-items-center">
                Quiz Successfully Submitted!!
            </div>
            <div class="col-12 bg-success text-white h2 d-flex justify-content-center align-items-center">
                Your Score: <?php echo $marks_scored.'/'.$total_marks;?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php   
    
}
else{
    echo 'Not Attempted';
}

?>

<script>
         setTimeout(function(){window.history.go(-2);
         }, 5000);
</script>