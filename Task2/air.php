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
    <script src="./air.js" defer></script>
    
    <style>

        .air-section{
            display: grid;
            grid-template-columns: repeat(auto-fit, 1000px);
            gap: 0.5rem;
            justify-content: center;
            padding: 1rem;
        }
        .air-card{
        display:flex;
        flex-direction: column;
        align-items: center;
        border: 2px solid #f5eec2;
        border-radius: 0.25rem;
        padding: 0.25rem;
    }

    .aqi-info-section{
        width: 100%;
        text-align: center;
        border-spacing: 0;
    }

    </style>

    <script>




    </script>

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
                    <a class="nav-link active" href="air.php">Air Quality</a>
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

<!-- Air Dashboard -->
<section class="p-5 text-center text-sm-start">
    <div class="container-fluid mt-3 p-2" style="background-color: lightgrey;">
        <div class="row">
            <div class="col-3">
                <h2>Air Quality</h2>
                <input type="text" class="form-control w-100 air-search-bar" id="airsearch" placeholder="Search Location">
            </div>
        </div>
        <!-- Before city search -->
        <section class="text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start mt-3" style="background-color: #416a59; display: block;" id="airabout">
                <div class="container">
                    <div class="d-sm-flex align-items-center justify-content-between pb-2">
                        <div class="px-3">
                            <h1>Air Quality Dashboard</h1>
                            <p class="lead my-3">Use our free Air Quality Dashboard to get information on air pollution for your desired city!</p>
                        </div>
                        <img class="img-fluid mt-3 d-none d-sm-block" src="img/nature.svg" alt=""> 
                    </div>
                </div>
            </section>
        <div class="air-section" id="airinfo" style="display: none;" >
            <div class="air-card" style="background-color:#416a59;">
                <div class="card-body" style="color: white;">
                    <h3 class="air-city"></h3>
                    <div class="aqi-bg">
                        <p class="aqi"></p>
                    </div>
                        <div class="current-text">
                        <p class="carbmon"></p>
                        <p class="nitmon"></p>
                        <p class="nitdio"></p>
                        <p class="oz"></p>
                        <p class="suldio"></p>
                        <p class="fpm"></p>
                        <p class="cpm"></p>
                        <p class="amm"></p>
                    </div>
                </div>
            </div>
            <div class="air-card" style="background-color:#416a59;">
                <div class="card-body" style="color: white;">
                    <table class="aqi-info-section" style="color: white;">
                        <tr class="aqi-row">
                            <td class="col-lg-2 pb-3"><h5>Air Pollution Banding</h5></td>
                            <td class="col-lg-1 pb-3"><h5>Value</h5></td>
                            <td class="col-lg-5 pb-3"><h5>Health messages for at-risk individuals</h5></td>
                            <td class="col-lg-5 pb-3"><h5>Health messages for the general population</h5></td>
                        </tr>
                        <tr class="aqi-row">
                            <td class="col-lg-2 pb-3">Low</td>
                            <td class="col-lg-1 pb-3">1-3</td>
                            <td class="col-lg-5 pb-3">Enjoy your usual outdoor activities.</td>
                            <td class="col-lg-5 pb-3">Enjoy your usual outdoor activities.</td>
                        </tr>
                        <tr class="aqi-row">
                            <td class="col-lg-2 pb-3">Moderate</td>
                            <td class="col-lg-1 pb-3">4-6</td>
                            <td class="col-lg-5 pb-3">Adults and children with lung problems, and adults with heart problems, who experience symptoms, should consider reducing strenuous physical activity, particularly outdoors.</td>
                            <td class="col-lg-5 pb-3">Enjoy your usual outdoor activities.</td>
                        </tr>
                        <tr class="aqi-row">
                            <td class="col-lg-2 pb-3">High</td>
                            <td class="col-lg-1 pb-3">7-9</td>
                            <td class="col-lg-5 pb-3">Adults and children with lung problems, and adults with heart problems, should reduce strenuous physical exertion, particularly outdoors, and particularly if they experience symptoms. People with asthma may find they need to use their reliever inhaler more often. Older people should also reduce physical exertion.</td>
                            <td class="col-lg-5 pb-3">Anyone experiencing discomfort such as sore eyes, cough or sore throat should consider reducing activity, particularly outdoors.</td>
                        </tr>
                        <tr class="aqi-row">
                            <td class="col-lg-2 pb-3">Very High</td>
                            <td class="col-lg-1 pb-3">10</td>
                            <td class="col-lg-5 pb-3">Adults and children with lung problems, adults with heart problems, and older people, should avoid strenuous physical activity. People with asthma may find they need to use their reliever inhaler more often.</td>
                            <td class="col-lg-5 pb-3">Reduce physical exertion, particularly outdoors, especially if you experience symptoms such as cough or sore throat.</td>
                        </tr>
                    </table>
                    <p>For more information on air pollution vist <a target="_blank" href="https://uk-air.defra.gov.uk/air-pollution/">UK Air</a></p>
                </div>
            </div>
        </div>
        
    </div>
</section>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 

</body>