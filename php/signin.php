<?php
if(isset($_POST["submit"])) {
    require_once "../database/db.php";

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // echo hash('md5', $password). "<br>";

    // echo hash('md5', $password). "<br>";





    include_once "./functions.php";

    if(checkIfUserExists($conn, $username)){
        $query = "SELECT * FROM user WHERE userName = '$username'";

        $result = $conn->query($query);
        
        if($row = $result->fetch_assoc()){
            $hashedPassword = $row["password"];

            $password = hash("md5", $password);


            
           
            if($password === $hashedPassword){
                echo "Successfully logged in";
            } else {
                echo "invalid password";
            }
        }
    } else {
        echo "user does not exist";
    }
}









?>