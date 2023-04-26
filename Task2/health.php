
<?php

 
 // Starting the session, to use and
 // store data in session variable
 session_start();

 include_once 'server.php';
   
 // If the session variable is empty, this
 // means the user is yet to login
 // User will be sent to 'login.php' page
 // to allow the user to login
 if (!isset($_SESSION['username'])) {
     $_SESSION['msg'] = "You have to log in first";
     header('location: home.php');
 }
   
 // Logout button will destroy the session, and
 // will unset the session variables
 // User will be headed to 'login.php'
 // after logging out
 if (isset($_GET['logout'])) {
     session_destroy();
     unset($_SESSION['username']);
     header("location: home.php");
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Advice Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

<style>

</style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top pb-3" style="background-color: #416a59;">
        <div class="container">
            <a class="navbar-brand" href="#">Health Advice Group</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#hamburgermenu" aria-controls="hamburgermenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="hamburgermenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="forecast.php">Weather Forecast</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="air.php">Air Quality</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="weatherinfo.php">Information and Advice</a>
                </li>
                <?php if (!isset($_SESSION['username'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginmodal">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#signupmodal">Sign Up</a>
                        </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="health.php">Health Tracker</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="account.php">Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?logout='1'">Logout</a>
                    </li>
                <?php } ?>
            </ul>
            </div>
        </div>
    </nav>


<section class="p-5 text-center text-sm-start">
    <div class="container mt-3 p-2" style="background-color: white;">
        <div class="row">
            <h2>Health Tracker</h2>
            <h3>Your Details</h3>
            <?php 
                $sql = "SELECT * FROM users WHERE username = '".$_SESSION["username"]."';";
                $result = mysqli_query($db, $sql);
                $resultcheck = mysqli_num_rows($result);

                if($resultcheck > 0){
                    while ($row = mysqli_fetch_assoc($result)){ ?>
                        <div>
                            <div>
                                <p>Gender: <?php echo $row['gender'];?></p>
                            </div>
                            <div>
                                <p>Age: <?php echo $row['age'];?></p>
                            </div>
                            <div>
                                <p>Height: <?php echo $row['height'];?> cm</p>
                            </div>
                            <div>
                                <p>Weight: <?php echo $row['weight'];?> kg</p>
                            </div>
                            <div>
                                <p>Allergies: <?php echo $row['allergy'];?></p>
                                <!-- <?php if ($_SESSION['allergy'] == 'Hay Fever') { ?>
                                    <p>To get advice on dealing with Hay Fever see <a href="">our page on Hay Fever</a></p>
                                <?php }
                                
                                ?> -->
                            </div>
                            <div>
                                <p>Health Conditions: <?php echo $row['conditions'];?></p>
                            </div>
                        </div><?php
                    }
                }
            ?>
            
        </div>
    </div>
</section>