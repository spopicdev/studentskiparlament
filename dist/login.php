<html>
<head>
    <title>Admin login</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">

</head>
<body class="login-body">
<div class="login-window">
    <img src="img/logo.png" class="login-logo"> <br>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Unesite korisnicko ime" class="text-box"><br>
        <input type="password" name="password" placeholder="Unesite lozinku" class="text-box"><br>
        <input type="submit" name="sub" class="login-button" value="Posalji" ><br>
        <input type="reset" name="del" class="login-button" value="Otkazi">
    </form>
</div>
</body>

</html>

<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 02-Feb-17
 * Time: 23:53
 */