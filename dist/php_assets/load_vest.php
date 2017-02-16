<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 08-Feb-17
 * Time: 15:29
 */

include ('dbconfig.php');
$sql="SELECT * FROM vest";
$result=mysqli_query($connection, $sql);
if($result->num_rows > 0 ){
    while($row=mysqli_fetch_array($result)){

        echo "<div class=\"panel panel-primary\"> \n
         <div class=\"panel-heading\">".$row["NAZIV_VESTI"]."</div> \n
         <div class=\"panel-body\">".$row["SADRZAJ_VESTI"]."</div> \n
         </div> \n  ";
    }
}
?>

