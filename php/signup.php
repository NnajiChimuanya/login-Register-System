<?php
    if(isset($_POST["submit"])) {
        require_once "../database/db.php";
        if($conn){

            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirmPassword = $_POST["confirmPassword"];



            if($password != $confirmPassword) {
                header("Location: ../index.php?error=passwordsdontmatch");
            }


            //importing the functions.php file that contains our function
            include_once "./functions.php";

            if(checkIfUserExists($conn, $username)){
                echo "username already exists";
                exit();
            }

            if(checkIfEmailExists($conn, $email)){
                echo "email already exists";
                exit();
            }

           

            

            $password = hash("md5", $password);

            $stmt = $conn->prepare("INSERT INTO user (userName, fullName, email, password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $username, $fullname, $email, $password);
            if($stmt->execute()) {
                echo "New account created!";
            } else {
                echo $conn->error;
            }

            $conn->close();


        }
    }




?>