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
                <h1>Staying safe in heavy rain</h1>
                <h3 style="max-width: 640px">When there is a rain warning in place, here are some things you can do...</h2>
                <div class="m-2">
                    <p>1.<a href="#1">Could your property be at risk of flooding</a></p>
                    <p>2.<a href="#2">Staying safe in flooding</a></p>
                    <p>3.<a href="#3">Is it safe for you to drive?</a></p>
                    <p>4.<a href="#4">What about flood water?</a></p>
                    <p>5.<a href="#5">Thinking about your neighbours</a></p>
                </div>
                <h3 id="1" class="mb-3">1. Could your property be at risk of flooding?</h3>
                <h4>Follow this three-point plan to check and be prepared:</h4>
                <ul class="m-2">
                    <li>Check if your property is at risk.</li>
                    <p>If you are at risk, take the next two steps to protect your property when you need to:</p>
                    <li>Prepare a flood plan</li>
                    <li>Prepare an emergency flood kit</li>
                </ul>
                <h3 id="2" class="mb-3">2. Staying safe in flooding</h3>
                <h4>It's never too late to take action and prepare for flooding. Follow these 6 simple steps to protect your home or business:</h4>
                <ul class="m-2">
                    <li>Check the flood advice in your area to know when and where flooding will happen</li>
                    <li>Charge mobile phone devices</li>
                    <li>Park your car outside the flood zone</li>
                    <li>Prepare a flood kit to help you cope in the event of flooding to your home and business</li>
                    <li>Store valuables up high, including electrical devices, important documents and furniture</li>
                    <li>Turn off gas water and electricity supplies</li>
                </ul>
                <p>If you are trapped in a building by floodwater, follow these simple instructions to keep you and your family safe:</p>
                <ul class="m-2">
                    <li>Go to the highest level in the building you are in</li>
                    <li>Do not go into attic spaces to avoid being trapped by rising water</li>
                    <li>Only go to a roof if necessary</li>
                    <li>Call 999 and wait for help</li>
                </ul>
                <p>More about <a href="https://www.metoffice.gov.uk/weather/warnings-and-advice/seasonal-advice/your-home/what-to-do-in-a-flood">what to do in a flood</a></p>

                <h3 id="3" class="mb-3">3. Is it safe for you to drive?</h3>
                <h4>It is safer not to drive in these conditions but if you must drive you can do this more safely by:</h4>
                <ul class="m-2">
                    <li>Slowing down</li>
                    <li>Using main roads</li>
                    <li>Using dipped headlights</li>
                    <li>Giving yourself more time to react on slippery surfaces</li>
                    <li>Keeping a bigger gap between vehicles</li>
                </ul>
                <h3 id="4" class="mb-3">4. What about flood water?</h3>
                <p>It is not safe to drive or walk or swim through floodwater, avoid it where possible and if you are affected by fast flowing or deep water call 999 and wait for help.</p>
                <h3 id="5" class="mb-3">5. Thinking about your neighbours</h3>
                <p>Help to protect the vulnerable people that you know, including older people, those with underlying conditions and those who live alone: they may need support with food and medical supplies.<br><br>If you are worried about your health or that of somebody you know, ring NHS 111.</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
