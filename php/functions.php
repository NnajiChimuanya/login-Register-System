<?php

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

