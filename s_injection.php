<?php

use function PHPSTORM_META\map;

include ('connect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sql injection</title>
    <style>
    * {
        font-size: 20pt;
        text-align: center;
        margin-top: 10px;
    }
    </style>
</head>

<body>
    <form action="" method="POST">
        user name : <input type="text" name="username" /><br><br>
        password : <input type="text" name="pass" /><br><br>
        <button name="btn">login</button>
    </form>

    <?php
    if(isset($_POST['btn'])){
        $username=$_POST['username'];
        $pass=$_POST['pass'];
        // لمنع sql injection
        $username=stripcslashes($username);
        $pass=stripcslashes($pass);
        $username=mysqli_real_escape_string($con,$username);
        $pass=mysqli_real_escape_string($con,$pass);
        // نهاية الكود للحماية 
        $select="SELECT * FROM `login` WHERE name='$username' AND pass='$pass'";
        $query=mysqli_query($con,$select);
        $row=mysqli_num_rows($query);
        $rown=mysqli_fetch_assoc($query);
        if($row>0){
            echo "login yes <br>";
            echo $rown['name']."__".$rown['pass'];
        }
        else{
            echo "no";
        }

    }
    ?>

</body>

</html>