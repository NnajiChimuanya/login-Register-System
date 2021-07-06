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


            function checkIfUserExists($conn, $username){
                $result = $conn->query("SELECT * FROM user WHERE userName = '$username'");

                if($result->num_rows > 0) {
                    return true;
                }
            }

            function checkIfEmailExists($conn, $email){
                $result = $conn->query("SELECT * FROM user WHERE email = '$email'");

                if($result->num_rows > 0) {
                    return true;
                }
            }

            if(checkIfUserExists($conn, $username)){
                echo "username already exists";
                exit();
            }

            if(checkIfEmailExists($conn, $email)){
                echo "email already exists";
                exit();
            }

            

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