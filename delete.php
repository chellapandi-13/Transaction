<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"banking_db");
$delete = $_GET['del'];


$sql = "delete from account where accno = '$delete'";


if(mysqli_query($connection,$sql))
           {

            echo '<script> location.replace("home.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;

           }

?>