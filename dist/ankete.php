<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <title> Ankete</title>
</head>

<?php include('header.html'); ?>


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
                <li class="active"><a href="ankete.php">Ankete</a></li>
                <li><a href="projects.php">Projekti</a></li>
                <li><a href="members.php">Članovi</a></li>
            </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-5 panel-custom">
            <div class="panel panel-primary">
                <div class="panel-heading" style="padding:5%;">
                    <h3 class="panel-title">
                        Kako ocenjujete rad parlamenta?
                    </h3>
                </div>
                <div class="panel-body" style="padding:5%;">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios">
                                    5
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios">
                                    4
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios">
                                    3
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios">
                                    2
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios">
                                    1
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-primary btn-sm">
                        Vote</button>

            </div>
        </div>
    </div>

        <div class="col-lg-5 panel-custom">
            <div class="panel panel-primary">
                <div class="panel-heading" style="padding:5%;">
                    <h3 class="panel-title">
                        Kako ocenjujete rad parlamenta?
                    </h3>
                </div>
                <div class="panel-body" style="padding:5%;">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios">
                                    5
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios">
                                    4
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios">
                                    3
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios">
                                    2
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios">
                                    1
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-primary btn-sm">
                        Vote</button>

                </div>
            </div>
        </div>

</div>
</div>


    <footer id="footer" >
        <p>Copyright BINGBOT, &copy; 2017</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>