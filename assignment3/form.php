<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Assignment 3</title>
</head>
<body>

    <h1> PLEASE FILL THIS FORM</h1>
    <form method="POST" action="form.php">
        ID  <input type="number" name="id" placeholder="ENTER THE ID" required><br><br>
        USERNAME  <input type="text" name="username" placeholder="ENTER THE USERNAME" required><br><br>
        EMAIL  <input type="email" name="email" placeholder="ENTER THE EMAIL" required><br><br>
        <input type="radio" id="male" name="gender" value="male" required="required">
        <label for="male">Male</label><br><br>
        <input type="radio" id="female" name="gender" value="female" required="required">
        <label for="female">Female</label><br><br>
        <input type="radio" id="other" name="gender" value="other" required="required">
        <label for="other">Other</label><br><br>
        CITY  <select name = "city" required>
                <option value = "Dehradun" selected>DEHRADUN</option>
                <option value = "Rishikesh">RISHIKESH</option>
                <option value = "Haridwar">HARIDWAR</option>
              </select>
        <br><br>
        <input type="submit" name="SUBMIT" value=" CLICK TO SUBMIT">
    </form>
    
</body>
</html>


<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $databasename="web3";

    $conn=mysqli_connect($hostname,$username,$password,$databasename);
    if(isset($_POST['SUBMIT'])){
        $id=$_POST['id'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $city=$_POST['city'];

        $sql="INSERT INTO `users` (`id`, `username`, `email`, `gender`, `city`) VALUES (NULL, '$username', '$email', '$gender', '$city')";
        mysqli_query($conn,$sql);
    }

?>





