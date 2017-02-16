<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <title> Članovi </title>
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
                <li><a href="contact.php">Kontakt</a></li>
                <li><a href="ankete.php">Ankete</a></li>
                <li><a href="projects.php">Projekti</a></li>
                <li class="active"><a href="members.php">Članovi</a></li>
            </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container member-box">
    <?php
    include ('php_assets/dbconfig.php');
    $sql="SELECT * FROM clan ";
    $result=mysqli_query($connection, $sql);
    if($result->num_rows > 0 ) {
        while ($row = mysqli_fetch_array($result)) {
    ?>
            <div class="col-lg-6 col-sm-12 member">
                <img class="member-image" src="img/<?= $row['IMG'] ?>">
                <table class="table table-striped table-hover">
                    <tr> <td> <?= $row['IME_CLANA'] ?> </td> </tr>
                    <tr> <td><?= $row['KONTAKT'] ?> </td> </tr>
                    <tr> <td><?= $row['TITULA'] ?> </td> </tr>
                </table>
            </div>
       <?php }
    }
    ?>

</div>

<footer id="footer">
    <p>Copyright BINGBOT, &copy; 2017</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body
</html>