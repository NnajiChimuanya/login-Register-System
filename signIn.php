<?php
 include_once "./components/myheader.php";
?>

<div class="container">
    <div>
        <h2> Sign in</h2> 
    </div>
    
    <p> Dont have an account yet? <a href="./index.php">Create an account</a>
</div>


<div class="container">
    <form class="form-group" action='./php/signin.php' method="post">
        <input type = "text" name = "username" placeholder="username">
        <input type = "password" name = "password" placeholder="password">

        <div class="container submit">
            <button type="submit" name="submit"> Log in</button>
        </div>



    </form>

    <p>
        <a href="./forgotpassword.php">Forgot password?</a>
    </p>
</div>






<?php

include_once "./components/myfooter.php";
?>