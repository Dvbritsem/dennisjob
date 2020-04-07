<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/opmaak.css">
    <meta name='viewport' content='width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no' />
</head>
<body class="index">

<nav class="fixed-top navbar navbar-expand-lg navbar-dark ">
    <div class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block"></span>
        <a class="navbar-logo" href="#">FLOWERPOWER</a>
        <div class="w-100 text-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar7">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse flex-grow-1" id="myNavbar7">
        <ul class="navbar-nav ml-auto flex-nowrap">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="bloem.php">Flowerpower</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dakpark.php">Dakpark</a>
            </li>
        </ul>
    </div>
</nav>

<div class="headerfoto">
    <img class="dakpark" src="images/Dakpark.jpg" alt="dakpark">
</div>

<div class="container">
    <div class="weerinfo">
        <p>Wind: <span id="wind"></span>km/h <img src="" alt="wolken" id="clouds">Temperatuur:  <span id="temp"></span>°C</p>
    </div>
</div>

<div class="container">
    <div class="row overons inleiding">
        <div class="col-sm-12">
            <h4>Flowerpower installatie</h4>
            <p>Hieronder zie je de groeiknop voor de bloemen.
            </p>
            <p> <button class="button1" id="button">Groei</button></p>
            <p id="Status"><p/>
            <p id="Fact"><p/>
        </div>
    </div>
</div>


<!--<img src="images/folder.jpg">-->
<div class="footer-main  py-5 small">
    <div class="footer container">
        <p>© CLE project team 14 2020</p>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/FlowerControl.js"></script>
<script type="text/javascript" src="js/RandomFacts.js"></script>
</body>
</html>
