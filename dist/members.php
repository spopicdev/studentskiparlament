<?php include ('header.html')
?>
<div class="navbar-default ">
    <ul class="nav navbar-nav nav-bgcolor">
        <li><a href="index.php">Naslovna</a></li>
        <li><a href="contact.php">Kontakt</a></li>
        <li><a href="ankete.php">Ankete</a></li>
        <li><a href="">Projekti</a></li>
        <li><a href="events.php">Dešavanja</a></li>
        <li class="active"><a href="members.php">Članovi</a></li>

    </ul>
</div>
<div class="container member-box">
<!--    -->
<!--    <div class="col-lg-6 member">-->
<!--        <img class="member-image" src="img/man1.png">-->
<!--        Atila Szenci-->
<!--    </div>-->
<!--    <div class="col-lg-6 col-sm-12 member">-->
<!--        <img class="member-image" src="img/man2.png">-->
<!--        Stefan Popic-->
<!--    </div>-->
<!--    <div class="col-lg-6 col-sm-12 member">-->
<!--        <img class="member-image" src="img/man1.png">-->
<!--        Zoran Popic-->
<!--    </div>-->
<!--    <div class="col-lg-6 col-sm-12 member">-->
<!--        <img class="member-image" src="img/man2.png">-->
<!---->
<!--    </div>-->
<!--    <div class="col-lg-6 col-sm-12  member">-->
<!--        <img class="member-image" src="img/man1.png">-->
<!--    </div>-->
<!--    <div class="col-lg-6 col-sm-12 member">-->
<!--        <img class="member-image" src="img/man2.png">-->
<!--    </div>-->
<!--    <div class="col-lg-6 col-sm-12 member">-->
<!--        <img class="member-image" src="img/man1.png">-->
<!--    </div>-->
<!--    <div class="col-lg-6 col-sm-12 member">-->
<!--        <img class="member-image" src="img/man2.png">-->
<!--    </div>-->
<!--    <div class="col-lg-6 col-sm-12 member">-->
<!--        <img class="member-image" src="img/man1.png">-->
<!--    </div>-->
<!--    <div class="col-lg-6 col-sm-12 member">-->
<!--        <img class="member-image" src="img/man2.png">-->
<!--    </div>-->
<!--    <div class="col-lg-6 col-sm-12 member">-->
<!--        <img class="member-image" src="img/man1.png">-->
<!--    </div>-->





    <?php
    $users = array(
        '0' => array('image' => 'img/man1.png', 'name' => 'marko'),
        '1' => array('image' => 'img/man2.png', 'name' => 'petr')

    );
    foreach ($users AS $user) {
        ?>

        <div class="col-lg-6 col-sm-12 member">
            <img class="member-image" src="<?= $user['image'] ?>">
            <p><?= $user['name'] ?></p>
        </div>

        <?php
    }

    ?>
</div>
<footer class="footer">
    <div class="container footer-txt">
        <p>Copyright @ 2017 BINGBOT Subotica</p>
    </div>
</footer>