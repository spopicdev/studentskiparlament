<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 08-Feb-17
 * Time: 20:27
 */

include('functions.php');
$ime=$_POST['addime'];
$kontakt=$_POST['addkontakt'];
$titula=$_POST['addtitula'];
$slika=$_POST['addslika'];

dodaj_clana($ime, $kontakt, $titula, $slika);
header('Location:http://localhost/studentskiparlament/dist/admin_members.php');