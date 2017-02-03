<?php include ('header.html')
?>
<div class="navbar-default">
    <ul class="nav navbar-nav nav-bgcolor">
        <li><a href="index.php">Naslovna</a></li>
        <li><a href="contact.php">Kontakt</a></li>
        <li class="active"><a href="ankete.php">Ankete</a></li>
        <li><a href="">Projekti</a></li>
        <li><a href="events.php">Dešavanja</a></li>
        <li><a href="members.php">Članovi</a></li>

    </ul>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
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

