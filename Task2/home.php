<?php 
    session_start();
?>
<?php include('server.php') ?>
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
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
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
                        <a class="nav-link" href="health.php">Health Tracker</a>
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

<!-- About Us -->
<section class="text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start mt-3" style="background-color: #416a59" id="about">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between pb-2">
            <div>
                <h1>About Us</h1>
                <p class="lead my-3">Welcome to the Health Advice Group website. We are a charity with the goal of providing quality information, advice and support on environmental conditions and it's affect on our health; through our range of services.</p>
            </div>
            <img class="img-fluid w-50 mt-3 d-none d-sm-block" src="img/weatherapp.svg" alt=""> 
        </div>
    </div>
</section>

<!-- What we offer -->
<section class="text-dark p-5 p-lg-0 pt-lg-5 text-center text-sm-start" style="background-color: #f5eec2">
    <div class="container-fluid">
       <h1 class="text-center mb-3">What we offer</h1>
       <!-- Services Cards -->
       <div class="row justify-content-center">
            <div class="col-lg-2 col-md-5 m-2 card " style="background-color:#416a59;">
                <img src="img/forecastimg.svg" class="card-img-top mt-2 d-none d-md-block">
                <div class="card-body" style="color: white;">
                    <h5 class="card-title">Weather Forecast</h5>
                    <p class="card-text">Use our fully functional weather forecasting service to gain an accurate idea of the upcoming week's weather.</p>
                    <a href="forecast.php" class="btn cardbtn">Take me there</a>
                </div>
            </div>
            <div class="col-lg-2 col-md-5 card m-2" style="background-color:#416a59;">
                <img src="img/airqualitycard.jpg" class="card-img-top mt-2 d-none d-md-block">
                <div class="card-body" style="color: white;">
                    <h5 class="card-title">Air Quality Dashboard</h5>
                    <p class="card-text">Air Pollution has grown considerably over the decades of industrial development, monitor the air quality near you and understand the effects.</p>
                    <a href="air.php" class="btn cardbtn">Take me there</a>
                </div>
            </div>
            <div class="col-lg-2 col-md-5 m-2 card" style="background-color:#416a59;">
                <img src="img/advice.svg" class="card-img-top mt-2 d-none d-md-block">
                <div class="card-body" style="color: white;">
                    <h5 class="card-title">Information and Advice</h5>
                    <p class="card-text">Information and Advice on our climate, specific weather conditions and environmental health effect such as hayfever and asthma.</p>
                    <a href="weatherinfo.php" class="btn cardbtn">Take me there</a>
                </div>
            </div>
            <div class="col-lg-2 col-md-5 m-2 card" style="background-color:#416a59;">
                <img src="img/health.svg" class="card-img-top mt-2 d-none d-md-block">
                <div class="card-body" style="color: white;">
                    <h5 class="card-title">Health Tracker</h5>
                    <p class="card-text">Take advantage of our personal health tracking system to gain information and warnings relevant to you. (Account Required)</p>
                    <a href="health.php" class="btn cardbtn">Take me there</a>
                </div>
            </div>
       </div>
       
    </div>
</section>

<!-- Footer -->

<!-- Login and SignUp Modal -->
<!--Login Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
            <?php include('errors.php'); ?>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control w-50" value="" aria-describedby="usernameHelp">
            </div>
            <div class="mb-3">
                <label for="passwordinput" class="form-label">Password</label>
                <input type="password" class="form-control w-50" id="passwordinput" name="password">
            </div>
            <button type="submit" class="btn cardbtn" name="login_user">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- SignUp Modal -->
<div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="SignUpModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include('errors.php'); ?>
        <form method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control w-50" id="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Email</label>
                <input type="text" name="email" class="form-control w-50" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control w-50" name="password_1">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Repeat Password</label>
                <input type="password" id="password" class="form-control w-50" name="password_2">
                <div id="passwordHelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                </div>
            </div>
            <button type="submit" class="btn cardbtn" name="reg_user">Create Account</button>
            </form>
      </div>
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>