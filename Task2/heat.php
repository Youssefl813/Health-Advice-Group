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
                <h1>Staying Safe in the Heat</h1>
                <h3 style="max-width: 700px">Most of us welcome hot weather, but when it's too hot for too long, there are health risks.</h3>
                <p>In England, there are on average 2000 heat-related deaths every year. If hot weather hits this summer, make sure it does not harm you or anyone you know. The heat can affect anyone, but some people are at greater risk from it.

For some people - especially older people and those with underlying health conditions, as well as those who can't adapt their behaviour to keep cool or who are exposed to high levels of heat because of where they live or work - the summer heat can bring real health risks. As our climate changes, hot spells are expected to be more frequent and more intense. </p>
                <div class="m-2">
                    <p>1.<a href="#1">What is the weather like in summer?</a></p>
                    <p>2.<a href="#2">Heatwaves</a></p>
                    <p>3.<a href="#3">Impacts of hot weather</a></p>
                    <p>3.<a href="#4">Make sure you know what to do</a></p>
                </div>
                <h3 id="1">1. What is the weather like in summer?</h3>
                <h4 class="lead">On average in the UK, July is the warmest month and June the sunniest while the rainfall totals throughout the UK in summer can be rather variable. The highest temperatures tend to be seen around London and the south-east with the coolest temperatures experienced throughout Scotland and northern England.</h4>
                <h4 class="lead">The UK in summer can experience blocking anticyclones which can bring long spells of warm weather and create heatwave conditions.</h4><br><br>
                <h3 id="2">2. Heatwaves</h3>
                <h4 class="lead">The UK experiences occasional heatwaves but of a lesser frequency and intensity to those seen elsewhere globally.

On 19 July 2022 for the first time on record, temperatures in the UK exceeded 40°C. A new record maximum temperature of 40.3ºC was recorded at Coningsby, Lincolnshire, exceeding the previous record of 38.7ºC, recorded at Cambridge University Botanic Garden on 25 July 2019, by 1.6ºC.

New national temperature records were also set for Wales and Scotland, along with a new record high daily minimum temperature for Wales of 24.5ºC at Aberporth.</h4><br><br>
                <h3 id="3">3. Impacts of hot weather</h3>
                <h4 class="lead">Whilst many of us like to enjoy the sunshine and hot weather, we should make sure we do it safely and remember certain groups of people are more vulnerable than others to heat or ultraviolet radiation.<br><br>
                Hot weather places a strain on the heart and lungs. For that reason, the majority of serious illness and deaths caused by heat are respiratory and cardiovascular. Older people, those with pre-existing health conditions and young children are particularly at risk. Overexposure to the sun is equally dangerous, with effects ranging from mild sunburn to skin cancer. It doesn't have to be hot for the UV index to be high.<br><br>
                The hot weather not only affects us but can also place strains on water and energy utilities, road and rail transport and the health and fire services.<br><br>
                In 2006 heat damage to road surfaces was reported from Cornwall to Cumbria, with the cost of repairs estimated at £3.6m in Oxfordshire alone. Speed restrictions were introduced on many rail lines, because of the risk of buckling with the west coast main line particularly affected with delays and cancellations.<br><br>
                In 1990 the fire services were kept busy tackling heath and farmland fires that broke out due to the dry conditions that had prevailed since March that year.<br><br>
                In 1976, one of the most prolonged heatwaves in living memory, the hot, dry weather affected domestic water supplies leading to widespread water rationing.</h4><br><br>
                <h3 id="4">4. Make sure you know what to do</h3>
                <h4>Leading health organisations across the UK recommend:</h4>
                <ul class="m-2">
                    <li>Try to keep your house cool, closing blinds or curtains can help.</li>
                    <li>At night, keep your sleeping area well ventilated. Night cooling is important as it allows the body to recuperate.</li>
                    <li>Try to stay cool by taking cool showers or baths and/or sprinkle yourself several times a day with cold water.</li>
                    <li>Avoid too much exercise when very hot, which can cause heat exhaustion or heat stroke, and watch for signs of heat stress - an early sign is fatigue.</li>
                    <li>Drink plenty of fluids, but not alcohol, which dehydrates the body.</li>
                    <li>Try to eat as you normally would. Not eating properly may exacerbate health-related problems.</li>
                    <li>Keep your vehicle well ventilated to avoid drowsiness. Take plenty of water with you and have regular rest breaks.</li>
                    <li>If you have vulnerable neighbours who may be at risk during a heatwave, try to find out if someone is already looking after them or if they would like you to ring them daily. </li>
                    <li>If you do go out for exercise or into your garden, try to avoid the hottest part of the day (11 am to 3 pm) and seek shade where possible. Avoid being in the sun for long stretches. Wear lightweight, light-coloured clothing, high factor sunscreen and a wide-brimmed hat.</li>
                    <li>The UV index (the strength of the sun) can be high at many times of the year - it doesn't have to be hot. The UV index can be strong through cloud even when the sun isn't directly shining.</li>
                    <li>Reapply an appropriate factor sun cream at regular intervals during the day.</li>
                </ul>
            </div>
        </div>
        
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>