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
    <script src="https://kit.fontawesome.com/cd6c293668.js" crossorigin="anonymous"></script>
    <link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script src="./weather.js" defer></script>

    

<style>


    body{
        background-color: #416a59; 
    }
    *, *::after, *::before{
        box-sizing: border-box;
    }

    .weather-icon{
    width: 80px;
    height: 80px;
    object-fit: contain;
    }
    .current-temp{
        display: flex;
        margin-right: 100px;
        width: 50%;
        justify-content: center;
        border-right: 2px solid #f5eec2;
        font-size: 20px;
        
    }

    .current-temp{
        margin-left: 1rem;
        display: flex;
        align-items: center;
    }

    .current-right{
        display: grid;
        width: 50%;
        justify-content: space-around;
        grid-template-columns: repeat(2, auto);
        grid-template-rows: repeat(2, auto);
    }

    .info-group{
        display:flex;
        flex-direction: column;
        align-items: center;
    }

    .label{
        text-transform:uppercase;
        font-weight: bold;
        font-size: 0.9rem;
    }

    .info-unit{
        font-weight: lighter;
        font-size: 0.8rem;
    }

    .day-section{
        display: grid;
        grid-template-columns: repeat(auto-fit, 120px);
        gap: 0.5rem;
        justify-content: center;
        padding: 1rem;

    }

    .day-card{
        display:flex;
        flex-direction: column;
        align-items: center;
        border: 2px solid #f5eec2;
        border-radius: 0.25rem;
        padding: 0.25rem;
    }

    .hour-section{
        width: 100%;
        text-align: center;
        border-spacing: 0;
    }
    .hour-row{
        background-color: #a9c25d;

    }

    .hour-row:nth-child(2n) {
        background-color: #73a24e;
    }

    .hour-row > td{
        padding: 0.25rem 0.5rem;
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
                    <a class="nav-link active" href="forecast.php">Weather Forecast</a>
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
   

<!-- Forecast Interface Before and After Search-->
<!-- Current Temp -->
<section class="text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start mt-3" style="background-color: #416a59;">
    <div class="container">
    <div class="row">
            <div class="col-7">
                <input type="text" class="form-control mb-3 mt-3 search-bar" placeholder="Search Location">
            </div> 
        </div>
        <div>
            <!-- UI Before Forecast Search -->
            <section class="text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start mt-3" style="background-color: #416a59; display: block;" id="forecastabout">
                <div class="container">
                    <div class="d-sm-flex align-items-center justify-content-between pb-2">
                        <div class="px-3">
                            <h1>Weather Forecast</h1>
                            <p class="lead my-3">We provide a free and fully accurate weather forecast! To start simply enter the your desired city into the search bar.</p>
                        </div>
                        <img class="img-fluid mt-3 d-none d-sm-block" src="img/forecastimg.svg" alt=""> 
                    </div>
                </div>
            </section>
        </div>
        <div id ="about" style="display: none;">
        <div class="d-sm-flex align-items-center">
            <div class="current-temp">
                <div class="col-lg-2 col-md-5 m-2 card w-50" style="background-color:#416a59;">
                    <img src="" class="weather-icon" alt="">
                <div class="card-body" style="color: white;">
                    <p class="city"></p>
                    <p class="description"></p>
                    <div class="current-text">
                        <p class="temp"></p>
                        <p class="feels-like"></p>
                    </div>
                </div>
            </div>
                
                
            </div>
            <div class="current-right" id="currentright">
                <div class="info-group">
                    <div class="label">High</div>
                    <div><p class="temp-max"></p></div>
                </div>
                <div class="info-group">
                    <div class="label">Wind</div>
                    <div><p class="wind-speed"></p></div>
                </div>
                <div class="info-group">
                    <div class="label">Low</div>
                    <div><p class="temp-low"></p></div>
                </div>
                <div class="info-group">
                    <div class="label">Humidity</div>
                    <div><p class="humidity"></p></div>
                </div>
            </div>
        </div>
    </div>
        </div>
        
</section>

<!-- Daily Forecast -->
<section class="day-section container mt-3 text-light" id="dailyinfo" style="display: none;">
    <div class="day-card">
        <div class="day-card-day">
            <p id="day2"></p>
        </div>
        <img src="" id="day2icon">
        <div><p>Max: <span id="day2max"></span></p></div>
        <div><p>Min: <span id="day2min"></span></p></div>
    </div>
    <div class="day-card">
        <div class="day-card-day"><p id="day3"></p></div>
        <img src="" id="day3icon">
        <div><p>Max: <span id="day3max"></span></p></div>
        <div><p>Min: <span id="day3min"></span></p></div>
    </div>
    <div class="day-card">
        <div class="day-card-day"><p id="day4"></p></div>
        <img src="" id="day4icon">
        <div><p>Max: <span id="day4max"></span></p></div>
        <div><p>Min: <span id="day4min"></span></p></div>
    </div>
    <div class="day-card">
        <div class="day-card-day"><p id="day5"></p></div>
        <img src="" id="day5icon">
        <div><p>Max: <span id="day5max"></span></p></div>
        <div><p>Min: <span id="day5min"></span></p></div>
    </div>
    <div class="day-card">
        <div class="day-card-day"><p id="day6"></p></div>
        <img src="" id="day6icon">
        <div><p>Max: <span id="day6max"></span></p></div>
        <div><p>Min: <span id="day6min"></span></p></div>
    </div>
    <div class="day-card">
        <div class="day-card-day"><p id="day7"></p></div>
        <img src="" id="day7icon">
        <div><p>Max: <span id="day7max"></span></p></div>
        <div><p>Min: <span id="day7min"></span></p></div>
    </div>
</div>
</section>

<!-- Hourly Forecast -->
<table class="hour-section" id="hourlyinfo" style="display: none;">
    <tbody>
    <tr class="hour-row">
            <td>
                <div class="info-group">
                    <div><p id="hour1"></p></div>
                </div>
            </td>
            <td>
                <img src="" class="" id="hour1icon">
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Temp</div>
                    <div><p id="hour1temp"></p></div>
                </div>
            </td>
            <td>
             <div class="info-group">
                    <div class="label">FL Temp</div>
                    <div><p id="hour1feels"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Wind</div>
                    <div><p id="hour1wind"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Humidity</div>
                    <div><p id="hour1humid"></p></div>
                </div>
            </td>
        </tr>
        <tr class="hour-row">
            <td>
                <div class="info-group">
                    <div><p id="hour2"></p></div>
                </div>
            </td>
            <td>
                <img src="" class="" id="hour2icon">
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Temp</div>
                    <div><p id="hour2temp"></p></div>
                </div>
            </td>
            <td>
             <div class="info-group">
                    <div class="label">FL Temp</div>
                    <div><p id="hour2feels"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Wind</div>
                    <div><p id="hour2wind"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Humidity</div>
                    <div><p id="hour2humid"></p></div>
                </div>
            </td>
        </tr>
        <tr class="hour-row">
            <td>
                <div class="info-group">
                    <div><p id="hour3"></p></div>
                </div>
            </td>
            <td>
                <img src="" class="" id="hour3icon">
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Temp</div>
                    <div><p id="hour3temp"></p></div>
                </div>
            </td>
            <td>
             <div class="info-group">
                    <div class="label">FL Temp</div>
                    <div><p id="hour3feels"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Wind</div>
                    <div><p id="hour3wind"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Humidity</div>
                    <div><p id="hour3humid"></p></div>
                </div>
            </td>
        </tr>
        <tr class="hour-row">
            <td>
                <div class="info-group">
                    <div class="label" id="dayname"></div>
                    <div><p id="hour4"></p></div>
                </div>
            </td>
            <td>
                <img src="" class="" id="hour4icon">
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Temp</div>
                    <div><p id="hour4temp"></p></div>
                </div>
            </td>
            <td>
             <div class="info-group">
                    <div class="label">FL Temp</div>
                    <div><p id="hour4feels"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Wind</div>
                    <div><p id="hour4wind"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Humidity</div>
                    <div><p id="hour4humid"></p></div>
                </div>
            </td>
        </tr>
        <tr class="hour-row">
            <td>
                <div class="info-group">
                    <div class="label" id="dayname"></div>
                    <div><p id="hour5"></p></div>
                </div>
            </td>
            <td>
                <img src="" class="" id="hour5icon">
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Temp</div>
                    <div><p id="hour5temp"></p></div>
                </div>
            </td>
            <td>
             <div class="info-group">
                    <div class="label">FL Temp</div>
                    <div><p id="hour5feels"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Wind</div>
                    <div><p id="hour5wind"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Humidity</div>
                    <div><p id="hour5humid"></p></div>
                </div>
            </td>
        </tr>
        <tr class="hour-row">
            <td>
                <div class="info-group">
                    <div class="label" id="dayname"></div>
                    <div><p id="hour6"></p></div>
                </div>
            </td>
            <td>
                <img src="" class="" id="hour6icon">
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Temp</div>
                    <div><p id="hour6temp"></p></div>
                </div>
            </td>
            <td>
             <div class="info-group">
                    <div class="label">FL Temp</div>
                    <div><p id="hour6feels"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Wind</div>
                    <div><p id="hour6wind"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Humidity</div>
                    <div><p id="hour6humid"></p></div>
                </div>
            </td>
        </tr>
        <tr class="hour-row">
            <td>
                <div class="info-group">
                    <div class="label" id="dayname"></div>
                    <div><p id="hour7"></p></div>
                </div>
            </td>
            <td>
                <img src="" class="" id="hour7icon">
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Temp</div>
                    <div><p id="hour7temp"></p></div>
                </div>
            </td>
            <td>
             <div class="info-group">
                    <div class="label">FL Temp</div>
                    <div><p id="hour7feels"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Wind</div>
                    <div><p id="hour7wind"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Humidity</div>
                    <div><p id="hour7humid"></p></div>
                </div>
            </td>
        </tr>
        <tr class="hour-row">
            <td>
                <div class="info-group">
                    <div class="label" id="dayname"></div>
                    <div><p id="hour8"></p></div>
                </div>
            </td>
            <td>
                <img src="" class="" id="hour8icon">
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Temp</div>
                    <div><p id="hour8temp"></p></div>
                </div>
            </td>
            <td>
             <div class="info-group">
                    <div class="label">FL Temp</div>
                    <div><p id="hour8feels"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Wind</div>
                    <div><p id="hour8wind"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Humidity</div>
                    <div><p id="hour8humid"></p></div>
                </div>
            </td>
        </tr>
        <tr class="hour-row">
            <td>
                <div class="info-group">
                    <div class="label" id="dayname"></div>
                    <div><p id="hour9"></p></div>
                </div>
            </td>
            <td>
                <img src="" class="" id="hour9icon">
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Temp</div>
                    <div><p id="hour9temp"></p></div>
                </div>
            </td>
            <td>
             <div class="info-group">
                    <div class="label">FL Temp</div>
                    <div><p id="hour9feels"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Wind</div>
                    <div><p id="hour9wind"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Humidity</div>
                    <div><p id="hour9humid"></p></div>
                </div>
            </td>
        </tr>
        <tr class="hour-row">
            <td>
                <div class="info-group">
                    <div class="label" id="dayname"></div>
                    <div><p id="hour10"></p></div>
                </div>
            </td>
            <td>
                <img src="" class="" id="hour10icon">
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Temp</div>
                    <div><p id="hour10temp"></p></div>
                </div>
            </td>
            <td>
             <div class="info-group">
                    <div class="label">FL Temp</div>
                    <div><p id="hour10feels"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Wind</div>
                    <div><p id="hour10wind"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Humidity</div>
                    <div><p id="hour10humid"></p></div>
                </div>
            </td>
        </tr>
        <tr class="hour-row">
            <td>
                <div class="info-group">
                    <div class="label" id="dayname"></div>
                    <div><p id="hour11"></p></div>
                </div>
            </td>
            <td>
                <img src="" class="" id="hour11icon">
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Temp</div>
                    <div><p id="hour11temp"></p></div>
                </div>
            </td>
            <td>
             <div class="info-group">
                    <div class="label">FL Temp</div>
                    <div><p id="hour11feels"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Wind</div>
                    <div><p id="hour11wind"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Humidity</div>
                    <div><p id="hour11humid"></p></div>
                </div>
            </td>
        </tr>
        <tr class="hour-row">
            <td>
                <div class="info-group">
                    <div class="label" id="dayname"></div>
                    <div><p id="hour12"></p></div>
                </div>
            </td>
            <td>
                <img src="" class="" id="hour12icon">
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Temp</div>
                    <div><p id="hour12temp"></p></div>
                </div>
            </td>
            <td>
             <div class="info-group">
                    <div class="label">FL Temp</div>
                    <div><p id="hour12feels"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Wind</div>
                    <div><p id="hour12wind"></p></div>
                </div>
            </td>
            <td>
                <div class="info-group">
                    <div class="label">Humidity</div>
                    <div><p id="hour12humid"></p></div>
                </div>
            </td>
        </tr>
    </tbody>
</table>



<script src="weather.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>