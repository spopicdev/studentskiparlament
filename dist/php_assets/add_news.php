<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 09-Feb-17
 * Time: 12:40
 */

$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'parlament';
$connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
or die('Error Connecting to MySQL DataBase');

$naslov=$_POST['naslov'];
$sadrzaj=$_POST['editor1'];

$datum=date('Y.m.d');
$sql="INSERT INTO vest(NAZIV_VESTI, SADRZAJ_VESTI, DATUM_VESTI) VALUES ('$naslov', '$sadrzaj','$datum')";
if($connection->query($sql)){
    echo "Uspeso uneta vest: " .$naslov;
    header('Location:http://localhost/studentskiparlament/dist/admin_news.php');}
else{
    echo "Insert error!" .mysqli_error($connection);
}