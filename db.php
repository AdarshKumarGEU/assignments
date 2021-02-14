<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $databasename="web3";

    $conn=mysqli_connect($hostname,$username,$password,$databasename);
    if($conn){
        echo "We are connected";
    }