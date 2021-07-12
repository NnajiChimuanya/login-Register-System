<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">

    <title>Login</title>
</head>
<body>
    <header>
        <nav class = "navbar ">
        <ol>
            <li> <a href="#"> Home</a> </li>
            <li> <a href="#"> About us</a> </li>

            <?php
                if(isset($_SESSION["fullName"])){
                    echo "<li> <a href='./php/logout.php'> Log Out</a> </li>";
                } else {
                    echo "<li> <a href='./signin.php'> Log in</a> </li>";
                    echo "<li> <a href='./signup.php'> Sign up</a> </li>";
                }
            ?>

            
        </ol>
        </nav>
    </header>


    