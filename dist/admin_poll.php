<?php include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Ankete </title>
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
                <li ><a href="admin_pages.php">Stranice</a></li>
                <li class="active"><a href="admin_news.php">Vesti</a></li>
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
                <div class="create">
                    <button class="btn btn-default" type="button" aria-haspopup="true" aria-expanded="true">
                        Postavi stranicu
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
                        <h3 class="panel-title">Ankete</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="text" placeholder="Pretraga anketi...">
                            </div>
                        </div>
                        <br>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Naslov</th>
                                <th>Broj učesnika</th>
                                <th>Kreirana</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>Anketa 1</td>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                                <td>Jan 20, 2017</td>
                                <td><a class="btn btn-default" href="edit.html">Izmeni</a> <a class="btn btn-danger" href="#">Obriši</a></td>
                            </tr>

                        </table>
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>

<footer class="navbar-fixed-bottom" id="footer">
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
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>