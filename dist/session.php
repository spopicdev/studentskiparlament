<?php
session_start();
include('php_assets/dbconfig.php');

$user_check=$_SESSION['username'];
$sql="SELECT username from admin where username='$user_check'";
$ses_sql=mysqli_query ($connection,$sql);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
    mysqli_close($connection); // Closing Connection
    header('Location: login.php'); // Redirecting To Home Page
}