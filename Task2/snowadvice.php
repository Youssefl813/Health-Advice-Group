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
    h4{
        max-width:730px;
        font-size: 20px;
    }

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
                <h1>Staying Safe in the Snow</h1>
                <h3 style="max-width: 640px">When there is a snow warning in place, here are some things you can do...</h2>
                <div class="m-2">
                    <p>1.<a href="#drive1">What to do if you need to drive somewhere?</a></p>
                    <p>2.<a href="#drive2">Driving safely in snow</a></p>
                    <p>3.<a href="#think">Thinking ahead and acting now so you can cope if cut off</a></p>
                    <p>4.<a href="#cutoff">Staying safe if you are cut off</a></p>
                    <p>5.<a href="#powercut">What you can do in a powercut</a></p>
                </div>
                <h3 id="drive1">1. What to do if you need to drive somewhere?</h3>
                <h4>Snowy, wintry weather can cause delays and make driving conditions dangerous, follow these few simple steps to prepare before journeys:</h4>
                <ul class="m-2">
                    <li>Plan your route</li>
                    <li>Check for delays and road closure</li>
                    <li>Leave more time to prepare and check your car before setting off</li>
                    <li>Check wipers, tyres and screenwash</li>
                    <li>Pack essentials in your car</li>
                    <li>Take a fully charged mobile phone with an in-car charger or battery pack</li>
                </ul>
                <h3 id="drive2">2. Driving safely in snow</h3>
                <h4>It is safer not to drive in heavy snow and icy conditions but if you absolutely must drive, keep yourself and others safe by:</h4>
                <ul class="m-2">
                    <li>Using dipped headlights</li>
                    <li>Accelerate gently, use low revs and change to higher gears as quickly as possible</li>
                    <li>Starting in second gear will help with wheel slip</li>
                    <li>Maintain a safe and steady speed. Keep your distance from other vehicles</li>
                    <li>Keep a constant speed up hills. Leave plenty of room between cars</li>
                    <li>Use a low gear to go down hill and try to avoid braking unless necessary</li>
                    <li>Steer into skids. Do not take your hands of the wheel or slam on the brakes</li>
                </ul>
                <h3 id="think">3. Thinking ahead and acting now so you can cope if cut off</h3>
                <h4>You could be without food, heat or light if you are cut off by snow and can't access services and amenities for a number of days. Act now and be prepared, by getting the essentials together that you could need:</h4>
                <ul class="m-2">
                    <li>Torches and batteries</li>
                    <li>Candles and matches or lighters</li>
                    <li>Plenty of blankets and warm clothing.</li>
                </ul>
                <h3 id="cutoff">4. Staying safe if you are cut off</h3>
                <h4>Following these simple steps will help keep you safe and well if isolated due to snow:</h4>
                <ul class="m-2">
                    <li>Keep the thermostat set to the same temperature, both during the day and at night.</li>
                    <li>Turn off electrical heaters and put out your fire before going to bed to avoid fire risk</li>
                    <li>Don't forget your pets. Create a place where they can be comfortable in severe winter weather.</li>
                    <li>Prevent frozen pipes, open kitchen and bathroom cabinet doors to allow warmer air to circulate around the plumbing</li>
                    <li>Stay indoors wearing layers of loose fitting lightweight warm clothing rather than bulky clothing</li>
                    <li>Never use a hob or oven to heat your home, they can increase carbon monoxide levels</li>
                </ul>
                <h3 id="powercut">5. What you can do in a powercut</h3>
                <h4>People cope better with power cuts when they have prepared for them in advance and it's easy to do. The essentials that could help you cope with a power cut are:</h4>
                <ul class="m-2">
                    <li>candles and matches or lighters</li>
                    <li>torches and batteries</li>
                    <li>a mobile phone power pack</li>
                </ul>
                <h4>If your power goes out these simple steps can help you deal with the situation:</h4>
                <ul class="m-2">
                    <li>Switch off all electrical appliances that shouldn't be left unattended, ready for when the power comes back on.</li>
                    <li>Leave a light on, so you know when the power cut has been fixed.</li>
                    <li>Check to see if your neighbours are safe and if they have a power cut too. If they have power, your trip switch may have activated.</li>
                    <li>Wrap up. If it's cold, wrap up warm and close internal doors to keep the heat in.</li>
                    <li>Portable heaters are a good alternative if heating systems are down.</li>
                    <li>Call 105 for information, it's a free service for people in England, Scotland and Wales.</li>
                </ul>
            </div>
        </div>
        
    </div>
</div>

<!-- Footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>