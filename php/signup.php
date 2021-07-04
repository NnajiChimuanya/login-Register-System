<?php
    if(isset($_POST["submit"])) {
        require_once "../database/db.php";
        if($conn){

            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirmpPassword = $_POST["confirmPassword"];

            $password = hash("md5", $password);



            // if($password !== $confirmpPassword) {
            //     header("Location : ../index.php?passwordnotthesame");
            // }

            $query = "INSERT INTO user (userName, fullName, email, password) VALUES ('$username', '$fullname', '$email', '$password')";

            if($conn->query($query)) {
                echo "New account created!";
            } else {
                echo $conn->error;
            }

            $conn->close();


        }
    }




?>