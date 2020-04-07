<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <link href="ekko-lightbox", type="text/css rel="stylesheet">
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
        <p>Wind: <span id="wind"></span>km/h <img src="" alt="wolken" id="clouds">Temperatuur:  <span id="temp"></span>°C <div id="weer"></div></p>
    </div>
</div>

<div class="container">
    <div class="row overons inleiding">
        <div class="col-sm-12">
            <h4>Flowerpower</h4>
            <p><strong>WAT IS FLOWERPOWER?</strong></p>
            <p>
                Hallo, beste bezoeker van Dakpark Rotterdam
                Als je dit nu leest, heb je hoogstwaarschijnlijk de QR code gescand van onze installatie: Flower Power.
                Het doel van deze installatie is het opvullen en opvrolijken van het Dakpark. Door de ligging van het park waait het er namelijk soms zo hard en schijnt de zon er soms zo fel, dat veel planten niet kunnen groeien bovenaan de heuvel.
                Om deze reden heeft het collectief “CMGT14”op eigen initiatief deze installatie gebouwd, midden in het Dakpark, bovenop de heuvel. Nu kunnen jij én anderen alsnog genieten van flora, zonder dat het weer daar enig invloed op heeft.
            </p>
            <p>
                Hoe werkt het?
                Als je de Flower Power pagina opent, vind je een knop. Door te klikken op deze knop kun je de bloemen helpen groeien. Nadat je op de knop hebt geklikt, ontvang je ook nog eens een willekeurig feitje over bloemen. Zo kun jij meehelpen met het opvrolijken van het park en helpen wij jou nog een beetje met het verbreden van je algemene kennis!
            </p>
            <p>
                De website
                Naast deze Homepage en de Flower Power pagina, is er op deze website ook nog een Dakpark pagina te vinden waarin meer informatie staat over het Dakpark zelf. Je kunt er bijvoorbeeld meer lezen over de geschiedenis van het park en openingstijden van het park of de speeltuin die zich in het park bevind.
                Ook zie je bovenaan de website nog wat icoontjes en tekstjes die je vertellen wat de weersomstandigheden zijn op het moment. Je kunt aflezen hoe warm het is, of er wolken staan en hoe hard het waait. Zo weet je altijd of je je tijd kan nemen om op een bankje lekker te genieten van de zon, maar weet je ook op tijd wanneer je moet schuilen voor de regen!

            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="container">
        <div class="row header-img">
            <a href="images/5e92feb5-b67d-42e2-bd8c-b5e877232d69.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
                <img src="images/5e92feb5-b67d-42e2-bd8c-b5e877232d69.jpg" class="img-fluid rounded">
            </a>
            <a href="images/a62b0676-d000-4143-9c92-413900cfabab.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
                <img src="images/a62b0676-d000-4143-9c92-413900cfabab.jpg" class="img-fluid rounded">
            </a>
            <a href="images/b111bb4c-49e0-46ba-a378-16fc80018ba6.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
                <img src="images/b111bb4c-49e0-46ba-a378-16fc80018ba6.jpg" class="img-fluid rounded">
            </a>
            <a href="images/366ed58c-ee71-4d36-9210-347a523c98b7.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
                <img src="images/366ed58c-ee71-4d36-9210-347a523c98b7.jpg" class="img-fluid rounded">
            </a>
        </div>
    </div>
</div>


<!--<img src="images/folder.jpg">-->
<div class="footer-main  py-5 small">
    <div class="footer container">
        <p>© CLE project team 14 2020</p>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>
</body>
</html>
