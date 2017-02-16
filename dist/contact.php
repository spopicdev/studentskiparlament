<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <title> Kontakt </title>
</head>
<?php include ('header.html'); ?>

<nav class="navbar navbar-default" style="border: 0;">
    <div class="nav-bar">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Naslovna</a></li>
                <li class="active"><a href="contact.php">Kontakt</a></li>
                <li><a href="ankete.php">Ankete</a></li>
                <li><a href="projects.php">Projekti</a></li>
                <li><a href="members.php">Članovi</a></li>
            </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>




<div class="container news-box">




    <div class="kontakt-text" style="float: left;">
        <form class="form-group" action="admin_contact.php" method="post">

            <label>
                Ime:<span style="color:#f00;">*</span> <br/><input type="text" name="name"><br/><br/>
                E-mail: <span style="color:#f00;">*</span><br/><input type="email" name="mail">
                <br/><span style="color:#f00; font-size: 7.5pt">Polja obeležena sa * nije obavezno popuniti</span>
            </label>
            <br/><br/>
            <label>Kontaktirajte nas:</label> <br>

            <textarea class="form-control-static" cols="50" rows="5"></textarea>
            <button type="submit" class="btn btn-info">Send</button>
        </form>
        <h5>Visoka tehnička škola strukovnih studija</h5>
        <h5>Marka Oreškoviċa 16</h5>
        <h5>Drugi sprat, prostorija 203a</h5>
            <h5>24000 Subotica, Srbija</h5>
                <h5>+38124/655-201</h5>
                    <h5>parlament@vts.su.ac.rs</h5>
    </div>




    <div id="map" class="img-responsive" style="float: right;"></div>
    <script>
        function initMap() {
            var uluru = {lat: 46.094427, lng: 19.662115};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjXh_gMg8vTDeHmtxTo2Gh3jEgDy7AFHQ&callback=initMap">
    </script>



</div>

<footer id="footer">
    <p>Copyright BINGBOT, &copy; 2017</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>