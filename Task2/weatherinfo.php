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



</head>
<body>
<!-- Navbar -->
<!-- Navbar -->
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
                    <a class="nav-link active" href="weatherinfo.php">Information and Advice</a>
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

    <section class="text-dark p-5 p-lg-0 pt-lg-5 text-center text-sm-start mt-3">
        <div class="container">
            <h1>Advice</h1>
            <p class="lead">Advice on weather conditions varies considerably depending on the condition, please seek below for different environments.</p>
        </div>
    </section>

    <section class></section>


<!-- Environment Cards -->
<section>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-5 m-2 card " style="background-color:#416a59;">
                <img src="img/snow.jpg" class="card-img-top mt-2 d-none d-md-block carda">
                <div class="card-body" style="color: white;">
                    <h5 class="card-title">Staying safe in the snow</h5>
                    <h6 class="card-subtitle mb-2 lead">Information and Advice</h6>
                    <a href="snowadvice.php" class="btn cardbtn">More</a>
                </div>
            </div>
            <div class="col-lg-2 col-md-5 m-2 card " style="background-color:#416a59;">
                <img src="img/heatwave.jpg" class="card-img-top mt-2 d-none d-md-block carda">
                <div class="card-body" style="color: white;">
                    <h5 class="card-title">Staying safe in the heat</h5>
                    <h6 class="card-subtitle mb-2 lead">Information and Advice</h6>
                    <a href="heat.php" class="btn cardbtn">More</a>
                </div>
            </div>
            <div class="col-lg-2 col-md-5 m-2 card " style="background-color:#416a59;">
                <img src="img/rain.jpg" class="card-img-top mt-2 d-none d-md-block carda">
                <div class="card-body" style="color: white;">
                    <h5 class="card-title">Staying safe in the rain</h5>
                    <h6 class="card-subtitle mb-2 lead">Information and Advice</h6>
                    <a href="rain.php" class="btn cardbtn">More</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-5 m-2 card " style="background-color:#416a59;">
                <img src="img/cold.jpg" class="card-img-top mt-2 d-none d-md-block carda">
                <div class="card-body" style="color: white;">
                    <h5 class="card-title">Staying safe in the cold</h5>
                    <h6 class="card-subtitle mb-2 lead">Information and Advice</h6>
                    <a href="cold.php" class="btn cardbtn">More</a>
                </div>
            </div>
            <div class="col-lg-2 col-md-5 m-2 card " style="background-color:#416a59;">
                <img src="img/wind.jpg" class="card-img-top mt-2 d-none d-md-block carda">
                <div class="card-body" style="color: white;">
                    <h5 class="card-title">Staying safe in strong winds</h5>
                    <h6 class="card-subtitle mb-2 lead">Information and Advice</h6>
                    <a href="wind.php" class="btn cardbtn">More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Login and SignUp Modal -->

<!--Login Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3">
                <label for="emailinput" class="form-label">Email address</label>
                <input type="email" class="form-control" id="emailinput" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="passwordinput" class="form-label">Password</label>
                <input type="password" class="form-control" id="passwordinput">
            </div>
            <button type="submit" class="btn cardbtn">Login</button>
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
        <form>
            <div class="mb-3">
                <label for="emailinput" class="form-label">Email address</label>
                <input type="email" class="form-control" id="emailinput" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="">
                <label for="passwordinput" class="form-label">Password</label>
                <input type="password" class="form-control" id="passwordinput">
            </div>
            <div class="mb-3">
                <label for="passwordinput" class="form-label">Repeat Password</label>
                <input type="password" class="form-control" id="passwordinput">
                <div id="passwordHelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                </div>
            </div>
            <button type="submit" class="btn cardbtn">Create Account</button>
            </form>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>