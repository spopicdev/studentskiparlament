<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <title> Studentski parlament </title>
</head>
<?php include('header.html'); ?>
<body>

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
                <li class="active"><a href="index.php">Naslovna</a></li>
                <li><a href="contact.php">Kontakt</a></li>
                <li><a href="ankete.php">Ankete</a></li>
                <li><a href="projects.php">Projekti</a></li>
                <li><a href="members.php">Članovi</a></li>
            </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>


<div class="container news-box">
    <?php
    include ('php_assets/dbconfig.php');
    $sql="SELECT * FROM vest ";
    $result=mysqli_query($connection, $sql);
    if($result->num_rows > 0 ) {
        while ($row = mysqli_fetch_array($result)) {

            echo "<div class=\"panel panel-primary \"> \n";
            echo "<div class=\"panel-heading\">" . $row["NAZIV_VESTI"] . "<div class=\" datum-vest-right \">".$row["DATUM_VESTI"]."  </div></div> \n";
            echo "<div class=\"panel-body sample\">" . $row["SADRZAJ_VESTI"] . "</div> \n";
            echo "</div> \n";
        }
    }
?>

</div>

<footer id="footer">
    <p>Copyright BINGBOT, &copy; 2017</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


</body>
</html>
