<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="ques2.php">
    Variable 1<input type="text" name="var1">
    Variable 2<input type="text" name="var2">
    <input type="submit" name="submit">

    
    
    </form>


  
    
</body>
</html>


<?php

        if(isset($_POST['submit']))
        {
           
            $sum=$_POST['var1']+$_POST['var2'];
            echo "Sum of two variables is $sum";      
        }
        else{
            echo "No input";
        }
    ?>