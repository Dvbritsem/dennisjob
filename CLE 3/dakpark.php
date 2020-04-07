<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
        <p>Wind: <span id="wind"></span>km/h <img src="" alt="wolken" id="clouds">Temperatuur:  <span id="temp"></span>°C</p>
    </div>
</div>

<div class="container">
    <div class="row overons inleiding">
        <div class="col-sm-12">
            <h4>Dakpark</h4>
            <p><strong>GROOTSTE OPENBAAR PARK OP EEN DAK</strong></p>
            <p>Dit prachtige park is het resultaat door inzet van een bewonersiniatief uit de wijk, dat zich vormde rond 1999.
                Samen met de stad en projectontwikkelaars heeft de buurt het park ontworpen. Dat maakt dit park zo bijzonder,
                naast dat het op een DAK gesitueerd is! Het park wordt geprogrammeerd en beheerd door bewoners.
            </p>
            <p>
                Het Dakpark is een langgerekt, smal park in de wijk Bospolder/Tussendijken in Rotterdam-West.
                Het is op ongeveer negen meter hoogte aangelegd op het oude spoorwegemplacement van de havenspoorlijn,
                dat is omgebouwd tot een winkelboulevard.
            </p>
            <p>
                Het Dakpark strekt zich over ongeveer een kilometer uit van het Hudsonplein tot vlak bij het Marconiplein.
                Het is ongeveer 85 meter breed. Het park kent een aantal bijzondere plekken: zo is er een mediterrane tuin (nabij het parkrestaurant),
                is er een aflopende waterpartij met fonteinen, een speeltuin en een buurttuin.
                Het park is van april tot en met september geopend van 7.00u tot 23.00u.
                Van oktober tot en met maart sluit het park om 20.00u. De speeltuin is tijdelijk gesloten.
            </p>
            <p>
                Adres: Stichting Dakpark Rotterdam, Schiedamseweg 41a , 3026 AC Rotterdam
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="container">
        <div class="row header-img">
            <div class="col-md-3">
                <a href="images/IMG_8710.JPG" data-toggle="lightbox" data-gallery="gallery">
                    <img src="images/IMG_8710.JPG" class="img-fluid rounded">
                </a><br>
                <a href="images/IMG_8826(20200303-214902).JPG" data-toggle="lightbox" data-gallery="gallery">
                    <img src="images/IMG_8826(20200303-214902).JPG" class="img-fluid rounded">
                </a>
            </div>
            <a href="images/IMG_8716(1).JPG" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
                <img src="images/IMG_8716(1).JPG" class="img-fluid rounded">
            </a>
            <a href="images/IMG_8817(20200219-150738).JPG" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
                <img src="images/IMG_8817(20200219-150738).JPG" class="img-fluid rounded">
            </a>
            <div class="col-md-3">
            <a href="images/IMG_8822(20200303-214901).JPG" data-toggle="lightbox" data-gallery="gallery">
                <img src="images/IMG_8822(20200303-214901).JPG" class="img-fluid rounded">
            </a><br>
            <a href="images/IMG_8710.JPG" data-toggle="lightbox" data-gallery="gallery">
                <img src="images/IMG_8710.JPG" class="img-fluid rounded">
            </a>
            </div>
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
    $(document).on("click", '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>

</body>
</html>
