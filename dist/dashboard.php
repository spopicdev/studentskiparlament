<?php
include('session.php');
include('php_assets/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Admin Panel</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="dashboard.php">Administracija</a></li>
                <li><a href="admin_pages.php">Stranice</a></li>
                <li><a href="admin_news.php">Vesti</a></li>
                <li><a href="admin_members.php">Članovi</a></li>
                <li><a href="admin_events.php">Dešavanja</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"> Ulogovan kao: <?php include_once('session.php'); echo " $user_check"; ?></a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Administracija <small>Admin panel</small></h1>
            </div>
            <div class="col-md-2">
                <div class="dropdown create">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Postavi
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a type="button" data-toggle="modal" data-target="#addPage">Postavi Vest</a></li>
                        <li><a href="#">Postavi Anketu</a></li>
                        <li><a href="#">Postavi Dešavanje</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="active">Administracija</li>
        </ol>
    </div>
</section>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="index.html" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Administracija
                    </a>
                    <a href="admin_pages.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Stranice <span class="badge">2</span></a>
                    <a href="admin_news.php" class="list-group-item"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Vesti <span class="badge"><?php broj_vesti() ?></span></a>
                    <a href="admin_events.php" class="list-group-item"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span> Dešavanja <span class="badge">2</span></a>
                    <a href="admin_poll.php" class="list-group-item"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Ankete <span class="badge">0</span></a>
                    <a href="admin_members.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Članovi <span class="badge"><?php broj_clanova() ?></span></a>
                </div>


            </div>
            <div class="col-md-9">
                <!-- Pregled -->
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Pregled sajta</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php broj_clanova() ?> </h2>
                                <h4>Članovi</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 5</h2>
                                <h4>Stranice</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-list" aria-hidden="true"></span> <?php broj_vesti() ?></h2>
                                <h4>Vesti</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 500</h2>
                                <h4>Posetioci</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!--bottom pane Trenutni clanovi -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"> Sadašnji članovi</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Ime</th>
                                <th>Kontakt</th>
                                <th>Titula</th>
                            </tr>
                            <?php
                            include ('php_assets/dbconfig.php');

                            $sql= " SELECT * FROM clan ";
                            $result=mysqli_query($connection, $sql);
                            if($result->num_rows > 0 ){
                                while($row=mysqli_fetch_array($result))
                                {

                                    echo "<tr>    \n ";
                                    echo "<td>".$row["IME_CLANA"]."</td>     \n ";
                                    echo "<td>".$row["KONTAKT"]."</td>       \n ";
                                    echo "<td>".$row["TITULA"]."</td>        \n ";

                                    echo "</tr>                              \n ";
                                }
                            }

                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer  id="footer">
    <p>Copyright BINGBOT, &copy; 2017</p>
</footer>

<!-- Modal -->

<!-- Postavi -->
<div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="Vest">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"> Dodaj vest </h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Naslov</label>
                        <input type="text" class="form-control" placeholder="Naslov">
                    </div>
                    <div class="form-group">
                        <label>Sadržaj</label>
                        <textarea name="editor1" class="form-control" placeholder="Sadrzaj"></textarea>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Vidljivo
                        </label>
                    </div>
                    <div class="form-group">
                        <label>META</label>
                        <input type="text" class="form-control" placeholder="Tagovi">
                    </div>
                    <div class="form-group">
                        <label>META Opis</label>
                        <input type="text" class="form-control" placeholder="Opis">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                    <button type="submit" class="btn btn-primary">Postavi</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
