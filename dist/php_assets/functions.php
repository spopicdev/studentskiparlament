<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 08-Feb-17
 * Time: 16:52
 */

function dodaj_vest($ime, $sadrzaj) {
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'parlament';
    $connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
    or die('Error Connecting to MySQL DataBase');

    $datum=date('d.m.Y');
    $sql="INSERT INTO vest(NAZIV_VESTI, SADRZAJ_VESTI, DATUM_VESTI) VALUES ('$ime', '$sadrzaj','$datum')";
    if($connection->query($sql)){
        echo "Uspeso uneta vest: " .$ime;
    }
    else{
        echo "Insert error!" .mysqli_error($connection);
    }

}

function obrisi_vest($ime)
{
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'parlament';
    $connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
    or die('Error Connecting to MySQL DataBase');


    $sql_getID = "SELECT ID_VESTI FROM vest WHERE NAZIV_VESTI='$ime'";
    $result = mysqli_query($connection, $sql_getID);
    if ($result->num_rows > 0) {
        $row=mysqli_fetch_array($result);
        $id_vesti=$row['ID_VESTI'];
    }

    $sql="DELETE FROM vest WHERE ID_VESTI='$id_vesti'";
    if($connection->query($sql))
    {
        echo "Post successefully deleted!";
    }
    else
    {
        echo "Delete error!" .mysqli_error($connection);
    }
}

function dodaj_clana($ime, $kontakt, $titula, $slika='img/glava.jpg') {
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'parlament';
    $connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
    or die('Error Connecting to MySQL DataBase');

    $sql="INSERT INTO clan(IME_CLANA, KONTAKT, TITULA, IMG) VALUES ('$ime', '$kontakt','$titula', '$slika')";
    if($connection->query($sql)){
        echo "Uspeso unet clan: " .$ime;
    }
    else{
        echo "Greska pri unosenju" .mysqli_error($connection);
    }

}

function obrisi_clana($id_clana)
{
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'parlament';
    $connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
    or die('Error Connecting to MySQL DataBase');


    //$sql_getID = "SELECT ID_CLANA FROM clan WHERE IME_CLANA='$ime'";
    //$result = mysqli_query($connection, $sql_getID);

    /*if ($result->num_rows > 0) {
        $row=mysqli_fetch_array($result);
        $id_clana=$row['ID_CLANA'];
    }
    */
    $sql="DELETE FROM clan WHERE ID_CLANA='$id_clana'";
    if($connection->query($sql))
    {
       // header('Location:admin_members.php/#ObavestenjeODodavanju');
    }
    else
    {
        echo "Obrisano!" .mysqli_error($connection);
    }
}

function broj_clanova(){
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'parlament';
    $connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
    or die('Error Connecting to MySQL DataBase');
    $sql="SELECT COUNT(ID_CLANA) FROM clan";
    $result=mysqli_query($connection,$sql);
    $data=mysqli_fetch_assoc($result);

    echo $data['COUNT(ID_CLANA)'];

}

function broj_vesti(){
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'parlament';
    $connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
    or die('Error Connecting to MySQL DataBase');
    $sql="SELECT COUNT(ID_VESTI) FROM vest";
    $result=mysqli_query($connection,$sql);
    $data=mysqli_fetch_assoc($result);

    echo $data['COUNT(ID_VESTI)'];

}

