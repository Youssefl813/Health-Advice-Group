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

<!-- Weather Advice taken from Met Office -->
<div class="container my-3 py-5">
        <div class="row">
            <div class="col bg-light p-3 ">
                <h1>Staying safe in strong wind</h1>
                <h3 style="max-width: 640px">When there is a wind warning in place, here are some things you can do...</h2>
                <div class="m-2">
                    <p>1.<a href="#1">Protecting your property from damage and other people from injury</a></p>
                    <p>2.<a href="#2">Things you can do before a journey</a></p>
                    <p>3.<a href="#3">Driving safely in strong wind</a></p>
                    <p>4.<a href="#4">Staying safe when you're at the coast</a></p>
                    <p>5.<a href="#5">Avoiding injury if you are out and about</a></p>
                </div>
                <h3 id="1" class="mb-3">1. Protecting your property from damage and other people from injury</h3>
                <h4>Don't risk injury to others or damage to your property. Check for loose items outside your home and plan how you could secure them in high winds.
Items include:</h4>
                <ul class="m-2">
                    <li>bins</li>
                    <li>plant pots</li>
                    <li>garden furniture (bring inside or secure in place)</li>
                    <li>trampolines (turn upside down or secure with tent pegs)</li>
                    <li>sheds (ensure doors are locked)</li>
                </ul>
                <h3 id="2" class="mb-3">2. Things you can do before a journey</h3>
                <h4>Windy weather can cause delays and make driving conditions dangerous. Follow these few simple steps to prepare before journeys:</h4>
                <ul class="m-2">
                    <li>Plan your route, check for delays and road closures</li>
                    <li>Listen out for travel updates on your car radio/sat nav</li>
                    <li>If you don't have essentials in your car then pack for the worst (warm clothing, food, drink, blanket, torch)</li>
                    <li>Take a fully charged mobile phone with an in-car charger or battery pack</li>
                </ul>
                <h3 id="3" class="mb-3">3. Driving safely in strong wind</h3>
                <h4>Driving in these conditions can be dangerous, for yourself and other road users. If you must drive, you can do this more safely by:</h4>
                <ul class="m-2">
                    <li>Driving slowly to minimise the impact of wind gusts</li>
                    <li>Be aware of high sided vehicles/caravans on more exposed roads</li>
                    <li>Be cautious overtaking high sided vehicles/caravans</li>
                    <li>Make sure you hold the steering wheel firmly</li>
                    <li>Give cyclists, motorcyclists, lorries and buses more room than usual</li>
                </ul>
                <h3 id="4" class="mb-3">4. Staying safe when you're at the coast</h3>
                <h4>If you live or work on the coast take extra care during windy and stormy weather. Keep yourself and others safe by following these simple steps:</h4>
                <ul class="m-2">
                    <li>Check the forecasts and tides in your local area <a href="forecast.php">here</a></li>
                    <li>Beware of large waves, even from the shore large breaking waves can sweep you off your feet and out to sea</li>
                    <li>Take care if walking near cliffs - know your route and keep dogs on a lead</li>
                    <li>In an emergency 999 (UK) or 112 (Ireland) and ask for the Coastguard</li>
                </ul>
                <h3 id="5" class="mb-3">5. Avoiding injury if you're out and about</h3>
                <p>Being outside in high winds makes you more vulnerable to injury. Stay indoors as much as possible. If you do go out, try not to walk or shelter close to buildings and trees.</p>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>