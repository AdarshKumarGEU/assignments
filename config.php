<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "web3";

$conn = mysqli_connect($hostname, $username, $password, $databasename);
if($conn){

    echo "Connection Successful...";?><br><br><br>
    <?php
}
else{
    echo "Connection failed..." + mysqli_connect_error();
}
?>