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
                <h1>How cold weather affects your health</h1>
                <h3 style="max-width: 700px">It's not just illnesses you need to protect yourself from in winter. Winter weather can bring many risks to you and your family.</h3>
                <p>There's the usual winter coughs, colds and flu, and this year we will also need to be aware of coronavirus, but then there are also risks to your health associated with flooding and storms.</p>
                <div class="m-2">
                    <p>1.<a href="#1">Why is winter weather a risk to our health?</a></p>
                    <p>2.<a href="#2">Dealing with winter illnesses</a></p>
                    <p>3.<a href="#3">Keep warm and active</a></p>
                    <p>4.<a href="#4">Cold  weather alerts for healthcare professionals</a></p>
                    <p>5.<a href="#5">Avoiding injury if you are out and about</a></p>
                </div>
                <h3 id="1" class="mb-3">1. Why is winter weather a risk to our health?</h3>
                <p>Cold temperatures have an impact on our health, but there are other risks in winter including physical injuries from slips, trips and falls.<br><br>As we get older it becomes harder for our bodies to detect how cold we are, and it takes longer to warm up which can be bad for our health. For older people in particular, the longer the exposure to the cold, the more risk of heart attacks, strokes, pneumonia, depression, worsening arthritis and increased accidents at home (associated with loss of strength and dexterity in the hands).</p>
                <h3 id="2" class="mb-3">2. Dealing with winter illnesses</h3>
                <p>If you are normally healthy, many of the coughs, colds and minor illnesses that seem to happen more frequently during winter can be safely managed yourself. There's plenty of advice about dealing with common winter illnesses from the <a href="https://www.nhs.uk/live-well/seasonal-health/keep-warm-keep-well/">NHS</a> and you can also talk to your local pharmacist.</p>
                <h5>Flu</h5>
                <p>Flu can affect people in different ways and can be more serious than you think. The flu vaccination is offered free of charge to people who are at most risk from the effects of the virus to protect them from catching flu and developing serious complications.</p>
                <h5>Handwashing</h5>
                <p>This is important now more than ever. Washing your hands with soap and water is one of the easiest ways to protect yourself and others from illnesses such as food poisoning, diarrhoea, flu and coronavirus.</p>
                <h3 id="3" class="mb-3">3. Keep warm and active</h3>
                <p>It is important to keep warm in winter both inside and outdoors. Keeping warm can help to prevent colds, flu and more serious health problems.</p>
                <p>Eating regularly helps keep you warm so try to have at least one hot meal a day along with regular hot drinks.</p>
                <p>Keep your house warm and your bedroom window closed especially on cold winter nights, as breathing cold air can be bad for your health as it increases the risk of chest infections.</p>
                <p>With many of us having to spend more time at home it can make it harder to keep active. It's important to continue to do what you can to stay active as this can help with both your physical and mental health. Try to keep moving when you are indoors, try not to sit still for more than an hour or so. Break up your time spent being inactive by walking around your home or standing up from your chair when you are on the phone.</p>
                <p>If you are heading outside for a walk or maybe some gardening, wear several layers of light clothes. Remember that several thin layers of clothing will keep you warmer than one thick layer as the layers trap warm air.</p>
                <p>It doesn't matter what you do to keep active, as long as it's something you enjoy and keeps you moving. There is strong evidence that people who are active have a lower risk of heart disease, stroke, depression and can also reduce the risk of falling.</p>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>