<?php  include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Članovi</title>
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
                <li><a href="dashboard.php">Administracija</a></li>
                <li><a href="admin_pages.php">Stranice</a></li>
                <li><a href="admin_news.php">Vesti</a></li>
                <li class="active"><a href="admin_members.php">Članovi</a></li>
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
                <div class="create">
                    <button class="btn btn-default" type="button" aria-haspopup="true" aria-expanded="true" data-toggle="modal" data-target="#DodajClana">
                        Dodaj člana
                    </button>

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
                    <a href="admin_pages.php" class="list-group-item "><span class="glyphicon glyphicon-list-alt " aria-hidden="true"></span> Stranice <span class="badge">5</span></a>
                    <a href="admin_news.php" class="list-group-item"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Vesti <span class="badge">5</span></a>
                    <a href="admin_events.php" class="list-group-item"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span> Dešavanja <span class="badge">2</span></a>
                    <a href="admin_poll.php" class="list-group-item"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Ankete <span class="badge">0</span></a>
                    <a href="admin_members.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Članovi <span class="badge">11</span></a>
                </div>


            </div>
            <div class="col-md-9">
                <!-- Pregled -->
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Članovi</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="text" placeholder="Pretraži članove">
                            </div>
                        </div>
                        <br>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Ime</th>
                                <th>Email</th>
                                <th>Titula</th>
                                <th>Slika</th>
                                <th>Brisanje</th>
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
                                    echo "<td>".$row["KONTAKT"]."</td>             \n ";
                                    echo "<td>".$row["TITULA"]."</td>               \n ";
                                    echo "<td>".$row["IMG"]."</td>                       \n ";
                                    echo "<td> <form action=\"#UkloniClana\" method='post'> <input class=\"btn btn-danger\" type='submit' value=\"".$row['ID_CLANA']."\" name='delclan' aria-haspopup=\"true\" aria-expanded=\"true\" data-toggle=\"modal\" data-target=\"#UkloniClana\"> </form></td>";
                                    echo "</tr>                           \n ";
                                    $pom=$row["ID_CLANA"];
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

<footer id="footer">
    <p>Copyright BINGBOT, &copy; 2017</p>
</footer>

<!-- Modal -->

<!-- Postavi -->
<div class="modal fade" id="DodajClana" tabindex="-1" role="dialog" aria-labelledby="DodajClana">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="php_assets/add_member.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"> Dodaj clana </h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Ime Clana</label>
                        <input type="text" name="addime"class="form-control" placeholder="Ime">
                    </div>
                    <div class="form-group">
                        <label>Sadržaj</label>
                        <input type="text" name="addkontakt" class="form-control" placeholder="e-mail">
                    </div>

                    <div class="form-group">
                        <label>Titula</label>
                        <input name="addtitula" type="text" class="form-control" placeholder="Titula">
                    </div>
                    <div class="form-group">
                        <label>Slika</label>
                        <input type="text" name="addslika" class="form-control" placeholder="Naziv slike">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                    <button type="submit" class="btn btn-primary">Dodaj</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Btn Obrisi-->
<div class="modal fade" id="UkloniClana" tabindex="-1" role="dialog" aria-labelledby="UkloniClana">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"> Status clana </h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Clan <?php
                            $pom=$_POST["delclan"];
                            include('php_assets/functions.php');
                            obrisi_clana($pom);
                            header('Location:http://localhost/studentskiparlament/dist/admin_members.php');

                            ?>
                        </label>

                </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>