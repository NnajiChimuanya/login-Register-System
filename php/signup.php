<?php
    if(isset($_POST["submit"])) {
        require_once "../database/db.php";
        if($conn){
            echo "connected to database successfully";
        }
    }




?>