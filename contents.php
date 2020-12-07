<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <link rel="stylesheet" href="contents.css">

    <title>Environment Quizinal</title>
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
  <div class="container text-center">
        <div class="row back">
            <div class="col-12 p-4">
                <p class="text-white h1">Practice</p>
                
                <form class="row d-flex justify-content-center" method="get" action="quiz.php">
                    
                    <?php
                        // $db_host='127.0.0.1';
                        // $db_user='root';
                        // $db_pass='';
                        // $db_name='environment_quiz';

                        $db_host='remotemysql.com';
                        $db_user='vJl5oVSDWD';
                        $db_pass='wyn04lcvFp';
                        $db_name='vJl5oVSDWD';

                        $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
                        if(!$conn )
                        {
                            die('Failed to connect mysql database'.mysqli_connect_error());
                        }

                        // echo "YOYO";

                        $sql='SELECT * from content';
                        $query = mysqli_query($conn,$sql);

                        if(!$query)
                        {
                            die('error found'.mysqli_error($conn));
                        }
    
                        while($row=mysqli_fetch_array($query))
                        {
                    ?>

                    <input type="submit" value="<?php echo $row['quiz_no']?>" name="quiz_no" class="col-3 m-5 d-flex text-center justify-content-center align-items-center quiz">
                    <?php
                        }
                    ?>
                </form>
                
            </div>
        </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>
    -->
  </body>
</html>